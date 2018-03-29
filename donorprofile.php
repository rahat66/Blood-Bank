 
<?php
include("Library/header.php");
include_once('Classes/Donor.php');
 $donor = new Donor();
    if(isset($_GET['d_id'])){
        $did = $_GET['d_id'];
        echo $did;
        $getD = $donor -> getDonorById($did);
    }
?> 
    
    <div class="container  mgUpper ">
        <div class="row">
            
            <div class="col-md-4 col-sm-12 col-xs-12">
                
               <div class="panel panel-primary ">
                    <div class="panel-heading">
                        <h3 class="panel-title">Welcome</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <?php
                                    if(isset($_GET['action']) && $_GET['action'] == 'logout'){
                                    session_destroy();
                                    header('Location:index.php');
                                        }  
                                ?>
                                
                            <?php
                                        if(isset($_SESSION['donorId'])){
                            ?>
                                            <table class="table table-bordered table-condensed">
                                
                                <thead>
                                    <th><a href="? action=logout" class="btn btn-success">Logout</a></th>
                                </thead>
                                
                                <tbody>
                                    
                                    
                                    <tr>
                                        <td><a href="#" class="text-info">View Profile</a></td>
                                    </tr>
                                    
                                     <tr>
                                        <td><a href="#" class="text-info">Edit Profile</a></td>
                                    </tr>
                                    
                                    <tr>
                                        <td><a href="#" class="text-info">Change Password</a></td>
                                    </tr>
                                     
                                    <tr>
                                        <td><a href="#" class="text-info">Change Profile Photo</a></td>
                                    </tr>
                                    
                                    <tr>
                                        <td><a href="#" class="text-info">Add a Donation</a></td>
                                    </tr>
                                     
                                    <tr>
                                        <td><a href="#" class="text-info">Donation History</a></td>
                                    </tr>
                                     
                                    <tr>
                                        <td><a href="#" class="text-info">Privacy Options</a></td>
                                    </tr>
                                </tbody>
    
                            </table>
                                 <?php }
                            else{
                            ?>
                            <form action="index.php" method="post">
                            <input type="email" placeholder="Email" class="form-control input-sm" name="uemail" /><br/>
                            <input type="password" placeholder="Password" class="form-control input-sm" name="upass" /><br/>
                            <button class="btn btn-primary btn-sm" >Login</button>
                            </form>
                            <?php }?>
                        </div>
                    </div>       
                </div>
                
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                
                <div class="panel panel-primary ">
                    <div class="panel-heading">
                        <h3 class="panel-title">Profile<span style="float:right;"><a class="btn-link" style="color:white;" href="index.php">back</a></span></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <?php
                                    if(isset($getD)){
                                        while($value = $getD -> fetch_assoc()){
                                            

                                    ?>
                                    <tr>
                                        <td>Photo</td>
                                        <td><img class="img-responsive" style="width: 100px; height: 100px;" src="img/image-default.jpg" alt="profile" /></td>
                                    </tr>
                                    
                                     <tr>
                                        <td>Name</td>
                                        <td><?php echo $value['donor_name']; ?></td>
                                    </tr>
                                    
                                     <tr>
                                        <td>Blood Group</td>
                                        <td><?php echo $value['blood_group']; ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Member Status</td>
                                        <td><?php if($value['donor_status'] == 0) echo "Inactive"; else echo "Active"; ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Contact No</td>
                                        <td>0<?php echo $value['donor_contNo']; ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Department</td>
                                        <td><?php echo $value['dept_name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Batch</td>
                                        <td><?php echo $value['batch_tag']; ?></td>
                                    </tr>
                                    <?php }}?>
                                </tbody>
                                
                            </table>
                            
                            <div class="table-responsive">
                                
                                <table class="table table-bordered">
                                    <thead>
                                        <th>Donation Date </th>
                                        <th>Donated To</th>
                                        <th>Address </th>
                                    </thead>
                                    
                                    <tr>
                                        <td>2017-12-20</td>
                                        <td>Direct to Patient</td>
                                        <td>Prime Hospital</td>
                                    </tr>
                                    
                                     <tr>
                                        <td>2017-12-20</td>
                                        <td>Direct to Patient</td>
                                        <td>Prime Hospital</td>
                                    </tr>
                                    
                                </table>

                            </div>
                        </div>
                    </div>       
                </div>
            </div>
 
        
        </div> 
            
            
    </div>
      
      
<?php
include("Library/footer.php");
?>