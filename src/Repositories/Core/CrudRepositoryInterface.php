<?php

namespace Balt\Repositories\Core;

use Illuminate\Support\Collection;

interface CrudRepositoryInterface
{

    /**
     * @param array $data
     * @param array|null $options
     */
    public function create(array $data, array $options = null);

    /**
     * @param $id
     * @param array $data
     * @param array|null $options
     */
    public function update($id, array $data, array $options = null);

    /**
     * @param $id
     * @param array|null $options
     */
    public function delete($id, array $options = null);

    /**
     * @param $id
     * @param array|null $options
     * @return mixed
     */
    public function find($id, array $options = null);

    /**
     * @param null $filter
     * @param array|null $options
     * @return Collection
     */
    public function all($filter = null, array $options = null) : Collection;

}