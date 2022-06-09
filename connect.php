
<!DOCTYPE html>
<html>
<head>
	<title>php design</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic' rel='stylesheet' type='text/css'> 
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/contactphpalertjavascript.js"></script>
</head>
<style>
	@import url('https://fonts.googleapis.com/css?family=Roboto:700&display=swap');
*{
	padding:0;
	margin:0;	
}

.logo{
	text-align: center;
	background-color: #062f3c;
	padding:1em 0px;
	border-top:5px solid #ee6123;
}
.banner-text img{
	background-size:cover;
	height:700px;
	width: 100%;
}
.menu ul li {
	list-style:none;
	display:inline-block;
	line-height:40px;
	padding-right: 5px;
	margin-left: 110px;
}
.menu a{
	text-decoration: none;
	font-family: 'Roboto',sans-serif;
	color: white;
}
.menu{
	background-color: #ee6123;
	letter-spacing: 3px;
}

.menu li a:hover,.menu li a.active{
	color:#062f3c;
}
.design button{
  background: #5f55af;
  border: 0;
  border-radius: 5px;
  padding: 10px 30px 10px 20px;
  text-transform: uppercase;
  font-weight: bold;
  font-size: 16px;
  position: absolute;
  top: 75%;
  margin-left: 25%;
  font-size: 30px;
}
.design button:hover{
	animation:  2s ease 1;
	color: coral;
	transform: scale(1.1);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}
.design a{
	color: white;
	text-decoration: none;
}
.design a:hover{
	color: coral;
}

.design p{
	font-size:40px;
	font-weight:700;
	top:35%;
	position: absolute;
	letter-spacing: 4px;
	user-select:none;
	margin-left: 20px;
	color: yellow;
	margin-left: 30%;
}
.design h1{
	font-size:50px;
	font-weight:700;
	top:45%;
	position: absolute;
	letter-spacing: 4px;
	user-select:none;
	margin-left: 20px;
	color: white;
	margin-left: 30%;
}


.dropbtn a.active{
    color:#062f3c;
}
.dropbtn2 a.active{
    color:#062f3c;
}
/*Start first dropdown toggle*/

 .dropdown{
    list-style:none;
    display:inline-block;
    line-height:40px;
    padding-right: 5px;
    margin-left: 150px;
    position: relative;
    background-position: center;
}

.dropdown-content{
    display: none;
    position: absolute;
    z-index: 1;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    left: 0px;
    color: #ee6123;
    width: 100px;
    top: 34.50px;
}
.dropbtn:hover{
	color: #062f3c;
}
.dropdown-content a{
    float: none;
    display: block;
    color: white;
    text-align: left;
    font-family: 'Roboto',sans-serif;
}
.dropdown-content a:hover{
    color: black;
    transition: all 0.2s ease-in-out;
    box-shadow: 0px 6px 0px #d35400;
}

.dropdown:hover .dropdown-content {
  display: block;
  color: coral;
  background-color: #ee6123;
}
/*End First dropdown toggle*/

/* Start 2nd dropdown toggle*/
   .dropdown2{
    list-style:none;
    display:inline-block;
    line-height:40px;
    padding-right: 5px;
    margin-left: 150px;
    position: relative;
    background-position: center;
}

.dropdown-content2{
    display: none;
    position: absolute;
    z-index: 1;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    left: 0px;
    color: #ee6123;
    width: 150px;
    top: 34.50px;
}
.dropbtn2:hover{
	color: #062f3c;
}
.dropdown-content2 a{
    float: none;
    display: block;
    color: white;
    text-align: left;
    font-family: 'Roboto',sans-serif;
}
.dropdown-content2 a:hover{
    color: black;
    transition: all 0.2s ease-in-out;
    box-shadow: 0px 6px 0px #d35400;
}

.dropdown2:hover .dropdown-content2 {
  display: block;
  color: coral;
  background-color: #ee6123;
}

/* End 2nd dropdown toggle*/

</style>
<body>



	<script>
		var r = confirm("confirm?");
if (r == true) {
      swal("Successfully Sent!", "success");

} else {
    x = swal("Oops!", "Request cancled");
}
	</script>

<iframe src="sound/sound12.mp3" allow="autoplay" style="display:none" id="iframeAudio">
</iframe> 


	<!---//start menu bar----->
	<div class="container">
		 <div class="logo">
		      <a href="index.html"><img src="images/logo.png" alt=""></a><br>	   
	     </div>

	     <div class="menu">
					<ul>
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li>                          <a href="about.html">About</a></li>
						<div class="dropdown">
                            <a class="dropbtn" href="Gallery1.html">Gallery<i class="fa fa-caret-down"></i></a>
                                <div class="dropdown-content">
                                    <a href="gallery11.html">Gallery1</a>
                                    <a href="gallery22.html">Gallery2</a>
                                    <a href="gallery33.html">Gallery3</a>   
                                </div>
                       </div>
						<div class="dropdown2">
                            <a class="dropbtn2" href="blog1.html">Blogs<i class="fa fa-caret-down"></i></a>
                                <div class="dropdown-content2">
                                    <a href="blog11.html">Events 2020</a>
                                    <a href="blog22.html">Events 2019</a>
                                    <a href="blog33.html">Events 2018</a>   
                                </div>
                       </div>
						<li><i class="fa fa-phone"></i><a class="active" href="contact.html">Contact</a></li>
            <li><i class="fa fa-user-plus"></i><a href="admission.html">Admission</a></li>
					</ul>
	     </div>

    </div>


    <div class="banner-text">
    	<img src="images/img2121.jpg">
<!---//end menu bar----->
         <div class="design">
         	<P>Thanks for Your Response...</P>
         	<h1>YOU'RE ALMOST THERE</h1>
    	<button><a href="contact.html">Click Here to join back to website</a></button>
    	
    </div>
</body>
</html>
<?php
$firstname =filter_input(INPUT_POST, 'firstname');
$lastname =filter_input(INPUT_POST, 'lastname');
$email =filter_input(INPUT_POST, 'email');
$message =filter_input(INPUT_POST, 'message');
if (!empty($email)) {
	$host = "localhost";
	$dbusername ="root";
	$dbpassword ="";
	$dbname ="test2";

	//create connection
	$conn =new mysqli($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
	die('Connect Error ('. mysqli_connect_error().')'. mysqli_connect_error());
}
else{
	$sql = "INSERT INTO registration(firstname, lastname, email, message) values ('$firstname', '$lastname', '$email', '$message')";
	if ($conn->query($sql)){
		echo "New record is inserted successfully";
	}
	else{
		echo "Error". $sql ."<br>". $conn->error;
	}
	$conn->close();
}
}
else{
	echo "Email is Required";
	die();
}
?>