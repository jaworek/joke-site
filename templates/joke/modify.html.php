<a href="/<?= ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/') ?>?action=add">Add</a>

<?php
require 'list.html.php';

if (isset($_GET['action'])) {
    if ($_GET['action'] === 'edit' || $_GET['action'] === 'add') {
        require 'edit.html.php';
    } elseif ($_GET['action'] === 'delete') {
        require 'delete.html.php';
    }
}