<?php
include("../database/db_connect.php");

if(isset($_POST['addjob']))
{
    $job_title = $_POST['job_title'];
    $company = $_POST['company'];
    $location = $_POST['location'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO jobs(job_title,company,location,salary)
            VALUES('$job_title','$company','$location','$salary')";

    if($conn->query($sql))
    {
        echo "<h3>Job Added Successfully</h3>";
    }
    else
    {
        echo "Error : ".$conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Job</title>
</head>
<body>

<h2>Add New Job</h2>

<form method="POST">

Job Title<br>
<input type="text" name="job_title"><br><br>

Company<br>
<input type="text" name="company"><br><br>

Location<br>
<input type="text" name="location"><br><br>

Salary<br>
<input type="text" name="salary"><br><br>

<input type="submit" name="addjob" value="Add Job">

</form>

</body>
</html>