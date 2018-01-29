<?php

function posts_list() {
    $data = array();
    $currentUser = isLogged();
    
    $data['post'] = model('posts')->getAllByUserId($currentUser['user_id']);
    $data['category'] = model('category')->getAllByCategoryId();
    $data['template_file'] = 'posts/list.php';
    render('layout.php', $data);
}

function posts_add() {
    $data = array();
    
    if (isPostRequest()) {
        $postData = postData();
        $currentUser = isLogged();
        
        if (model('posts')->addToUser($postData, $currentUser['user_id'])) {
            redirect('index.php?c=posts&m=list');
        }
    }
    $data['category'] = model('category')->getAllByCategoryId();
    $data['template_file'] = 'posts/add.php';
    render('layout.php', $data);
}
function posts_view() {
    $data = array();
    $id_post=$_GET['key'];
    if (isPostRequest()) {
        $postData = postData();
        $currentUser = isLogged();
        
        if (model('comment')->addCmt($postData, $currentUser['user_id'], $id_post)) {
            redirect('http://host2.vn/index.php?c=posts&m=view&key='.$id_post);
        }
    }
    $data['post'] = model('posts')->getPostById($id_post);
    $data['cmt'] = model('comment')->getCmtById($id_post);
    $data['category'] = model('category')->getAllByCategoryId();
    $data['template_file'] = 'posts/posts_view.php';
    render('layout.php', $data);
}
function posts_lists() {
    $data = array();
    $id_post=$_GET['cate'];
    $data['post'] = model('posts')->getPostByCateId($id_post);
    $data['category'] = model('category')->getAllByCategoryId();
    $data['template_file'] = 'posts/posts_lists.php';
    render('layout.php', $data);
}
