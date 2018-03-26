<?php
$filepath=realpath(dirname(__FILE__));
include_once($filepath.'/../Classes/Config.php');
?>
<?php
class Blood{
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
    
    
        function getAllBloodGroup(){
            $this -> sql = "SELECT * FROM `blood` ;";
            $this -> res = mysqli_query($this -> conn, $this -> sql);
            return $this -> res;
        }
}
?>