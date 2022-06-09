<!DOCTYPE html>
<html>
<head>
	<title>Club Soccer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic' rel='stylesheet' type='text/css'> 
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<style>
	@import url('https://fonts.googleapis.com/css?family=Roboto:700&display=swap');
*{
	padding:0;
	margin:0;	
}
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: coral; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: coral; 
}
.logo{
	text-align: center;
	background-color: #062f3c;
	padding:1em 0px;
	border-top:5px solid #ee6123;
}
.menu ul li {
	list-style:none;
	display:inline-block;
	line-height:40px;
	padding-right: 5px;
	margin-left: 105px;
}
.menu a{
	text-decoration: none;
	font-family: 'Roboto',sans-serif;
	color: white;
}
.menu{
	background-color: #ee6123;
	letter-spacing: 3px;
        padding-left: 40px;
}

.menu li a:hover,.menu li a.active{
	color:#062f3c;
}
.dropbtn a.active{
    color:#062f3c;
}

/*Start first dropdown toggle*/

 .dropdown{
    list-style:none;
    display:inline-block;
    line-height:40px;
    padding-right: 5px;
    margin-left: 105px;
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
.dropbtn a:hover{
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
    color: #062f3c;
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
    margin-left: 105px;
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
.dropbtn2 a:hover{
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
    color: #062f3c;
    transition: all 0.2s ease-in-out;
    box-shadow: 0px 6px 0px #d35400;
}

.dropdown2:hover .dropdown-content2 {
  display: block;
  color: coral;
  background-color: #ee6123;
}
.admission a{
	text-decoration: none;
	color: blue;	
}
.admission a:hover{
	transform: scale(1.1);
	color: red;
}
.mainimg img{
   background-size:cover;
  height:700px;
  width: 100%;
}
.designtext button{
  background: #5f55af;
  border: 0;
  border-radius: 5px;
  padding: 10px 30px 10px 20px;
  text-transform: uppercase;
  font-weight: bold;
  font-size: 16px;
  position: absolute;
  top: 85%;
  margin-left: 27%;
  font-size: 30px;
}
.designtext button:hover{
  animation:  2s ease 1;
  color: coral;
  transform: scale(1.1);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}
.designtext a{
  color: white;
  text-decoration: none;
}
.designtext a:hover{
  color: coral;
}

.designtext img{
  font-size:40px;
  font-weight:700;
  top:75%;
  position: absolute;
  letter-spacing: 4px;
  user-select:none;
  margin-left: 20px;
  color: yellow;
  margin-left: 27%;
}


</style>
<body>
    <script>
		
    var t = alert("Are you sure you want to submit!")
    var r = confirm("confirm");
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
                            <div class="dropbtn">
                                  <a href="gallery1.html">Gallery<i class="fa fa-caret-down"></i></a></div>
                                <div class="dropdown-content">
                                    <a  href="gallery11.html">Gallery1</a>
                                    <a  href="gallery22.html">Gallery2</a>
                                    <a  href="gallery33.html">Gallery3</a>   
                                </div>
                       </div>

                        <div class="dropdown2">
                            <div class="dropbtn2">
                            <a href="blog1.html">Blogs<i class="fa fa-caret-down"></i></a></div>
                                <div class="dropdown-content2">
                                    <a  href="blog11.html">Events 2020</a>
                                    <a  href="blog22.html">Events 2019</a>
                                    <a  href="blog33.html">Events 2018</a>   
                                </div>
                       </div>
						<li><i class="fa fa-phone"></i><a href="contact.html">Contact</a></li>
            <li><i class="fa fa-user-plus"></i><a class="active" href="admission.html">Admission</a></li>
					</ul>
	     </div>
    </div>
<!---//end menu bar----->
     <div class="mainimg">
     	   <img src="images/stadium11.jpg">
     </div>

     <div class="designtext">
          <img src="images/gif11.gif">
          
      <button><a href="admission.html">Click Here to go back to Admission</a></button>
      
    </div>
</body>
</html>

<?php
$firstname =filter_input(INPUT_POST, 'firstname');
$middlename =filter_input(INPUT_POST, 'middlename');
$lastname =filter_input(INPUT_POST, 'lastname');
$age =filter_input(INPUT_POST, 'age');
$gender =filter_input(INPUT_POST, 'gender');
$weight =filter_input(INPUT_POST, 'weight');
$height =filter_input(INPUT_POST, 'height');
$bloodgroup =filter_input(INPUT_POST, 'bloodgroup');
$birth =filter_input(INPUT_POST, 'birth');
$country =filter_input(INPUT_POST, 'country');
$address =filter_input(INPUT_POST, 'address');
$city =filter_input(INPUT_POST, 'city');
$zipcode =filter_input(INPUT_POST, 'zipcode');
$phnnumber =filter_input(INPUT_POST, 'phnnumber');
$email =filter_input(INPUT_POST, 'email');
$message =filter_input(INPUT_POST, 'message');
$signature =filter_input(INPUT_POST, 'signature');
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
	$sql = "INSERT INTO admissionform (firstname, middlename, lastname, age, gender, weight, height, bloodgroup, birth, country, address, city, zipcode, phnnumber, email, message, signature) values ('$firstname', '$middlename', '$lastname', '$age', '$gender', '$weight', '$height', '$bloodgroup', '$birth', '$country', '$address', '$city', '$zipcode', '$phnnumber', '$email', '$message', '$signature')";
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