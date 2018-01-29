<?php

class Category extends Model {
    public $table = 'category';
    public $primary_key = 'category_id';
    
    public function getAllByCategoryId() {
        $sql = "SELECT * FROM `{$this->table}`";
        
        return db_get_all($sql);
    }
}
?>