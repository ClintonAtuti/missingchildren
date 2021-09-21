<?php

require_once('../config/dbconfig.php');

if (isset($_POST['submit'])) {
        
        $caseid = $_POST['caseid'];
        $userid = $_POST['userid'];
        $stime = $_POST['stime'];
     
        $sql= "INSERT INTO sighting (caseid,userid,stime) VALUES ('$caseid','$userid','$stime')";

        if(mysqli_query($link, $sql)){
        echo "Success";
        header('location: Sighting.php');
    }
    else{
        echo "Errors". mysqli_error($link);
        header('location: Sighting.php');
    }
}

?>