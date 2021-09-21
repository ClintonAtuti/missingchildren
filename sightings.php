
<!DOCTYPE html>
<html>
<head>
	<title>Make Sightings </title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="card-body">
 
                            <form action="sightingserver.php" method="post">
                                <label>Case ID</label>
                                <input type="text" name="caseid">
                                <br><br>
                                <label>User ID</label>
                                <input type="number" name="userid">
                                <br><br>
                                <label>Time</label>
                                <input type="Time" class="form-control mb-2" name="stime">
                                <br><br>
                                <button class="btn btn-primary" name="submit">Submit</button>
                            </form>
	

</body>
</html>
