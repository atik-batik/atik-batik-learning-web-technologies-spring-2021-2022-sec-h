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
<br>
<hr />
<ul>
    <table style="width:100%">
        <tr>
            <td width="25%">
                <h4>Contact Us</h4>
                Call us 11am-11pm(Everyday)<br>
                <img src="https://img.icons8.com/ios-glyphs/30/000000/phone-message.png" /> 017-xxxx-yyyy<br>

                <img src="https://img.icons8.com/ios-glyphs/20/000000/email.png" />
                Mail: atik@gamil.com<br>

                <img src="https://img.icons8.com/ios-glyphs/20/000000/marker--v2.png" />
                Block B,Road-2,Bashundhar, Dhaka-****
            </td>
        </tr>
    </table>
    <br>
    © 2021 - <?php echo date("Y");?>  | All Rights Reserved

</ul>

</html>
