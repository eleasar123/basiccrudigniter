<!DOCTYPE html>
<html>
<head>
<title>Student Registration form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid" style="width: 50vw;padding: 10px;">
	<form method="post">
		<div class="card">
	
		<div ><?php echo @$error; ?></div>
	
  
    <label width="230">Enter Your Name </label>
    <input type="text" name="name" required/>


    <td width="230">Enter Your Username </td>
    <td width="329"><input type="text" name="username" required/></td>
 
  

    <td>Enter Your Email </td>
    <td><input type="text" name="email" required/></td>

  

    <td>Enter Your Password </td>
    <td><input type="password" name="pass" required/></td>



    <td>Enter your Gender</td>
    
    <input type="text" name="gender" required/>

  
    <td colspan="2" align="center">
	<input type="submit" name="register" value="Submit"/></td>
  
</div>
  </form>
</div>  
</body>
</html>
