<?php
class connection{
    public function_construct(){
        $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        if($conn){
            die('Connect failed')
        }
        return $this -> $conn;
    }
}
?>