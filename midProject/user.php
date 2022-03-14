<?php include('navi.php');?>

<html>


<body style="background-color:#ABEBC6;">
    <?php
    
    $firstName =$lastName =$gender = $dobN = $phoneNum = $email = $userName = $password = "";
    
  $firstNameErr = $lastNameErr = $genderErr = $dobNErr = $phoneNumErr = $emailErr = $userNameErr = $passwordErr = "";

	$successfulMessage = $errorMessage = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["firstname"])) {
            $firstNameErr = "Name Requried";
        } else {
            $firstName = check_input($_POST["firstname"]);
            if(!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
                $firstNameErr = "Only letters and white space allowed";
            }
        }
        if(empty($_POST["lastname"])) {
            $lastNameErr = "Name Requried";
        } else {
            $lastName = check_input($_POST["lastname"]);
            if(!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
                $lastNameErr = "Only letters and white space allowed";
            }
        }
                
    if (empty($_POST["gender"])) {
    $genderErr= "Gender Required";
  } else {
    $gender = check_input($_POST["gender"]);
  }
        # agree
      if (empty($_POST["agree"])) {
    $agree_error = "Must click on checkbox ";
  } else {
    $agree = check_input($_POST["agree"]);
  }
        # agree
      if (empty($_POST["agree"])) {
    $agree_error = "Must click on checkbox ";
  } else {
    $agree = check_input($_POST["agree"]);
  }
       if (empty($_POST["email"])) {
           $emailErr = "Email Required";
       } else {
           $email = check_input($_POST["email"]);
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
       }
        
        if(empty($_POST["phonenum"])) {
            $phoneNumErr = "Phone Number Requried";
        } else {
            $phoneNum = check_input($_POST["phonenum"]);
            if(strlen($phoneNum)<11||strlen($phoneNum)>11||!preg_match("/^[0-9]{11}$/", $phoneNum))
            {
                $phoneNumErr="Invalid Number";       
            }
        }
         if(empty($_POST["username"])) {
            $userNameErr = "Name Requried";
        } else {
            $userName = check_input($_POST["username"]);
            if(!preg_match("/^[a-zA-Z ]*$/",$userName)) {
                $userNameErr = "Only letters and white space allowed";
            }
        }
        if(empty($_POST["password"])) {
            $passwordErr = "Password Requried";
        }
        
      
} #main
    
    function check_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}
 ?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Create Account</title>
    </head>

    <body style="background-color: #ABEBC6 ">

        <h1>Create Account</h1>

        <table align="center" style="width:50%">
            <tr>
                <td width="20%">&nbsp</td>
                <td width="100%">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                        <fieldset>
                            <fieldset>

                                <legend>
                                    <h3>Create Account</h3>
                                </legend>

                                <label for="firstname">First Name:</label>
                                <input type="text" name="firstname" id="firstname">
                                <span style="color:red"><?php echo $firstNameErr; ?></span>

                                <br><br>

                                <label for="lastname">Last Name:</label>
                                <input type="text" name="lastname" id="lastname">
                                <span style="color:red"><?php echo $lastNameErr; ?></span>
                                <h4>Gender: </h4>
                                <input type="radio" id="male" name="gender" value="male">
                                <label for="male">Male</label>
                                <input type="radio" id="female" name="gender" value="female">
                                <label for="female">Female</label>
                                <input type="radio" id="other" name="gender" value="other">
                                <label for="other">Other </label>
                                <span style="color:red"><?php echo $genderErr ; ?></span>
                                <br><br>

                                <label for="phonenum">Phone:</label>
                                <input type="tel" name="phonenum" id="phonenum">
                                <span style="color:red"><?php echo $phoneNumErr; ?></span>
                                <br><br>
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email">
                                <span style="color:red"><?php echo $emailErr; ?></span>

                                <br> <br>

                                <label style="color:black" for="dob">Date of birth:</label>
                                <input type="date" id="dob" name="dob">
                                <span style="color:red"><?php echo $dobNErr; ?></span>
                                <br><br>

                                <label for="username">Username:</label>
                                <input type="text" name="username" id="username">
                                <span style="color:red"><?php echo $userNameErr; ?></span>

                                <br><br>

                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password">
                                <span style="color:red"><?php echo $passwordErr; ?></span>
                                <br><br>

                                <p> Select Your Photo :
                                    <input type="file" name="file1">
                                </p>

                                <br><br>
                                <input type="submit" name="submit" value="Submit">



                                <p style="color:green;"><?php echo $successfulMessage; ?></p>
                                <p style="color:red;"><?php echo $errorMessage; ?></p>

                                <br>

                            </fieldset>
                        </fieldset>
                    </form>
                </td>
            </tr>
        </table>
    </body>

    <?php  # for upload data
if(isset($_POST["submit"])){
    
    $myfile = fopen("info.txt","a") or die ("Unable to open file!");
    
    $a = $_POST["firstname"];
    $b = $_POST["lastname"];
    $c = $_POST["gender"];
    $d = $_POST["phonenum"];
    $e = $_POST["email"];
    $g = $_POST["dob"];
    $h = $_POST["username"];
    $i = $_POST["password"];
    $j = $_FILES['file1']['name'];

    $txt = $a." - ".$b . " - ".$c." - ".$d." - ".$e." - ".$g." - ".$h." - ".$i." - ".$j."\n";
fwrite($myfile,$txt);
  
fclose($myfile);

}
    
?>


    <?php  # for upload image
    if(isset($_POST["submit"])){
    $fileName = $_FILES['file1']['name'];
$fileType = $_FILES['file1']['type'];
$fileSize = $_FILES['file1']['size'];
$fileTmpLoc = $_FILES['file1']['tmp_name'];
$targetLoc = "photosFile/";
    
if(!empty($fileName)){
    
    # 5 mb = 5242880 bytes
    if(($fileType == "image/jpeg" || $fileType == "image/png"|| $fileType == "image/jpg")){
//        if($fileName <= 5242880){
            move_uploaded_file($fileTmpLoc , $targetLoc.$fileName); 
//            echo "Uploaded Successfully"."<br>";
//            echo "File Name : ".$fileName."<br>";
//            echo "File Type : ".$fileType."<br>";
//            echo "File Size (in bytes) : ".$fileSize."<br>";
//            echo "File Size (in mb) : ".$fileSize * 0.000001 ."<br>";
//            echo "File Location : ".$fileTmpLoc."<br>";
////        }else{
//            echo "Select small file";
//        }
 
    }
}
else{
    echo "Select File";
}
}

?>


    </html>

   
