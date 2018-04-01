<?php
$filepath=realpath(dirname(__FILE__));
include_once($filepath.'/../Classes/Config.php');
?>
<?php
class Department{
     public $uhost = DB_HOST;
     public $uuser = DB_USER;
     public $upass = DB_PASS;
     public $udb   = DB_NAME;

        
     private $conn;
     private $sql;
     private $res;
        
        function __construct(){
            $this -> conn = mysqli_connect($this -> uhost, $this -> uuser, $this -> upass, $this -> udb);
        }
    
        function insertDept($nm, $des){
            $this -> sql = "INSERT INTO `dept` (`dept_id`, `dept_name`, `dept_des`) VALUES (NULL, '$nm', '$des');";
            $this -> res = mysqli_query($this -> conn, $this -> sql);
            
            if($this -> res){
                return "Success!!";
            }else{
                return "Failed!!";
            }
        }
    
        function getAllDept(){
            $this -> sql = "SELECT * FROM `dept` ;";
            $this -> res = mysqli_query($this -> conn, $this -> sql);
            return $this -> res;
        }
    
        function getDeptById($did){
            $this -> sql = "SELECT * FROM `dept` WHERE dept_id = '$did';";
            $this -> res = mysqli_query($this -> conn, $this -> sql);
            return $this -> res;
        }
    
        function updateDept($id, $name, $des){
            $this -> sql = "UPDATE `dept` SET `dept_name` = '$name', `dept_des` = '$des' WHERE `dept`.`dept_id` = '$id' ;";
            $this -> res = mysqli_query($this -> conn, $this -> sql);
            
            if($this -> res){
                header('Location:deptlist.php');
            }else{
                return "Failed!!";
            }
        }
}
?>