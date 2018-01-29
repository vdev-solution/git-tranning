<?php

function index_index() {
    redirect('index.php' . (isLogged() ? '?c=posts&m=list' : '?c=auth&m=login'));
}
