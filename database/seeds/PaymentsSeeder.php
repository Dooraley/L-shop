<?php
declare(strict_types = 1);

use App\DataTransferObjects\Payment;
use App\Repositories\Payment\PaymentRepositoryInterface;
use App\Traits\ContainerTrait;
use Illuminate\Database\Seeder;

/**
 * Class PaymentsSeeder
 *
 * @author D3lph1 <d3lph1.contact@gmail.com>
 */
class PaymentsSeeder extends Seeder
{
    use ContainerTrait;

    /**
     * @var PaymentRepositoryInterface
     */
    private $paymentRepository;

    public function __construct(PaymentRepositoryInterface $paymentRepository)
    {
        $this->paymentRepository = $paymentRepository;
    }

    public function run(): void
    {
        if (config('app.env') !== 'dev') {
            return;
        }

        $this->paymentRepository->create(
            $this->make(\App\Models\Payment\PaymentInterface::class)
                ->setService('Database seeder')
                ->setProducts([
                    14 => 64,
                    15 => 32
                ])
                ->setCost(42)
                ->setUserId(1)
                ->setServerId(1)
                ->setIp('127.0.0.1')
                ->setCompleted(true)
        );

        $this->paymentRepository->create(
            $this->make(\App\Models\Payment\PaymentInterface::class)
                ->setService('Database seeder')
                ->setProducts([
                    14 => 64,
                    15 => 128,
                    17 => 64
                ])
                ->setCost(192)
                ->setUserId(1)
                ->setServerId(1)
                ->setIp('127.0.0.1')
                ->setCompleted(true)
        );

        $this->paymentRepository->create(
            $this->make(\App\Models\Payment\PaymentInterface::class)
                ->setProducts([
                    20 => 365,
                    21 => 0
                ])
                ->setCost(5575)
                ->setUserId(2)
                ->setServerId(3)
                ->setIp('127.0.0.1')
                ->setCompleted(false)
        );
    }
}
