

<?php

$conn = mysqli_connect('localhost','root');

if($conn){
    echo "Connection Successfull";
}
else {"no Connection";
}


mysqli_select_db($conn, 'contactuserdata');

$user = $_POST['Name'];
$email = $_POST['MobileNumber'];
$mobile = $_POST['Email'];
$comments = $_POST['Message'];

$query = " insert into userinfodata (user, email, mobile, comment)
values ('$Name', '$MobileNumber', '$Email', '$Message') ";





mysqli_query($conn, $query);


header('location:contactts.php');

?>