<?php

if(isset($_REQUEST['submit'])){

    if($_REQUEST['name'] == null){
        echo "invalid username...";
    }else{
        echo "success";
    }
}


?>