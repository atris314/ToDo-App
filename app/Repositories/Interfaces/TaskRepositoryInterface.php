<?php

namespace App\Repositories\Interfaces;

interface TaskRepositoryInterface
{
    public function create(array $data);
    public function all();
    public function find($id);
    public function update(array $data, $id);
    public function delete($id);
}
