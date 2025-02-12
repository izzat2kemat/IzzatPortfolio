<?php
include('includes/db.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Event Registration System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Welcome to Event Registration</h2>
    <a href="participant/login.php" class="btn btn-primary">Participant Login</a>
    <a href="admin/login.php" class="btn btn-secondary">Admin Login</a>
</div>
</body>
</html>
