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
    
    function donorByGroup($bg){
        $this -> sql ="SELECT COUNT(donor.blood_id) AS 'bgrp' FROM donor, blood WHERE donor.blood_id=blood.blood_id AND blood.blood_group = '$bg' ;";
        $this -> res = mysqli_query($this -> conn, $this -> sql);
            //return $this -> res;
        $value = $this -> res -> fetch_assoc();
        return $value['bgrp'];
        
    }
    
    function newDonor(){
        $this -> sql ="SELECT donor.donor_id, donor.donor_name, donor.donor_email, donor.donor_contNo, donor.donor_status, blood.blood_group, dept.dept_name, batch.batch_tag FROM donor,dept,batch,blood WHERE donor.blood_id=blood.blood_id AND donor.dept_id=dept.dept_id AND donor.batch_id=batch.batch_id ORDER BY donor.donor_id DESC LIMIT 5 ;";
        $this -> res = mysqli_query($this -> conn, $this -> sql);
        return $this -> res;
    }
}
?>