<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #228B22; color: #FF0000;}
body{
        background-color:lavender;
      }
</style>
</head>
<body>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<fieldset style="width: 350px;">
			    <legend><b>PROFILE PICTURE</b></legend>
   				 <img src="uploads/images.png" alt="Image "><br>
   				 <br>
    			<input type="file" name="fileToUpload" id="fileToUpload"><br>
    			<br>
   			<input type="submit" value="Submit" name="submit">
		</fieldset>
	  
	</form>
</body>
</html>