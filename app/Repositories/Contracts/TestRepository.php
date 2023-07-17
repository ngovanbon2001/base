<?php

namespace App\Repositories\Contracts;

use App\Repositories\Contract\RepositoryInterface;

/**
 * Interface TestRepository.
 *
 * @package namespace App\Repositories;
 */
interface TestRepository extends RepositoryInterface
{
    public function getAll();
}
