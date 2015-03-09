<?php


namespace Common\Repositories;


abstract class BaseRepository {

    protected $model;

    function __construct($model)
    {
        $this->model = $model;
    }

    public function delete($id){
        $model = $this->find($id);
        $model->delete();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function store($formData){
        $this->model->create($formData);
    }

    public function update($formData){
        $model = $this->find($formData['id']);
        $model->fill($formData);
        $model->save();
    }

    public function all(){
        return $this->model->orderBy('created_at','desc')->get();
    }
    public function allLimit($limit){
        return $this->model->orderBy('created_at','desc')->limit($limit)->get();

    }

    public function findBy($key,$value){
        return $this->model->where($key,'=',$value)->first();
    }

    public function allActive(){
        return $this->model->where('active','=',true)->get();
    }

    public function toggleStatus($id){
        $model = $this->find($id);
        if($model->active == false){
            $model->active = true;
        }else{
            $model->active = false;
        }
        $model->save();
    }

} 