<?php

class Posts extends Model {
    public $table = 'post';
    public $primary_key = 'post_id';
    
    public function getAllByUserId() {
        $sql = "SELECT * FROM `{$this->table}`";
        
        return db_get_all($sql);
    }

    public function getPostById($id) {
        $id_post = $id;
        $sql = "SELECT * FROM `{$this->table}` WHERE `post_id` = $id_post";
       
        return db_get_all($sql);
    }

    public function getPostByCateId($id) {
        $id_post = $id;
        $sql = "SELECT * FROM `{$this->table}` WHERE `category_id` = $id_post";
       
        return db_get_all($sql);
    }
    
    public function addToUser($postData, $user_id) {
        $postData['user_id'] = $user_id;
        
        return db_insert($this->table, $postData);
    }
}
