<?php

namespace Ijdb\Controllers;
class Joke
{
    private $jokesTable;

    public function __construct($jokesTable)
    {
        $this->jokesTable = $jokesTable;
    }

    public function home()
    {
        $joke = $this->jokesTable->find('id', 1)[0];

        return [
            'template' => 'joke/home.html.php',
            'title' => 'Internet Joke Database',
            'variables' => [
                'joke' => $joke
            ]
        ];
    }

    public function jokes()
    {
        $jokes = $this->jokesTable->findAll();

        return [
            'template' => 'joke/jokes.html.php',
            'title' => 'Joke list',
            'variables' => [
                'jokes' => $jokes
            ]
        ];
    }

    public function list()
    {
        $jokes = $this->jokesTable->findAll();

        return [
            'template' => 'joke/list.html.php',
            'title' => 'List of Jokes',
            'variables' => [
                'jokes' => $jokes
            ]
        ];
    }

    public function modify()
    {
        $jokes = $this->jokesTable->findAll();

        if (isset($_GET['action'])) {
            if ($_GET['action'] === 'edit') {
                $this->edit();
                $joke = $this->jokesTable->find('id', $_GET['id'])[0];
                $action = 'Edit';
            } elseif ($_GET['action'] === 'add') {
                $this->edit();
                $action = 'Add';
            } elseif ($_GET['action'] === 'delete') {
                $this->delete();
                $joke = $this->jokesTable->find('id', $_GET['id'])[0];
            }
        }

        return [
            'template' => 'joke/modify.html.php',
            'title' => 'Modify a Joke',
            'variables' => [
                'jokes' => $jokes,
                'joke' => $joke ?? '',
                'action' => $action ?? ''
            ]
        ];
    }

    public function edit()
    {
        if (isset($_POST['submit'])) {
            $this->jokesTable->save($_POST['joke']);

            header('location: modify');
            exit();
        }
    }

    public function delete()
    {
        if (isset($_POST['submit'])) {
            $this->jokesTable->delete('id', $_GET['id']);

            header('location: modify');
            exit();
        }
    }
}