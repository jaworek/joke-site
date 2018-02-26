<?php

namespace Ijdb\Controllers;
class Category
{
    private $categoryTable;

    public function __construct($categoryTable)
    {
        $this->categoryTable = $categoryTable;
    }

    public function list()
    {
        $categories = $this->categoryTable->findAll();
    }
}