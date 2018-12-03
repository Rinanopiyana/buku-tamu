<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.women {
    width: 20%;
    border-radius: 30%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body background="photo.jpg">

<h2 align="center">SILAHKAN LOGIN TERLEBIH DAHULU</h2>
<div align="center">
	<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
</div>


<div id="id01" class="modal">
  
  <form class="modal-content animate" name="form1" action="cek_login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="women.png" alt="women" class="women">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="id_user" id="id_user" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="password" required>
        
      <button type="submit">Login</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>


	<!-- <div class="container">
      <div class="row">
        <div align="center" class="col-md-12">
           <img src="man.png" >
        </div>
      </div>
    </div>
     <br>
     <h5 align="center" style="font-size: 30px">LOGIN</h5>
    <div class="login">
      <div class="insert">
        <form name="form1" action="cek_login.php" method="POST">
              <div align="center">
            <span><label>Username/Email</label></span>
            <span><input type="text" name="id_user" id="id_user" placeholder="Masukan username/email"></span>
          </div>
          <div align="center">
            <span><label>Password</label></span>
              <span><input type="password" name="password" id="password" placeholder="Masukan kata sandi"></span>
          </div>
          <hr>
          <div class="sign">
            <div align="center" class="submit">
              <input type="submit" value="LOGIN" >
            </div>
            <div class="clear"> </div>
          </div>
        </form>
      </div>
    </div> -->
	<!-- <div id="header"><center>Form Login Administrator</center></div>
		<form name="form1" method="post" action="cek_login.php">
			<div align="center">
				<table border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td width="30" align="center">Username</td>
				<td width="154" valign="middle"> : <input name="id_user" type="text" id="id_user"></td>
				</tr>
				<tr>
					<td align="center">Password</td>
					<td> : <input name="password" type="password" id="password"></td>
					</tr>
					<tr>
				<td align="center" colspan="3"><input type="submit" name="submit" value="Login"></td>
			</tr>
			</table>
			</div>
			
		</form> -->
