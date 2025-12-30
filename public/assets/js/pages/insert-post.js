$(document).ready(function(){
	// Select Category
	$('select[name="category"]').on('change', function(){
		var stateID = $(this).val();
		if(stateID) {
			$.ajax({
				url: '/administrator/main/ajax-subcate/'+stateID,
				type: "GET",
				dataType: "json",
				success:function(data) {
					$('select[name="subcate_id"]').empty();
					$('select[name="subcate_id"]').append('<option value=""> Choose Sub Category... </option>');
					$.each(data, function(index, subcate) {
	                    $('select[name="subcate_id"]').append('<option value="'+ subcate.id +'">'+ subcate.subcate_en +'</option>');
	                });
				}
			});
		}else{
			$('select[name="subcate_id"]').empty();
		}
	});

	// upload image cover
	function readURL(input) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	            $('#img-upload').attr('src', e.target.result);
	        }
	        reader.readAsDataURL(input.files[0]);
	    }
	}
	$("#file").change(function(){
	    readURL(this);
	});

	// editor textarea
	tinymce.init({
	    selector: 'textarea',
	    plugins: [
			"autolink lists link image print preview hr anchor pagebreak",
			"searchreplace wordcount visualblocks visualchars image code fullscreen",
			"insertdatetime media nonbreaking save table directionality",
			"emoticons template paste textpattern"
		],
	    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
	    file_picker_types: 'image',
	    images_upload_handler: function (blobInfo, success, failure) {
	        let data = new FormData();
	        data.append('file', blobInfo.blob(), blobInfo.filename());
	        axios.post('/administrator/main/images-uploads', data)
			.then(function (res) {
				success(res.data.location);
			})
			.catch(function (err) {
				failure('HTTP Error: ' + err.message);
			});
	    }

	});
});