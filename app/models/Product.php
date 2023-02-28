<?php

namespace App\Models;
class  Product extends CRUD
{
    protected $basemodel;
    protected $table="tbl_product";
    public function __construct()
    {
        $this->basemodel = new BaseModel();
    }

    public function Add($name=null,$price=null)
    {
        $sql="INSERT INTO $this->table VALUES('','$name','$price')";
        $this->basemodel->setQuery($sql);
        return $this->basemodel->execute();

    }

    public function Delete()
    {
        // TODO: Implement Delete() method.
    }

    public function Edit()
    {
        // TODO: Implement Edit() method.
    }

    public function List()
    {
        $sql="SELECT * FROM $this->table";
        $this->basemodel->setQuery($sql);
        return $this->basemodel->loadAllRows();
    }

    public function ShowProductUpdate()
    {
        // TODO: Implement ShowProductUpdate() method.
    }
}

?>