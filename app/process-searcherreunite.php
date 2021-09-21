<?php
require_once('../config/dbconfig.php');
require_once('../config/security.php');

if (isset($_POST['btnreportfound'])) {
	$foundid=$_POST['txtid'];
	$sqlmovetofound="INSERT INTO found (`ID`,`Full_Name`,`Image`,`Age`,`Height`,`Weight`,`Gender`,`SkinColor`,`HairColor`,`EyeColor`,`Description`,`County`,`SubCounty`,`Location`,`Village`,`Reporter_ID`) SELECT `ID`,`Full_Name`,`Image`,`Age`,`Height`,`Weight`,`Gender`,`SkinColor`,`HairColor`,`EyeColor`,`Description`,`County`,`SubCounty`,`Location`,`Village`,`Reporter_ID` FROM lostandfoundWHERE casefile.ID='".$foundid."'";
	$sqlrun=mysqli_query($conn,$sqlmovetofound);
	if($sqlrun){
		//delete the found from lost and found
		$sqldelete="DELETE FROM lostandfoundWHERE ID='".$foundid."'";
		$query_run=mysqli_query($conn,$sqldelete);
		if ($query_run) {
			header("refresh:2;url=../views/familyMember/familyMemberdashboard.php");
			echo "Update Successful...Thank you for using our missingchild app";
		}
	}
}



?>