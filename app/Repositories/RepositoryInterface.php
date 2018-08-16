<?php

namespace App\Repositories;

interface RepositoryInterface
{
    public function findAll($columns = ['*']);

    public function paginate($perPage = 15, $columns = ['*']);

    public function create(array $data);

    public function update(array $data, $id, $attribute='id');

    public function delete($id);

    public function find($id, $columns = ['*']);

    public function findBy($attribute, $value, $columns = ['*']);
}