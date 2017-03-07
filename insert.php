<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

/*change value icecreamshop to database name*/
$link = mysqli_connect("localhost", "root", "root", "DogAdoption");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$breed = mysqli_real_escape_string($link, $_GET['breed']);
$name = mysqli_real_escape_string($link, $_GET['name']);
$age = mysqli_real_escape_string($link, $_GET['age']);
 
// attempt insert query execution
$sql = "INSERT INTO adoptions (breed, name, age) VALUES ('$breed', '$name', '$age')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>