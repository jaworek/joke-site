<a href="/joke/add">Add</a>

<?php
require 'list.html.php';

if (isset($action)) {
    if ($action === 'Edit' || $action === 'Add') {
        require 'edit.html.php';
    } elseif ($action === 'delete') {
        require 'delete.html.php';
    }
}
