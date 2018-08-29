<?php
include('Library/header.php');
$filepath=realpath(dirname(__FILE__));
include_once($filepath.'/../Classes/Department.php');
include_once($filepath.'/../Classes/Batch.php');
include_once($filepath.'/../Classes/Blood.php');
include_once($filepath.'/../Classes/Donor.php');
include_once($filepath.'/../Classes/DonateHistory.php');
    $donor = new Donor();
    $dept  = new Department();
    $blood = new Blood();
    $dhist = new DonateHistory();
    
    if(isset($_GET['d_id'])){
        $id = $_GET['d_id'];
//        echo $id;
        $dd = $donor -> deleteDonorByID($id);
    }

    $getDept  = $dept -> getAllDept();
    $getBldGp = $blood -> getAllBloodGroup();

    $au = $donor -> allDonor();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $sgp = $_POST['bg'];
        $sdep = $_POST['dept'];
        $sst = $_POST['st'];
        
//        echo $sgp." ".$sdep." ".$sst;
//        echo'<br/>';
        if($sgp =='All' && $sdep =='All'){

        }else{
//            echo $sgp." ".$sdep." ".$sst;
            $getD = $donor -> getDonorByIndex($sgp, $sdep, $sst); 
//            echo '<pre>';
//            print_r($getD);
//            echo '</pre>';
            $au = $getD;
        }

    }
?>
       <div class="container">
        <div class="row mgUpper ">
                <div class="panel panel-default ">
                <div class="panel-heading">
                    <h3 class="panel-title">ALL DONERS  <span style="color:red;">
                            <?php
                                if(isset($dd)){
                                    echo $dd;
                                }
                            ?>
                            </span></h3>
                </div>
                <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <form action="donerlist.php" method="post">  
                            <th>
                                 <div class="form-group">
                                <label for="sel1_bgroup">Blood group</label>
                                <select class="form-control" id="sel1_bgroup" name="bg">
                                    <option>All</option>
                            <?php
                            if(isset($getBldGp)){
                                while($value = $getBldGp -> fetch_assoc()){
                                    
                            ?>
                            <option value="<?php echo $value['blood_id']; ?>"><?php echo $value['blood_group']; ?></option>
                            <?php }}?>
                                </select>
                                </div> 
                            </th>
                            <th>
                                 <div class="form-group">
                                    <label for="sel1_dirstric">Department</label>
                                    <select class="form-control" id="sel1_dirstric" name="dept">
                                        <option>All</option>
                            <?php
                            if(isset($getDept)){
                                while($value = $getDept -> fetch_assoc()){
                                    
     
                            ?>
                            <option value="<?php echo $value['dept_id']; ?>"><?php echo $value['dept_name']; ?></option>
                            <?php
                            }}
                            ?>
                                    </select>
                                </div>
                            </th>
                            <th>
                                <div class="form-group">
                                    <label for="sel1_stats">Status</label>
                                    <select class="form-control" id="sel1_stats" name="st">
                                        <option value="1">Ready to donate</option>
                                        <option value="0">Not ready to donate</option>
                                    </select>
                                </div>
                            </th>
                            <th>
                                <div class="form-group">
                                    <label for="search">Search</label>
                                    <input type="submit" value="Submit" class="form-control btn btn-primary btn-sm" id="search">
                                </div>
                            </th>
                            </form>
                        </thead>
                    </table>    
                </div>
                
             <div class="table-responsive">
                <table class="table table-bordered  table-striped table-hover">
                    <thead>
                        <th>Name</th>
                        <th>Blood Group</th>
                        <th>Department</th>
                        <th>Batch</th>
                        <th>Contact No</th>
                        <th>Donor's Status</th>
                        <th>Email</th>
                        <th>Profile</th>
                        <th>Action</th>
 
                    </thead>
                    
                    <tbody>
                        <?php
                        if($au -> num_rows > 0){
                            while($value = $au -> fetch_assoc()){
                              $did = $value['donor_id'];
                              $getDatedif = $dhist -> getDateDiff($did);  
                        ?>
                        <tr>
                            <td><?php echo $value['donor_name']; ?></td>
                            <td><?php echo $value['blood_group']; ?></td>
                            <td><?php echo $value['dept_name']; ?></td>
                            <td><?php echo $value['batch_tag']; ?></td>
                            <td>0<?php echo $value['donor_contNo']; ?></td>
                            <td><?php if(isset($getDatedif)){
                                        if($getDatedif>0){
                                            echo '<p style="color:red;"><strong style="color:#4D4D4D;">'.$getDatedif.'</strong> Days left to ready for next donation</p>';
                                        }else{
                                        if($value['donor_status'] == 0) echo "Inactive"; else echo "Active";
                                    }
                                    }else{
                                        if($value['donor_status'] == 0) echo "Inactive"; else echo "Active";
                                    } ?></td>
                            <td><?php echo $value['donor_email']; ?></td>
                            <td><a target="_blank" href="../donorprofile.php?d_id=<?php echo $value['donor_id']; ?>" class="btn  btn-info">View Profile</a></td>
                            <td><a href="? d_id=<?php echo $value['donor_id']; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
                        </tr>
                        <?php }}
                        else{
                            echo '<h3>Not available!!!</h3>';
                        }
                        ?>
            
                    </tbody>

                </table>
              </div>
                    
            
                </div>  
                
            </div> 
        
        </div>  
    </div>
<?php
include('Library/footer.php');
?>