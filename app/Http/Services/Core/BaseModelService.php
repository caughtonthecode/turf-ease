<?php

namespace App\Http\Services\Core;

abstract class BaseModelService
{
    abstract public function model();

    public function all()
    {
        return $this->model()->all();
    }

    public function getById($id)
    {
        return $this->model()->find($id);
    }

    public function create($data)
    {
        return $this->model()->create($data);
    }

    public function update($id, $data)
    {
        return $this->model()->find($id)->update($data);
    }

    public function delete($id)
    {
        return $this->model()->find($id)->delete();
    }
}
