<?php
session_start();
$servername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="rout-company";   // check your DB name

if(isset($_SESSION['mail'])){

$keyword=$_POST["keyword"];


$conn= new mysqli ($servername,$dbuser,$dbpassword,$dbname);


if($conn->connect_error)

die("not connect :".$conn->connect_error);
else

{
///query
$query="SELECT productName
        FROM products 
        where productName like '%$keyword%'";

$result=$conn->query($query);
if($result->num_rows>0){
    echo "productName<br>";
    while($row=$result->fetch_assoc()){
        
        echo $row["productName"] . "<br>";
    }
}

}
    
    }

else {
    
    	echo " Go <a href='login.php'>Login</a> <br/>";

}
?>