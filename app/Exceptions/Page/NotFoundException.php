<?php
declare(strict_types = 1);

namespace App\Exceptions\Page;

use App\Exceptions\DomainException;
use Throwable;

/**
 * Class NotFoundException
 *
 * @author  D3lph1 <d3lph1.contact@gmail.com>
 * @package App\Exceptions\Page
 */
class NotFoundException extends DomainException
{
    public function __construct($page, int $code = 0, Throwable $previous = null)
    {
        parent::__construct("Page [`$page`] not found", $code, $previous);
    }
}
