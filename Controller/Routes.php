<?php
// routes.php
require 'env.php';
require 'function.php';
require_once 'Models/models.php';


Router::url('index', 'get', 'index.php');
Router::url('register', 'get', 'register.php');
Router::url('login', 'get', 'login.php');
Router::url('insertcontactapps', 'post', 'insertcontactapps.php');
Router::url('updatecontactapps', 'get', 'edit_contactapps.php');
Router::url('deletecontactapps', 'get', 'delete_contactapps.php');


Router::url('/', 'get', function () {
    header('Location: login');
});
