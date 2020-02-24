<?php

namespace Balt\Services\Core;

use Illuminate\Support\Collection;

interface CrudServiceInterface
{
    /**
     * @param array $filter
     * @param array|null $options
     * @return Collection
     */
    public function all(array $filter = [], array $options = null): Collection;

    /**
     * @param array $data
     * @param array|null $options
     */
    public function update($object, array $data, array $options = null);

    /**
     * @param $object
     * @param array|null $options
     * @return bool
     */
    public function delete($object, array $options = null): bool;

    /**
     * @param $id
     * @param array|null $options
     */
    public function find($id, array $options = null);

    /**
     * @param array $data
     * @param array|null $options
     */
    public function create(array $data, array $options = null);

}