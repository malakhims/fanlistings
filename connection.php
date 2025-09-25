<?php
session_start();

$servername = "localhost";
$username = "YOURDATABASEUSERNAME"; // your database username
$dbname = "fanlistingsdatabase"; //name of yourd database
$password = "YOURDATABASEPASSWORD"; //password for your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Execute SELECT query
$result = mysqli_query($conn, "SELECT * FROM $fanlistingname WHERE pending = 'y'");

// Check if query executed successfully
if (!$result) {
    die('Error: ' . mysqli_error($conn));
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare an insert statement
    $sql = "INSERT INTO $fanlistingname (name, pending, site, email, country) VALUES (?, ?, ?, ?, ?)";

    // Set parameters
    $name = $_POST["name"];
    $pending = "n";
    $site = $_POST["site"];
    $email = $_POST["email"];
    $country = $_POST["country"];

    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "sssss", $name, $pending, $site, $email, $country);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            $formresults = "Your form was submitted!";

            // Send Discord webhook message
            $webhook_url = "xxxx";
            $message = "New $fanlistingname Member!\nName: $name\nSite: $site\nCountry: $country\nEmail: $email";
            
            $data = [
                "content" => $message,
                "allowed_mentions" => [
                    "parse" => []  // disables @everyone, @here, and user mentions
                ]
            ];

            $curl = curl_init($webhook_url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json'
            ]);
            $response = curl_exec($curl);
            curl_close($curl);

            // Redirect to prevent double submit and jump to form
            header("Location: " . $_SERVER['PHP_SELF'] . "?submitted=1#form");
            exit;

        } else {
            $formresults = "Your form was not submitted. Maybe try again? " . mysqli_error($conn);
        }

        // Close prepared statement
        mysqli_stmt_close($stmt);

    } else {
        echo "Your form was not submitted. Sorry. " . mysqli_error($conn);
    }
}

?>
