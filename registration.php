<?php 
include_once('connection.php');
if(isset($_POST['Submit']))
    {
	 //$serno=$_POST['txtSerialNum'];
	 //$currentdate=$_POST[''];
	 $memname=$_POST['txtMemName'];
	 $serno=$_POST['txtSerialnumber'];
	 $memship=$_POST['txtMemShiptype'];
	 $dob=$_POST['date'];
	 $adhar=$_POST['txtAdhar'];
	 $add=$_POST['txtareaAdd'];
	 $lnum=$_POST['txtLphone'];
	 $mob=$_POST['txtMphone'];
	 $dist=$_POST['txtDist'];
	 $pin=$_POST['txtPin'];
	 $nname=$_POST['txtNname'];
	 $nadd=$_POST['txtareaNadd'];
	 $offname=$_POST['txtOfficeName'];
     $offadd=$_POST['txtareaOffadd'];
     $offlnum=$_POST['txtLandoffice'];
     $offmob=$_POST['txtMoboffice'];
     $hnum=$_POST['txtHphone'];
     $lbody=$_POST['txtLocalbody'];
     $area=$_POST['txtArea'];
     $adist=$_POST['txtAdist'];
     $apin=$_POST['txtApin'];
     $vnum=$_POST['txtVnum'];
     $vtype=$_POST['txtVtype'];	
	 
	 $GLOBALS['serialno']=$serno;
	 
	if(empty($memname))
	{
	$error = "Enter Member name !";
	$code = 1;
	}
	else if(!ctype_alpha($memname))
	{
	$error = "Member name may only contain alphabetical letters";
	$code = 1;
	}
	else if(empty($memship))
    {
	$error = "enter membership type !";
	$code = 2;
	}
	else if(empty($adhar))
	{
	$error = "Enter Aadhar NO !";
	$code = 3;
	}
	else if(!is_numeric($adharno))
	{
	$error = "Numbers only !";
	$code = 3;
	}
	else if(strlen($adharno)!=12)
	{
	$error = "12 characters only !";
	$code = 3;
	}
	
	
	$result=mysqli_query($con,"INSERT INTO registration ( currentdate,memname, membershiptype, dob, adharno, address, lphone, mobile, district, pin, nname, naddress, offname, offaddress, offlandno, offmob, houseno, localbody, area, adist, apin, vnum, vtype) VALUES
   (now(),'$memname','$memship','$dob','$adhar','$add','$lnum','$mob','$dist','$pin','$nname','$nadd','$offname','$offadd','$offlnum','$offmob','$hnum','$lbody','$area','$adist','$apin','$vnum','$vtype')"); 
     
	
	}
?>
	
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
<script src="croppie/croppie.js"></script>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 

<link rel="stylesheet" href="croppie/croppie.css">
<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="upload.js"></script>

</head>

<body class="">

<div class="modal-lg">
	
	<div class="modal-lg">
	  <div class="modal-lg">
	  	<div class="row">
	  		<div class="col-md-4">
				<div id="upload-image"></div>
	  		</div>
			
	  		<div class="col-md-4">
				<strong>Select Image:</strong>
				<br/>
				<input type="file" id="images">
				<br/>
				<button class="btn btn-success cropped_image">Save Member</button>
				
				<input id="txtSerialnumber" name="txtSerialnumber" type="text" value=<?php echo $serialno;?> style="display:none">
                <button class="btn btn-warning "onClick="document.location.href='http://www.ceowa.org';"/>Cancel</button>
				
			</div>	
			
	  		<div class="col-md-4 crop_preview">
				<div id="upload-image-i"></div>				
	  		</div>
	  	</div>
	  </div>
	</div>	
	<br>

</div>


</div>

</body>



</html>
