<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style type="text/css">
		
		#log{
			background-color: #8f67c37a;
			width: 354px;
			height: 376px;
		    margin-left: 37%;
		    margin-top: 3%;
		    text-align: center;
		}
		body{
			/*background: url('blue.jpeg');*/
			background: url('blue.jpeg');

		}
		</style>

<title> Registration</title>
</head>

<body>
	<div id="log">
		<p>****Registration****</p>
		<form action="" method="post" id="register-form">
			<input type="text" name="firstname" id="id1" placeholder="username" required><br><br>
			<input type="email" id="email" name="email" placeholder="email"><br><br>
			<input type="password" name="password" id="idtwo" placeholder="Password" reqired><br><br></br>
			<button type=button  name="Register" id="Button_one" value="Submit">Register</button><br><br>
			 <button type="button"  name="back" id="Button_two">Back </button><br><br>
			<span id="error_msg" style="color:yellow;display:none;"></span>
			
		</form>
	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 	<script type="text/javascript">
		$('#Button_one').click(function(e){
			e.preventDefault();
			var input1 = $("#id1").val();
			var input2 = $("#id2").val();
			var input3 = $("#email").val();
			var input4 = $("#idtwo").val();
			var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

			if(input1 == "" || input2 == "" || input3 == "" || input4 == "" ){
				console.log('please complete filling the form .');
				$('#error_msg').text('you havent completed filling the form');
				$('#error_msg').show();

			}else{
				if(re.test(String(input3).toLowerCase())){
					console.log('success');
				$('#error_msg').hide();
				$.ajax({
					type: "POST",
					url: 'welcome.php',
					data: $('#register-form').serialize(),
					success: function(response)
					{ if(response=="1"){
						$('#error_msg').text(' Invalid Credentials');
					$('#error_msg').text('this email or username already exists');
				$('#error_msg').show();

					}else{
                        location.href ="welcome.php";
                        alert(response);

					}
						
						
					}
				});
				}else{
					$('#error_msg').text(' Invalid Credentials');
					$('#error_msg').text('you haven entered an invalid email');
				$('#error_msg').show();

				}
				
					
			}
		});
		$('#Button_two').click(function(e){
			e.preventDefault();
			location.href ="start.php";
		});
	</script>

  </body>
  </html>
 

