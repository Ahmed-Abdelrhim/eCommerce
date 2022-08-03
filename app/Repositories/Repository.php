<?php


namespace App\Repositories;


use App\Interfaces\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class Repository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return $this->model->all();
    }

    public function create(array $data)
    {
        $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        $updateModel = $this->model->find($id);
        $updateModel->update($data);
    }

    public function delete($id)
    {
        $this->model->destroy($id);
    }

    public function show($id)
    {
        return $this->model->findOrFail($id);
    }

    public function getModel() {
        return $this->model;
    }
}
