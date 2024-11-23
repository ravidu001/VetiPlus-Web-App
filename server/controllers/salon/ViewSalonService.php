<?php

// Include the database configuration file
include __DIR__ . '/../../../server/config/phpConfig.php';

// Validate and sanitize the $user_id variable (assuming it's already defined)
if (empty($user_id)) {
    die("Error: User ID is not set.");
}
$user_id = mysqli_real_escape_string($conn, $user_id);

// Query to select all services for the given salon ID
$query = "SELECT * FROM salonservice WHERE salonID = '$user_id'";

// Execute the query
$result = mysqli_query($conn, $query);

// Check if the query was successful
if (!$result) {
    die("Database query failed: " . mysqli_error($conn));
}

// Get the number of rows and fetch the data
$services = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $services[] = $row;
    }
    
}

// Close the database connection (optional but recommended)
mysqli_close($conn);
?>
