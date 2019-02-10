<?php 
$conn=new mysqli('localhost','root','','form');
//check connection

if($conn->connect_error){
    die("connection failed" .$conn->connect_error);
            
}
echo "connected successfully";
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email_id=$_POST['email_id'];
$phone_no=$_POST['phone_no'];
$description=$_POST['description'];
$opt=$_POST['opt'];
$query="INSERT INTO contact(first_name,last_name,email_id,phone_no,description,opt)VALUES('$first_name','$last_name','$email_id','$phone_no','$description','$opt')";
if(mysqli_query($conn, $query))
{
    echo "records saved";
    
}
else{
    echo'not saved';
}
header("location:/contact.php",301);
        ?>
mysqli_close();