<?php
class User{
    private $con ;
    // database connect 
    public function __construct($localhost,$userName,$pass,$dbName)
    {
      $this->con = new mysqli($localhost,$userName,$pass,$dbName);
      if($this->con->connect_error)
      {
        die("DB connect failed".$this->con->connect_error);
      }
    }
    // for insert

    public function OnUserInsert($name,$email,$dept,$section)
    {
       $sqlInsert = "INSERT INTO  user_info (user_name,user_email,user_dept,user_section)
       VALUES('$name','$email','$dept','$section')";
      return  $this->con->query($sqlInsert);
    }
    // for select query
    public function OnSelect()
    {
        $sqlSelect = "SELECT * FROM user_info";
        return  $this->con->query($sqlSelect);
    }
    // for delete query
    public function OnDelete($id)
    {
        $deleteSql = "DELETE FROM user_info WHERE id = $id";
        return  $this->con->query($deleteSql);
    }
    
    // Select for update
    public function OnSelectUpdate($id)
    {
        $sel = "SELECT * FROM user_info WHERE id= $id";
        return  $this->con->query($sel);
    }
    // for update query
    public function OnUpdate($name,$email,$dept,$section,$update_id)
    {
      $updateSql = "UPDATE user_info SET user_name ='$name',user_email='$email', user_dept='$dept',user_section='$section' WHERE  id=$update_id";
      return  $this->con->query($updateSql);
    }

  // for desctructor 
    public function __destruct()
    {
        if($this->con)
        {
            $this->con->close();
        }
    }
}

?>