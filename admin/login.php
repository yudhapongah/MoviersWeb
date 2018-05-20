<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="src/css/font-awesome.min.css">

<style>
body {
  margin-top: 15%;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("src/img/bg-masthead.jpg");
   background-color: #cccccc;
   width: 100%;
}
* {
  box-sizing: border-box;
}
.container {
	left: 32.5%;
	width: 35%;
  position: relative;
  border-radius: 5px;
  background-color: rgba(255, 255, 255, .5);
  padding: 20px 0 30px 0;
}
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none;
}
input:hover,
.btn:hover {
  opacity: 1;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}
.hide-md-lg {
  display: none;
}
(max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  .hide-md-lg {
    display: block;
    text-align: center;
  }
  span.psw {
    float: right;
    padding-top: 16px;
}
}
</style>

	<title>Login Moviers</title>
	<link rel="stylesheet" type="text/css" href="src/css/landing-page.css">
</head>
<body>
	<div class="login">
		<div id="form_login">
        <div class="container">
			<h2 style="text-align: center">Login!</h2>
			<form method="POST" action="src/process/p_login.php">
				<input type="text" name="username" placeholder="Username"><br>
				<input type="password" name="password" placeholder="Password"><br>
				<input type="submit" name="login" value="LOGIN" id="button" style="align-content:center">
			</form>
            </div>
		</div>
	</div>
	
	<div id="footer" style="width: 100%; text-align: center; bottom: 0; padding: 0px; font-size: 14px; color: #b9b8b8;margin-top: 20px;">
		MoviersPunya2018
        </div>

	<script type="text/javascript">
		function myFunction() {
		    var x = document.getElementById("topnav");
		    if (x.className === "nav") {
		        x.className += " responsive";
		    } else {
		        x.className = "nav";
		    }
		}
	</script>
</body>
</html>