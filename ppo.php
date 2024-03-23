<?php
$servername = "sql310.infinityfree.com";
$username = "if0_36204957";
$password = "Hy0790878665";
$dbname = "if0_36204957_form";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert data into the database
$sql = "INSERT INTO contact(name,email,message) VALUES ('$name', '$email','$message')";

if ($conn->query($sql) === TRUE) {
    echo "Thanks for contacting us, we will review and respond to your comments as soon as possible";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();
echo '<p>To Go back to THE Home Page,<a href="index.html"> click here link</a></p>';
?>