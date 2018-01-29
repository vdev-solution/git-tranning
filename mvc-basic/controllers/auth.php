<?php
    
function auth_login() {
    $data = array();
    
    if (isPostRequest()) {
        $postData = postData();
        echo $postData['email'];
        echo $postData['password'];
        if (model('user')->authLogin($postData)) {
            redirect('index.php?c=posts&m=list');
        } else {
            $data['error'] = 'Login failed ! Please try again !';
        }
    }
    $data['template_file'] = 'auth/login.php';
    render('layout.php', $data);
}

function auth_register() {
    $data = array();
    $data['template_file'] = 'auth/register.php';
    
    if (isPostRequest()) {
        $postData = postData();
        if (model('user')->authRegister($postData)) {
            redirect('index.php?c=posts&m=list');
        } else {
            $data['error'] = 'Register failed ! Email exists ! Please try again !';
            $data['postData'] = $postData;
        }
    }

    render('layout.php', $data);
}

function auth_logout() {
    model('user')->authLogout();
    redirect('index.php?c=auth&m=login');
}