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

<title> Login</title>
</head>

<body>
	<div id="log">
	<p>****Login****</p>
	<form action="" method="post" id="login-form">
		<input type="email" id="email" name="mail" placeholder="email"  required><br><br>
		<input type="password" name="password" id="idtwo" placeholder="Password" reqired><br><br>
		<button type="button"  name="login" id="Button_one">Login</button><br><br>
		<button type="button"  name="back" id="Button_two">Back</button><br><br>
		<span id="error_msg" style="color:yellow;display:none;"></span>
	</form>
	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript">
		$('#Button_one').click(function(e){
			e.preventDefault();
			var input2 = $("#email").val();
			var input3 = $("#idtwo").val();
			var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if(input2 == "" || input3 == ""){
				console.log('please complete filling the form .');
				$('#error_msg').text('you havent completed filling the form');
				$('#error_msg').show();

			}else{
				if(re.test(String(input2).toLowerCase())){
				console.log('success');
				$('#error_msg').hide();
				$.ajax({
					type: "POST",
					url: 'welcome.php',
					data: $('#login-form').serialize(),
					success: function(response)
					{   if(response=="1"){
						location.href ="welcome.php";
					}
					else{
						//$('#error_msg').text('you havent registered yet please go to registrstion page');
						//$('#error_msg').show();
                        location.href ="welcome.php";

					}
					//$.globalEval(response);
					var value=response;
					console.log(value);	
						
					}
				});
				}
				else{
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

