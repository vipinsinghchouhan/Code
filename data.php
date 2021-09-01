<?php
$servername = "localhost";
$username ="root";
$passeord = "";
//$database = "phptuta";

//Creating database connection

$conn = mysqli_connect ($servername, $username, $passeord);

// Check connection

if (!$conn){
    die("Failed to connect" . mysqli_connect_error());
}
else{
    echo "connection successful";
}


$sql ="INSERT INTO `code` (`Sno`, `Name`, `age`, `salery`) VALUES ('3', 'Rakesh', '19', '3000')";
if(mysqli_query($conn , $sql)){
    echo "success";

}
else{
    echo "error". mysqli_error($conn);

}
mysqli_close($conn);

?>