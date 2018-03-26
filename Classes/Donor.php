<?php
$filepath=realpath(dirname(__FILE__));
include_once($filepath.'/../Classes/Config.php');
?>

<?php
class Donor{
    
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
    
    function createDonor($ubg, $udept, $ubtch, $uname, $ucont, $ueml, $upass){
        $this -> sql = "INSERT INTO `donor` (`donor_id`, `blood_id`, `dept_id`, `batch_id`, `donor_name`, `donor_contNo`, `donor_email`, `donor_pass`, `donor_status`, `donor_joinDate`) VALUES (NULL, '$ubg', '$udept', '$ubtch', '$uname', '$ucont', '$ueml', '$upass', '1', CURRENT_DATE());";
        
        $this -> res = mysqli_query($this -> conn, $this -> sql);
//            return $this -> res;
            if($this -> res){
                return "Success!!";
            }else{
                return "Failed!!";
            }
    }
}
?>