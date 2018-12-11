<?php 
/*
include('/header.php'); */
?>
<html>
<head>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
<script src="croppie/croppie.js"></script>

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->

<link rel="stylesheet" href="croppie/croppie.css">
<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="upload.js"></script>

</head>

<?php  /* include('container.php'); */ ?>

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
				<button class="btn btn-success cropped_image">Upload Image</button>
	  		</div>	
			
	  		<div class="col-md-4 crop_preview">
				<div id="upload-image-i"></div>
	  		</div>
	  	</div>
	  </div>
	</div>	
	<br>	
	
</div>
<?php /*include('footer.php');*/?>

</div>
</body></html>
