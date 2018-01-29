<?php

class User extends Model {
    public $table = 'user';
    public $primary_key = 'user_id';
    
    public function authLogin($postData) {
        $user = static::getOneBy($postData['email'], 'email');
        
        if ($user && $user['password'] == md5($postData['password'])) {
            unset($user['password']);
            $_SESSION['logged'] = $user;
            return $user;
        }
        
        return false;
    }
    
    public function authRegister($postData) {
        $user = static::getOneBy($postData['email'], 'email');
        
        if ($user) {
            return false;
        } else {
            $postData['password'] = md5($postData['password']);
            $user_id = db_insert($this->table, $postData);
            unset($postData['password']);
            $postData['user_id'] = $user_id;
            $_SESSION['logged'] = $postData;
            
            return true;
        }
    }
    
    public function authLogout() {
        unset($_SESSION['logged']);
        session_destroy();
    }
}
