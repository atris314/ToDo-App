<?php

namespace App\Repositories;

use App\Models\Task;
use App\Repositories\Interfaces\TaskRepositoryInterface;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class TaskRepository.
 */

class TaskRepository extends BaseRepository implements TaskRepositoryInterface
{
    public function model()
    {
        return Task::class;
    }

    public function create(array $data)
    {
        return Task::create($data);
    }

    public function all()
    {
        return Task::all();
    }

    public function find($id)
    {
        return Task::findOrFail($id);
    }

    public function update(array $data, $id)
    {
        $task = $this->find($id);
        $task->update($data);
        return $task;
    }

    public function delete($id)
    {
        return Task::destroy($id);
    }
}
