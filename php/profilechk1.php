<!DOCTYPE html>
<html>

    <head>
    <title>get id</title>
    <style>
.body{
   background-image: url("../images/thishbackground.jpg");
   background-position: center;
   background-size: cover;
 }
input[type=submit] {
  font-size: 10px;
  color: white;
  background-color: #1a75ff;
  border: none;
  border-radius: 5px;
  margin: 6px;
  padding: 6px 6px;
}

input[type=submit]:hover {
  background-color: #005ce6;
}
    
    </style>
       
    
    </head>
    <body class="body">
		<center style = "position: absolute; top: 40%;">       <!-- Thisunta kiyanna -->
			<p style="color: white;">Enter ID</p>
        
			<form action="profile.php" method="post">
				<input type="text" name="ID" >
				<input name="table" value="job_seeker" hidden>
				<input type="submit" value="submit">
			</form>
        </center>
    </body>
<html>