<?php

namespace Ijdb;
class Routes implements \CSY2028\Routes
{
    public function callControllerFunction($route)
    {
        require '../database.php';

        $jokeTable = new \CSY2028\DatabaseTable($pdo, 'joke', 'id');
        $categoryTable = new \CSY2028\DatabaseTable($pdo, 'category', 'id');

        $jokeController = new \Ijdb\Controllers\Joke($jokeTable);
        $categoryController = new \Ijdb\Controllers\Category($categoryTable);

//        if ($route == '') {
//            $page = $jokeController->home();
//        } else if ($route == 'joke/jokes') {
//            $page = $jokeController->jokes();
//        } else if ($route == 'joke/modify') {
//            $page = $jokeController->modify();
//        } else {
//            $page = $jokeController->home();
//        }

        switch ($route) {
            case '':
                $page = $jokeController->home();
                break;
            case 'joke/jokes':
                $page = $jokeController->jokes();
                break;
            case 'joke/modify':
                $page = $jokeController->modify();
                break;
            default:
                $page = $jokeController->home();
                break;
        }

        return $page;
    }
}