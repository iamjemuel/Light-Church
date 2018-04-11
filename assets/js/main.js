
$(document).ready(function(){
	$('.carousel').carousel({
        interval: 5000 //changes the speed
    });

	$( "#shortDesc" ).click(function() {
		$( "#longDesc" ).toggle( "slow", function() {

		});
	});
	$('#summernote').summernote({
		height: 400
	});
	$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    $("#input-image-3").fileinput({
	    uploadUrl: "./image/",
	    allowedFileExtensions: ["jpg", "png", "gif"],
	    maxImageWidth: 200,
	    maxImageHeight: 150,
	    resizePreference: 'height',
	    maxFileCount: 1,
	    resizeImage: true
	}).on('filepreupload', function() {
	    $('#kv-success-box').html('');
	}).on('fileuploaded', function(event, data) {
	    $('#kv-success-box').append(data.response.link);
	    $('#kv-success-modal').modal('show');
	});
});

function LoginModal(){
	$('#myModalLogin').modal('show');
}

