<?php

// create an array with menu items which will be used to validate the URL
$menu  = [
    'home' => 'Home',
    'about' => 'About',
    'services' => 'Services',
    'contact' => 'Contact'
];

// check if url has a query string with the page name
// and get the value to a variable
$page = $_GET['page'] ?? 'home';

// check if the page name is in the menu array
// if not, show an error page
if (!array_key_exists($page, $menu)) {
    $page = 'error';
}