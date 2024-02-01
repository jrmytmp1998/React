<?php
// Step 2: Establish Database Connection
$host = "localhost";
$username = "root";
$password = "";
$database = "mydb2023";

$connection = new mysqli($host, $username, $password, $database);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Step 3: Create Functionality (Create a new record)
 if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Form submitted, process the data
 //$name =  "Jeremy Tiempo" ;   //
 $name = $_POST["myName"];
 //   $age =  "25";           //
 $age = $_POST["myAge"];
//	 
//$address =  "" ;                        //
$address = $_POST["myAddress"];

    // Step 3: Insert data into the database
    $sql = "INSERT INTO `t1`( `name`, `age`, `address`) VALUES ('$name','$age','$address')";
    $result = $connection->query($sql);

    if ($result) {
        echo "Record created successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
 }
?>


<html>


<head>

<title>
INSERT DATA

</title>

</head>




<body>


<form action = "insert.php" method = "POST">
<h2>Name: </h2>
<input type = "text" name = "myName"><br>
<h2>Age: </h2>
<input type = "text" name = "myAge"><br>
<h2>Address: </h2>
<input type = "text" name = "myAddress"><br>

<button type = "submit">Send</button>
</form>

</body>


</html>