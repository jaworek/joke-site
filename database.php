<?php
$pdo = new PDO('mysql:host=localhost;dbname=ijdb;charset=utf8', 'student', 'student');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);