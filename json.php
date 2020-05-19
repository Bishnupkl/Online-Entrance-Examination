<!DOCTYPE html>
<html>
<head>
	<title>json</title>
</head>
<body>
	<script type="text/javascript">
		
		var obj ={"images":[{"transaction":{"eyeDistance":59,"face_id":1,"gallery_name":"safalll","height":132,"message":"no match found","pitch":6,"quality":1.21249,"roll":-3,"status":"failure","topLeftX":80,"topLeftY":79,"width":132,"yaw":-1}}]};

		var check =obj.images[0].transaction.status;
		if (check=="failure") {
			alert("failure");
		}

	</script>

</body>
</html>