<?php
class crud extends Database{
    public $query;
    public function addProduct($value1, $value2, $value3, $value4)
    {
        $sql = "INSERT INTO products (image, nom, prix, description) VALUES ('$value1', '$value2', '$value3', '$value4');";
        mysqli_query($this->conn, $sql);
    } 
}
?>