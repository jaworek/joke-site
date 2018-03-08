<?php

namespace Ijdb;
class Routes implements \CSY2028\Routes
{
    public function getRoutes()
    {
        require '../database.php';

        $jokeTable = new \CSY2028\DatabaseTable($pdo, 'joke', 'id');
        $categoryTable = new \CSY2028\DatabaseTable($pdo, 'category', 'id');

        $jokeController = new \Ijdb\Controllers\Joke($jokeTable);
        $categoryController = new \Ijdb\Controllers\Category($categoryTable);

        $routes = [
            'joke/jokes' => [
                'GET' => [
                    'controller' => $jokeController,
                    'action' => 'jokes'
                ]
            ],
            'joke/modify' => [
                'GET' => [
                    'controller' => $jokeController,
                    'action' => 'modify'
                ]
            ],
            'joke/add' => [
                'GET' => [
                    'controller' => $jokeController,
                    'action' => 'add'
                ],
                'POST' => [
                    'controller' => $jokeController,
                    'action' => 'saveJoke'
                ]
            ],
            'joke/edit' => [
                'GET' => [
                    'controller' => $jokeController,
                    'action' => 'edit'
                ],
                'POST' => [
                    'controller' => $jokeController,
                    'action' => 'saveJoke'
                ]
            ],
            'joke/delete' => [
                'GET' => [
                    'controller' => $jokeController,
                    'action' => 'delete'
                ],
                'POST' => [
                    'controller' => $jokeController,
                    'action' => 'saveDelete'
                ]
            ],
            '' => [
                'GET' => [
                    'controller' => $jokeController,
                    'action' => 'home'
                ]
            ]
        ];

        return $routes;
    }
}