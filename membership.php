
<!--
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
-->




<!-- SCRIPT REFERENCE START -->

<!-- Jquery minified -->
<script  src="https://code.jquery.com/jquery-1.11.1.min.js" integrity="sha256-VAvG3sHdS5LqTT+5A/aeq/bZGa/Uj04xKxY8KM/w9EE=" crossorigin="anonymous"></script>



<script  src="https://code.jquery.com/jquery-1.11.1.min.js" integrity="sha256-VAvG3sHdS5LqTT+5A/aeq/bZGa/Uj04xKxY8KM/w9EE=" crossorigin="anonymous">

</script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<!-- SCRIPT REFERENCE END  -->

<!-- Include Bootstrap Datepicker  REFERENCE -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script> 

<?php
include_once('connection.php');
$result=mysqli_query($con,"select serialno from registration order by serialno desc limit 1");
?>


<!-- Bootstrap Datepicker  REFERENCE end -->

<form class="form-horizontal"  action="registration.php" method="post">

<fieldset>
<!-- Form Name -->
<legend>REGISTRATION FORM</legend>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="serialnum">Serial Number</label>  
  <div class="col-md-4">  
 <span >
  <?php 
  /*

while ($row = mysqli_fetch_assoc($result))
 {
    echo $row['serialno']+1;
 }*/
?>
</span>
  
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="currentdate">Date</label>  
  <div class="col-md-4">
  <p>
	<span id="spnCurDate"></span>
</p>
  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="membername">Member Name</label>  
  <div class="col-md-4">
  <input id="txtMemName" name="txtMemName" type="text" placeholder="Member Name" class="form-control input-md">
    
 </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="memshiptype">Membership Type</label>
  <div class="col-md-4">
    <select id="txtMemShiptype" name="txtMemShiptype" class="form-control">
      <option value="1">A</option>
      <option value="2">B</option>
    </select>
  </div>
</div>

<!-- Text input
<div class="form-group">
  <label class="col-md-4 control-label" for="memshiptype">Membership Type</label>  
  <div class="col-md-4">
  <input id="txtMemShiptype" name="txtMemShiptype" type="text" placeholder="Membership type" class="form-control input-md">
    
 </div>
</div>-->
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="age">Age &amp; Date of Birth</label>  
  <div class="col-md-4">
		<div class="input-group input-append date" id="datePicker">
                <input type="text" class="form-control" name="date" />
					<span class="input-group-addon add-on">
						<span class="glyphicon glyphicon-calendar"></span>
					</span>	
				 <input type="hidden" id="hdnDOB">
                <span class="col-md-4 control-label"> AGE </span>
				
                <span class="col-md-4 control-label" id="spnAge"></span>
        </div>			
			  
	</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="adhar">Aadhar Number</label>  
  <div class="col-md-4">
  <input id="txtAdhar" name="txtAdhar" type="text" placeholder="Aadhar number" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="address">Address</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="txtareaAdd" name="txtareaAdd"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lphone">Land Phone</label>  
  <div class="col-md-4">
  <input id="txtLphone" name="txtLphone" type="text" placeholder="Land phone" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mphone">Mobile</label>  
  <div class="col-md-4">
  <input id="txtMphone" name="txtMphone" type="text" placeholder="Mobile" class="form-control input-md">
    
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="dist">District</label>
  <div class="col-md-4">
    <select id="txtDist" name="txtDist" class="form-control">
      <option value="1">Thiruvanathapuram</option>
      <option value="2">Kollam</option>
      <option value="3">Pathanamthitta</option>
      <option value="4">Alappuzha</option>
      <option value="5">Kottayam</option>
      <option value="6">Edukki</option>
      <option value="7">Ernakulam</option>
      <option value="8">Thrissur</option>
      <option value="9">Palakkad</option>
      <option value="10">Malappuram</option>
      <option value="11">Kozhikode</option>
      <option value="12">Wayanad</option>
      <option value="13">Kannur</option>
      <option value="14">Kasargod</option>
    </select>
  </div>
</div>

<!-- Text input
<div class="form-group">
  <label class="col-md-4 control-label" for="dist">District</label>  
  <div class="col-md-4">
  <input id="txtDist" name="txtDist" type="text" placeholder="District" class="form-control input-md">
    
  </div>
