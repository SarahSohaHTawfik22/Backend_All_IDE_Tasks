<?php
session_start();

// Create connection
$conn = mysqli_connect("localhost","root","","registration");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$firstnm=$email="";
$sql="SELECT * FROM  `user` ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result)){
        if($row["user_id"]== $_SESSION['id']){
            $firstnm=$row["username"];
            //$lasnm=$row["Lastname"];
        }

    }
}
?>

<!DOCTYPE html>
<html>

<style type="text/css">
	<style type="text/css">
		#log1{
			background-color: #4d2f97;
			width: 354px;
			height: 376px;
		    margin-left: 37%;
		    margin-top: -1%;
		    text-align: center;
		}
        body{
			background: url('pink.jpeg');
			/*background: url('sky.jpg');*/
		}

</style>
<head>
	<title>home</title>
</head>
<body>
<div id='log1' >
<form action="" method="post" id="welcome-form">
<button type="button"  name="login" id="Button_one">Logout </button>
</form>
</div>
<div>


<h1>Welcome <?php echo $firstnm;?></h1>

</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
		$('#Button_one').click(function(e){
        e.preventDefault();
        
        <?php   
            //session_start(); //to ensure you are using same session
            session_destroy(); //destroy the session
        ?>
       location.href ="login.php";

	});


</script>

</body>
</html>

