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

function sanitize_for_discord($text) {
    // 1. Escape Discord markdown characters
    $text = preg_replace('/([\\\\*_\~`>|\\[\\]()])/', '\\\\$1', $text);

    // 2. Neutralize mass mentions
    $text = str_ireplace('@everyone', '@ｅveryone', $text);
    $text = str_ireplace('@here', '@ｈere', $text);

    // 3. Neutralize user mentions (<@1234567890> or <@!1234567890>)
    $text = preg_replace('/<@!?[0-9]+>/', '<＠user>', $text);

    return $text;
}

if ($stmt = mysqli_prepare($conn, $sql)) {
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "sssss", $name, $pending, $site, $email, $country);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            $formresults = "Your form was submitted!";
    
            // Send Discord webhook message
            $webhook_url = "xxxxx";
            $message = "New " . sanitize_for_discord($fanlistingname) . " Member!\n" .
                       "Name: " . sanitize_for_discord($name) . "\n" .
                       "Site: " . sanitize_for_discord($site) . "\n" .
                       "Country: " . sanitize_for_discord($country) . "\n" .
                       "Email: " . sanitize_for_discord($email);
    
            $data = array("content" => $message);
    
            $curl = curl_init($webhook_url);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen(json_encode($data))
            ));
            $response = curl_exec($curl);
            curl_close($curl);
    
            // Redirect to prevent double submit
            header("Location: " . $_SERVER['PHP_SELF'] . "?submitted=1#form");
            exit;
        } else {
            $formresults = "Your form was not submitted. Maybe try again? " . mysqli_error($conn);
        }
    
        mysqli_stmt_close($stmt);
    } else {
        echo "Your form was not submitted. Sorry. " . mysqli_error($conn);
    }
        // Close prepared statement
        mysqli_stmt_close($stmt);
?>
