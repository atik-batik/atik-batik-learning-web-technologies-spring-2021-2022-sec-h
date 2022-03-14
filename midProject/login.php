<?php
	session_start();
	if(isset($_SESSION['user'])){
			header("location:profile.php");
		}
	if(isset($_POST['submit'])){
		$user = $_POST['name'];// save username to user variable 
		$pass = $_POST['pass'];// save password to pass variable 

		//session_start();
		$_SESSION['user'] = $user;
		$_SESSION['pass'] = $pass;

		//echo "Hi ". $_SESSION['user'];
		header("location:profile.php");
	}
?>
<html>
<head>
<title> MeetChat | Log in</title>
</head>
<style>
     #bar{height:100px;background-color: #90ee90; color: white;}
     
     #signup_button{
        background-color :#42b72a;
        width: 70px;
        text-align:center;
    }
    </style>


<body style="background-color: #ABEBC6">
<div id="bar">
        <div style="font-size:40px;">MeetChat</div>
        <div id="signup_button"> Signup</div> 
     </div>
    
    <h1 align="center">Log in to MeetChat</h1>
    <table align="center" border="1px">
        <tr>
            <td>

                <form align="center" method="post">
                    <legend>Login</legend>
                    <label>User Name : </label>
                    <input type="text" name="name"><br><br>
                    <label>Password : </label>
                    <input type="password" name="pass"><br><br>
                    <input type="submit" name="submit"><br><br>

                    <label>Create new Account ? </label>
                    <a href="user.php"> Click Here </a>
                                    

                </form>

            </td>
        </tr>
    </table>
</body>

</html>

