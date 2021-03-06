<?php
declare(strict_types = 1);

namespace App\Repositories\Server;

use App\Models\Server\ServerInterface;
use App\Repositories\BaseRepositoryInterface;

/**
 * Interface ServerRepositoryInterface
 *
 * @author  D3lph1 <d3lph1.contact@gmail.com>
 * @package App\Repositories\Server
 */
interface ServerRepositoryInterface extends BaseRepositoryInterface
{
    public function create(ServerInterface $entity): ServerInterface;

    public function update(int $serverId, ServerInterface $entity);

    public function find(int $id, array $columns);

    public function all(array $columns): iterable;

    public function getWithCategories(array $columns): iterable;

    public function allWithCategories(array $serverColumns, array $categoryColumns): iterable;

    public function categories(int $serverId, array $columns): iterable;

    public function enable(int $serverId): bool;

    public function disable(int $serverId): bool;

    public function count(): int;

    public function delete(int $serverId): bool;
}
