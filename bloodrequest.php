<?php
include("Library/header.php");
?>
      
    <div class="container">
        <div class="row mgUpper ">
            
                <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h3 class="panel-title">Make a Request for Blood</h3>
                </div>
                    
                <div class="panel-body">
                    
                    <div class="form-group">
                      <label for="usr_name">Your Name</label>
                      <input type="text" class="form-control" id="usr_name" required>
                    </div>
                    
                    <div class="form-group">
                      <label for="usr_cont">Your Contact No</label>
                      <input type="number" class="form-control" id="usr_cont" required>
                    </div> 
                                   
                     <div class="form-group">
                        <label for="sel1_bgroup">Required Blood Group</label>
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
                    
                    <div class="form-group">
                      <label for="bld_amt">Amount(Unit/Bag)</label>
                      <input type="number" class="form-control" id="bld_amt" required>
                    </div> 
                    
                    <div class="form-group">
                      <label for="usr_loc">Patient's Present Location</label>
                      <input type="text" class="form-control" id="usr_loc" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="sel1_dirstric">Patient's Present District</label>
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
                    
                   <div class="form-group">
                      <label for="dnt_date">Date of Donation</label>
                      <input type="date" class="form-control" id="dnt_date" required>
                    </div> 
                    
                    <div class="form-group">
                      <label for="usr_msg">More Message</label>
                      <textarea class="form-control" rows="5" id="usr_msg"></textarea>
                    </div> 
                    

                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>  
                
            </div> 
        
        </div>  
    </div>
    
          
<?php
include("Library/footer.php");
?>