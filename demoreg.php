<form id="contact-form" name="myForm" class="form" action="#" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="form-label" id="firstname" for="firstname">firstname</label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter firstname" tabindex="1"  pattern="[A-Za-z]+">
                    </div>
                    <div class="form-group">
                        <label class="form-label" id="lastname" for="lastname">lastname</label>
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="enter lastname" tabindex="2" pattern="[A-Za-z]+">
                        
	</div> 
                    <div class="form-group">
                        <label class="form-label" id="age" for="age">age</label>
                        <input type="text" class="form-control" id="age" name="age" placeholder="Enter age" tabindex="3">
                    </div>
                    
                    
                     
                     <div>
                        <label  id="gender" for="gender">gender </label><br>
                          
  
  <input type="radio" name="gender" value="gender"> Male<br>
  <input type="radio" name="gender" value=" gender">  Female

                        
                        
                       
                    </div>
                    
                    
                    
                    
                    <div class="form-group">
                        <label class="form-label" id="place" for="place">place</label>
                        <input type="text" class="form-control" id="place" name="place" placeholder="enter place" tabindex="2" pattern="[A-Za-z]+">
                        
                        
                        
                        
                        
                    </div>
                     
                    <div class="form-group">
                        <label class="form-label" id="email" for="email">email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="enter email" tabindex="2">
                        
                        
                        
                        
                        
                    </div>
                    
                     
                    <div class="form-group">
                        <label class="form-label" id="mobileno" for="mobileno">mobileno</label>
                        <input type="text" class="form-control" id="mobileno" name="mobileno" placeholder="enter mobileno" tabindex="2" maxlength="10" pattern="[0-9]+">
                        
                        
                        
                        
                        
                    </div>
                    <div class="form-group">
                        <label class="form-label">Licence Proof</label>
                        <input type="file"  name="i"  >
                        
                        
                        
                        
                        
                    </div>
						<div class="form-group">
                        <label class="form-label" id="firstname" for="firstname">Licence Number</label>
                        <input type="text" class="form-control" id="fname" name="lnum" placeholder="Enter licence number" tabindex="1"  >
                    </div>
                    <div class="form-group">
                        <label class="form-label" id="mobileno" for="mobileno">Vehicle Number</label>
                        <input type="text" class="form-control" id="mobileno" name="vechi_no" placeholder="enter Vehic le Number" tabindex="2" maxlength="10" >
                        
                        
                        
                        
                        
                    </div>
                    
                    
                     <div class="form-group">
                        <label class="form-label" id="place" for="place">Vehicle Name</label>
                        <input type="text" class="form-control" id="place" name="vehi_name" placeholder="enter Vehicle" tabindex="2" pattern="[A-Za-z]+">
                        
                    </div> 
                    <div class="form-group">
                        <label class="form-label" id="mobileno" for="mobileno">Seat Capacity</label>
                        <input type="text" class="form-control" id="mobileno" name="seat_capacity" placeholder="enter Capacity" tabindex="2" maxlength="10" pattern="[0-9]+">
					</div>
                        <div class="form-group">
                        <label class="form-label" id="place" for="place">Vehicle Type</label>
                        <input type="text" class="form-control" id="place" name="vehi_type" placeholder="enter VehicleType" tabindex="2" pattern="[A-Za-z]+">
                        
                    </div> 
                        
                        <div class="form-group">
                        <label class="form-label" id="mobileno" for="mobileno">Amount</label>
                        <input type="text" class="form-control" id="mobileno" name="amount" placeholder="enter Amount" tabindex="2" maxlength="10" pattern="[0-9]+">
                        
                        
                        
                        
                        
                    </div>
                        
                        
                     
                    <div class="form-group">
                        <label class="form-label" id="username" for="username">username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="enter username" tabindex="2">
                        
                        
                        
                        
                        
                    </div>
                    
                    
                    
                    
                         
                     
                    <div class="form-group">
                        <label class="form-label" id="password" for="password">password</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="enter password" tabindex="2">
                        
                        
                        
                        
                        
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                  <input type="submit" name="submit" value="button">
                </form>
                
                
          </div>
        </div>
    </div>
    <!-- //contact -->
 
 
 
                 <?php
if(isset($_REQUEST['submit']))
{
	$firstname=$_REQUEST['fname'];
	$lastname=$_REQUEST['lname'];
	$age=$_REQUEST['age'];
	$gender=$_REQUEST['gender'];
	$place=$_REQUEST['place'];
	$emailid=$_REQUEST['email'];
	$mobileno=$_REQUEST['mobileno'];
	
	$b=$_FILES['i'];
	$file_name=$b['name'];
	$file_type=$b['type'];
	$file_size=$b['size'];
	$file_path=$b['tmp_name'];
	$lnum=$_REQUEST['lnum'];
	$vno=$_REQUEST['vechi_no'];
	$vname=$_REQUEST['Vechi_name'];
	$seat=$_REQUEST['seat_capacity'];
	$type=$_REQUEST['Vechi_tpe'];
    $amount=$_REQUEST['amount'];
	
	$username=$_REQUEST['username'];
	$pasword=$_REQUEST['password'];
	//if(move_uploaded_file($file_path,'images/'.$file_name))


/*	$qry="select count(*) as cnt from registration where fname='$firstname' and phoneno='$mobileno'";
	$rs=mysql_query($qry);
	$res=mysql_fetch_array($rs);

	if($res['cnt']>0)
	{
	echo"<script>alert('Already Registered');</script>";
	}
	
	else*/
		$qry="select count(*) as cnt from vechicle where vehi_no='$vno'";
	$rs=mysql_query($qry);
	$res=mysql_fetch_array($rs);
	echo $rs['cnt'];
	if($res['cnt']>0)
	{
		echo"<script>alert('Already Alloted');</script>";
	}
	else
	{

	$qry2="insert into registration(fname,lname,age,gender,place,email,phoneno,licenceproof,licencenumber) values('$firstname','$lastname','$age','$gender','$place','$emailid','$mobileno','$file_name','$lnum')";
	mysql_query($qry2);
	
	$usertype="staff";
	
	$q="insert into login(username,password,usertype)values('$username','$pasword','$usertype')";
	
	mysql_query($q);
		
	{
	$sql="insert into vechicle(vehi_no,vechi_name,seat_capacity,Vechi_tpe,amount) values('$vno','$vname','$seat','$type','$amount')";
	mysql_query($sql);
	
	
	echo"<script>alert('Saved')</script>";
	
	}
}
?>