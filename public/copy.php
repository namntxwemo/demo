<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ahihi</title>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
</head>
<body>
	<input type="file" name="file" id="file" />
	<button id="postFile" type="button">upload</button>
	<div id="output"></div>
	<script>
		$("#postFile").click(function(){
			var fd = new FormData();
			var files = $('#file')[0].files[0];
	    	fd.append('file',files);
	    	$.ajax({
					type: 'POST',
					url: "upload.php",
					processData: false,
					contentType: false,
					cache: true,
					async: true,
					data: fd,
					xhr: function () {
						var xhr = $.ajaxSettings.xhr();
						if (xhr.upload) {
							xhr.upload.addEventListener("progress", function (progress) {
								var total = Math.round((progress.loaded / progress.total) * 100);
								console.log(total);
							}, false);

							xhr.addEventListener("loadend", function (data) {
								console.log(data)
							}, false);

							xhr.addEventListener("error", function (err) {
								console.log(err)
							}, false);
						}
						return xhr;
					}
				})
		})
	</script>
</body>
</html>