<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registration";

    // Create connection
    $conn = mysqli_connect("localhost","root","","registration");


    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

   

    session_start();
    $email="";
    if (isset($_POST['mail']) && $_POST['mail'] && isset($_POST['password']) && $_POST['password']) {
        $sql = "SELECT * FROM  `user` Where email ='". $_POST['mail']."' AND password ='". md5($_POST['password'])."' ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row =mysqli_fetch_assoc($result)) {
                
                //echo "id: " . $row["ID"]. " - Name: " . $row["Firstname"]. " " . $row["Lastname"]. "<br>";
                //$id = $row["ID"];
                //$_SESSION['name'] = $row["Firstname"];
               // $_SESSION['id'] = $row["ID"];
              
               //$mail=$row["Email"];
                if($row["email"]==$_POST['mail']){
                    $_SESSION['id']=$row["user_id"];
                    $_SESSION['email']=$row["email"];
                    $_SESSION['name']=$row["username"];
                   // $_SESSION['lname'] = $row["Lastname"];
                    echo "1";
                    //echo"login successfully <br>";
                    
                    
                    //header("Location:welcomedb.php");
    
                }else{
                  echo "0";
                    //echo"Invalide username or password";
                    //header("Location:logindb.php");
                }  
                
                    
                
            }
        } else {
            echo "0 results";
    
        }
        $conn->close();

    }
    
    



?>