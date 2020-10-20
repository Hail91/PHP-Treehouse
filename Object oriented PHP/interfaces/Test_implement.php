<?php

class Test_implement implements RepositoryInterface {
    protected $file;

    public function __construct($file) {
        $this->file = $file;
    }
    // All method declared in Interface
    public function all($entity) {
        $data = json_decode(file_get_contents($this->file));
        return $data->$entity;
    }
    // Find method declared in Interface
    public function find($entity, $value, $field = 'id') {
        foreach($this->all($entity) as $key => $data) {
            if($data->$field === $value) {
                return array($data);
            }
        }
    }
}