</div>-->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pin">Pincode</label>  
  <div class="col-md-4">
  <input id="txtPin" name="txtPin" type="text" placeholder="Pincode" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nname">Nominee Name</label>  
  <div class="col-md-4">
  <input id="txtNname" name="txtNname" type="text" placeholder="Nominee Name" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="naddress">Address</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="txtareaNadd" name="txtareaNadd"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="officename">Office Name</label>  
  <div class="col-md-4">
  <input id="txtOfficeName" name="txtOfficeName" type="text" placeholder="Office Name" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="offaddress">Address</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="txtareaOffadd" name="txtareaOffadd"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="landoffice">Land Number</label>  
  <div class="col-md-4">
  <input id="txtLandoffice" name="txtLandoffice" type="text" placeholder="Land Number" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="moboffice">Mobile Number</label>  
  <div class="col-md-4">
  <input id="txtMoboffice" name="txtMoboffice" type="text" placeholder="Mobile Number" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="hphone">House Phone Number</label>  
  <div class="col-md-4">
  <input id="txtHphone" name="txtHphone" type="text" placeholder="House Phone Number" class="form-control input-md">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="localbody">Localbody</label>  
  <div class="col-md-4">
  <input id="txtLocalbody" name="txtLocalbody" type="text" placeholder="Localbody" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="area">Area</label>  
  <div class="col-md-4">
  <input id="txtArea" name="txtArea" type="text" placeholder="Area" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="adist">District</label>
  <div class="col-md-4">
    <select id="txtAdist" name="txtAdist" class="form-control">
      <option value="1">Thiruvanathapuram</option>
      <option value="2">Kollam</option>
      <option value="3">Pathanamthitta</option>
      <option value="4">Alappuzha</option>
      <option value="5">Kottayam</option>
      <option value="6">Edukki</option>
      <option value="7">Ernakulam</option>
      <option value="8">Thrissur</option>
      <option value="9">Palakkad</option>
      <option value="10">Malappuram</option>
      <option value="11">Kozhikode</option>
      <option value="12">Wayanad</option>
      <option value="13">Kannur</option>
      <option value="14">Kasargod</option>
    </select>
  </div>
</div>
<!-- Text input
<div class="form-group">
  <label class="col-md-4 control-label" for="adist">District</label>  
  <div class="col-md-4">
  <input id="txtAdist" name="txtAdist" type="text" placeholder="District" class="form-control input-md">
    
  </div>
</div>-->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="apin">Pincode</label>  
  <div class="col-md-4">
  <input id="txtApin" name="txtApin" type="text" placeholder="Pincode" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="vnum">Vehicle Number</label>  
  <div class="col-md-4">
  <input id="txtVnum" name="txtVnum" type="text" placeholder="Vehicle Number" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="vtype">Vehicle Type</label>  
  <div class="col-md-4">
  <input id="txtVtype" name="txtVtype" type="text" placeholder="Vehicle Type" class="form-control input-md">
    
  </div>
</div>


<div class="form-group">
<span class="col-md-4 control-label" ></span> 
   <div class="col-md-4">
	<!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Upload Photo</button>
  <input type="Submit" button id="Submit" name="Submit" value="MEMBERSHIP DATA" class="btn btn-info btn-lg">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog  modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Select image</h4>
        </div>
        <div class="modal-body">
          
		  <?php 
			include('/index.php'); 
			?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  </div>
  
</div>





<!-- Button -->
<!--
<div class="form-group">
	 <span class="col-md-4 control-label" ></span> 
   <div class="col-md-4">
	<input type="Submit" button id="Submit" name="Submit" value="MEMBERSHIP DATA" class="btn btn-default">
  </div>
</div>
 -->


</fieldset>
<script>

$(document).ready(function() {
	var d = new Date();
	var curr_date = d.getDate();
	var curr_month = d.getMonth();
	curr_month++
	var curr_year = d.getFullYear();
	$('#spnCurDate').html("<b1>" + curr_date + "/" +  curr_month  + "/" + curr_year  +"</b1>");

    $('#datePicker')
        .datepicker({
		    format: 'yyyy/mm/dd'
            //format: 'mm/dd/yyyy'
        })
        .on('changeDate', function(e)
           {
            // Revalidate the date field
            console.log(e.date.getFullYear());
			//$('#hdnDOB').val(e.date.getFullYear()); //keep year of birth in hidden to post
			console.log($('#hdnDOB').val());
			//Age calculation  
			var today = new Date();  
			var nowYear = today.getFullYear();
			var pastYear = e.date.getFullYear() ; //DOB from control
			var age = nowYear - pastYear; 
			console.log(age);
			$('#spnAge').html("<b1>" + age +"</b1>"); //display age in control                                              

        }); 

});

</script>
</form>
