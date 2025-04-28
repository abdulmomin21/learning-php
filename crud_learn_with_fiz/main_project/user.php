<?php
class User{
    private $con ;
    public function __construct($localhost,$userName,$pass,$dbName)
    {
       $this->con = new mysqli($localhost,$userName,$pass,$dbName);
       if($this->con->connect_error)
       {
        die("DB connect failed".$this->con->connect_error);
       }
    }

    public function OnUserInsert($name,$email,$dept,$section)
    {
        $sqlInsert = "INSERT INTO user_info (user_name,user_email,user_dept,user_section)
        VALUES('$name','$email','$dept','$section')";
        return $this->con->query($sqlInsert);
    }
    public function OnSelect()
    {
        $sqlSelect = "SELECT * FROM user_info";
        return $this->con->query($sqlSelect);
        
    }
}

?>