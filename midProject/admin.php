<?php include('navi.php');?>
<html>

<body style="background-color: #ABEBC6">
    <h1 align="center"> Admin Login Page</h1>
    <table align="center" border="10px">
        <tr>
            <td>

                <form align="center" method="post">
                    <legend>Login</legend>
                    <label>User Name : </label>
                    <input type="text" name="name" placehoder="Enter User Name" required><br><br>
                    <label>Password : </label>
                    <input type="password" name="pass" placehoder="Enter User Name" required><br><br>
                    <input type="submit" name="submit"><br><br>

<!--
                    <label>Create new Account ? </label>
                    <a href="customer.php"> Click Here </a>
-->



                </form>

            </td>
        </tr>
    </table>
</body>
<?php
    if(isset($_POST["submit"])){
        header("Location:adminpage.php");
        
    }
    
    ?>

</html>

