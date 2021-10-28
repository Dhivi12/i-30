<?php

$conn= mysqli_connect("localhost","root","","db_contact");
if(isset($_POST['submit'])){
	$txtName = $_POST['txtName'];
	$txtEmail = $_POST['txtEmail'];
	$txtMessage = $_POST['txtMessage'];

    $query=mysqli_query($conn,"insert into tbl_contact(Name,Email,Message) values('$txtName','$txtEmail','$txtMessage')");
    if($query){
        echo"Feedback submitted";
    }else{
        echo"Something went wrong";
    }
}
?>
