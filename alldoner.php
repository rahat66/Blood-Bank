<?php
include("Library/header.php");
?>
    
    <div class="container">
        <div class="row mgUpper ">
                <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h3 class="panel-title">Member Registration</h3>
                </div>
                <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            
                            <th>
                                 <div class="form-group">
                                <label for="sel1_bgroup">Blood group</label>
                                <select class="form-control" id="sel1_bgroup">
                                    <option value="100">A positive(-)</option>
                                    <option value="101">A positive(+)</option>
                                    <option value="102">AB negative(-)</option>
                                    <option value="103">AB positive(+)</option>
                                    <option value="104">B negative(-)</option>
                                    <option value="105">B positive(+)</option>
                                    <option value="106">O negative(-)</option>
                                    <option value="107">O positive(+)</option>
                                </select>
                                </div> 
                            </th>
                            <th>
                                 <div class="form-group">
                                    <label for="sel1_dirstric">District</label>
                                    <select class="form-control" id="sel1_dirstric">
                                        <option value="1">Noakhali</option>
                                        <option value="2">Comilla</option>
                                        <option value="3">Chittagong</option>
                                        <option value="4">Chandpur</option>
                                        <option value="5">Barisal</option>
                                        <option value="6">Khulna</option>
                                        <option value="7">Mymensingh</option>
                                        <option value="8">Rajshahi</option>
                                    </select>
                                </div>
                            </th>
                            <th>
                                <div class="form-group">
                                    <label for="sel1_stats">Status</label>
                                    <select class="form-control" id="sel1_stats">
                                        <option value="1">Ready to donate</option>
                                        <option value="2">Not ready to donate</option>
                                    </select>
                                </div>
                            </th>
                            <th>
                                <div class="form-group">
                                    <label for="search">Search</label>
                                    <input type="submit" value="Submit" class="form-control btn btn-primary btn-sm" id="search">
                                </div>
                            </th>
                            <th></th>
                        </thead>
                    </table>    
                </div>
                
             <div class="table-responsive">
                <table class="table table-bordered  table-striped table-hover">
                    <thead>
                        <th>Name</th>
                        <th>Blood Group</th>
                        <th>Age</th>
                        <th>Living District</th>
                        <th>Contact No</th>
                        <th>Donor's Status</th>
                        <th>Email</th>
                        <th>Profile</th>
 
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td>Tanzila Tania</td>
                            <td>A positive(+)</td>
                            <td>21 yrs</td>
                            <td>Noakhali</td>
                            <td>0123456789</td>
                            <td>Active</td>
                            <td><a href="#" class="btn  btn-info">Send Email</a></td>
                            <td><a href="#" class="btn  btn-info">View Profile</a></td>
                        </tr>
                        
                        <tr>
                            <td>Tanzila Tania</td>
                            <td>A positive(+)</td>
                            <td>21 yrs</td>
                            <td>Noakhali</td>
                            <td>0123456789</td>
                            <td>Active</td>
                            <td><a href="#" class="btn  btn-info">Send Email</a></td>
                            <td><a href="#" class="btn  btn-info">View Profile</a></td>
                        </tr>
                        
                        <tr>
                            <td>Tanzila Tania</td>
                            <td>A positive(+)</td>
                            <td>21 yrs</td>
                            <td>Noakhali</td>
                            <td>0123456789</td>
                            <td>Active</td>
                            <td><a href="#" class="btn  btn-info">Send Email</a></td>
                            <td><a href="#" class="btn  btn-info">View Profile</a></td>
                        </tr>
            
                    </tbody>

                </table>
              </div>
                    
            
                </div>  
                
            </div> 
        
        </div>  
    </div>
    
<?php
include("Library/footer.php");
?>