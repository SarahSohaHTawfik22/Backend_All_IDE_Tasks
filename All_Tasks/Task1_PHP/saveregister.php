<?php
session_start();
// Create connection
$conn = mysqli_connect("localhost","root","","registration");


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['firstname']) && $_POST['firstname'] && isset($_POST['password']) && $_POST['password']) {
        $fname = $_POST['firstname'];
       // $lname= $_POST['lastname'];
        $mail= $_POST['email'];
        $password= md5($_POST['password']);
        
       // $username=$_POST["username"];
        $query="SELECT * from `user` where email ='". $_POST['email']."' OR username='".$_POST['firstname'] ."' ";
        $find=mysqli_query($conn, $query);
       
        if( mysqli_num_rows($find)>0){
            echo "1";
            exit();
        }
       else{

        $sql = "INSERT INTO `user` (username, email,password)
        VALUES ('$fname', '$mail','$password')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            //header("Location:welcomedb.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    mysqli_close($conn);


       }
        



       
}

    

	
?>