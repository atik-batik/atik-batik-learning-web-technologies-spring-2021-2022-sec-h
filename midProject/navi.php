<!DOCTYPE html>
<html>

<head>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: darkcyan;
        }

        li {
            float: left;
            border-right: 1px solid #bbb;
        }

        li:last-child {
            border-right: 1px solid #bbb;
        }

        li a {
            display: inline-block;
            color: black;
            text-align: right;
            padding: 20px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: green;
        }

        .active {
            background-color: #04AA6D;
        }
        

    </style>
</head>

<body>

    <ul>
        <li><a href="Index.php">Home</a></li>
        <li><a href="admin.php">Admin Panel</a></li>
        <li><a href="profile.php">Profile</a></li>



        <li style="float:right"><a href="logout.php">Logout</a></li>
        <li style="float:right"><a href="login.php">Login</a></li>
    </ul>

</body>

</html>