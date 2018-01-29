<?php

class Comment extends Model {
    public $table = 'comment';
    public $primary_key = 'comment_id';
    
    // public function getAllCmtById() {
    //     $sql = "SELECT * FROM `{$this->table}`";
        
    //     return db_get_all($sql);
    // }

    public function getCmtById($id) {
        $id_cmt = $id;
        $sql = "SELECT * FROM `{$this->table}` WHERE `post_id` = $id_cmt";
       
        return db_get_all($sql);
    }

    // public function getPostByCateId($id) {
    //     $id_post = $id;
    //     $sql = "SELECT * FROM `{$this->table}` WHERE `category_id` = $id_post";
       
    //     return db_get_all($sql);
    // }
    
    public function addCmt($postData, $user_id, $post_id) {
        $postData['user_id'] = $user_id;
        $postData['post_id'] = $post_id;

        return db_insert($this->table, $postData);
    }
}
