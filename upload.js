

$(document).ready(function(){    
$image_crop = $('#upload-image').croppie({
enableExif: true,
viewport: {
width: 200,
height: 200,
type: 'square'
},
boundary: {
width: 300,
height: 300
}
});
$('#images').on('change', function () { 
var reader = new FileReader();
reader.onload = function (e) {
$image_crop.croppie('bind', {
url: e.target.result
}).then(function(){
console.log('jQuery bind complete');
}); 
}
reader.readAsDataURL(this.files[0]);
});
$('.cropped_image').on('click', function (ev) {debugger;
$image_crop.croppie('result', {
type: 'canvas',
size: 'viewport'
}).then(function (response) {
	debugger;
$.ajax({
url: "upload.php",
type: "POST",
data: {"image":response},
error: function (jqXHR, textStatus, errorThrown) {
	debugger;
                  if (jqXHR.status == 500) {
                      alert('Internal error: ' + jqXHR.responseText);
                  } else {
                      alert('Unexpected error.');
                  }
              },
success: function (data) {
	debugger;
html = '<img src="' + response + '" />';
$("#upload-image-i").html(html);
}

});
});
}); 
});
