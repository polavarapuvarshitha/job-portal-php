<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow p-4">

        <h2 class="text-center text-primary">
            Welcome to Job Portal Dashboard
        </h2>

        <hr>

        <div class="d-grid gap-3">

            <a href="view_jobs.php" class="btn btn-success">
                View Jobs
            </a>

            <a href="add_job.php" class="btn btn-primary">
                Add Job
            </a>

            <a href="apply_job.php" class="btn btn-warning">
                Apply for Job
            </a>

            <a href="profile.php" class="btn btn-info">
                My Profile
            </a>

            <a href="logout.php" class="btn btn-danger">
                Logout
            </a>

        </div>

    </div>

</div>

</body>
</html>