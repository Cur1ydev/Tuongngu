<?php
namespace App\Models;
abstract class CRUD
{
    abstract public function Add($value=null);

    abstract public function Edit();

    abstract public function Delete();

    abstract public function List();

    abstract public function ShowProductUpdate();
}