<?php
$correctPassword = "ug2322836"; 
$correctusername = "group3"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];
    $username = $_POST["username"]; 
    if ($password === $correctPassword&&$username === $correctusername) {
    
$servername = "sql310.infinityfree.com";
$username = "if0_36204957";
$password = "Hy0790878665";
$dbname = "if0_36204957_form";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo"connected successfull<br>";
        $sql = "SELECT * FROM contact";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<br>ID: " . $row["id"]. "<br>Name: " . $row["name"]."<br>EMAIL:". $row["email"]."      <br>comments:".$row["message"]. "<br>";
               
            }
        } else {
            echo "<br>0 results found<br>";
       
       }
       $conn->close();
       echo'<a href="index.html">clich here to return to home page</a>';}else{
           echo"invalid password try again<br>"; 
        echo'<a href="Admi.html">clich here to login again</a>';

       echo"<br>";

                  echo'<a href="index.html">clich here to return to home page</a>';
}}
?>