<?php
require ('database.php'); 

class Query
{

    public function insert($values = array()){
        global $database;
        $sql = "INSERT INTO candidatures (fullname,email,category,body,city,curriculumVitae) VALUES ('".implode("','",$values)."')";
        if($database->query($sql)){
            return $database->inserted_id();
        }else{
            return mysqli_error($database->connection);
        }
    }
}