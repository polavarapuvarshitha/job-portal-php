<?php
include("../database/db_connect.php");

$sql = "SELECT * FROM jobs";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Jobs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h2 class="text-center text-primary mb-4">Available Jobs</h2>

    <table class="table table-bordered table-hover table-striped">

        <thead class="table-dark">
            <tr>
                <th>Job ID</th>
                <th>Job Title</th>
                <th>Company</th>
                <th>Location</th>
                <th>Salary</th>
                <th>Apply</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>

        <?php
        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
        ?>

        <tr>

            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['job_title']; ?></td>
            <td><?php echo $row['company']; ?></td>
            <td><?php echo $row['location']; ?></td>
            <td><?php echo $row['salary']; ?></td>

            <td>
                <a href="apply_job.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">
                    Apply
                </a>
            </td>

            <td>
                <a href="edit_job.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">
                    Edit
                </a>
            </td>

            <td>
                <a href="delete_job.php?id=<?php echo $row['id']; ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Are you sure you want to delete this job?');">
                    Delete
                </a>
            </td>

        </tr>

        <?php
            }
        }
        else
        {
            echo "<tr><td colspan='8' class='text-center'>No Jobs Available</td></tr>";
        }
        ?>

        </tbody>

    </table>

    <div class="mt-3">
        <a href="add_job.php" class="btn btn-success">Add New Job</a>
        <a href="dashboard.php" class="btn btn-primary">Back to Dashboard</a>
    </div>

</div>

</body>
</html>