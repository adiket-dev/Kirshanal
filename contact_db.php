<head>
  <style type="text/css">
    span.thanksyou {
    font-size: 36px;
    font-family: cursive;
    font-style: normal;
    text-align: center;
    background: #541f5c;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}
  </style>
</head>
<body>
<?php 
  //creating connection to database
$con=mysqli_connect("localhost","root","","krishanal") or die(mysqli_error());

  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
$Name = $con->real_escape_string($_POST['name']);
$Phone = $con->real_escape_string($_POST['email']);
$Email = $con->real_escape_string($_POST['phone']);
$Message = $con->real_escape_string($_POST['meassage']);

  //query to insert the variable data into the database
$sql="INSERT INTO contact_info (name, phone, email, message) VALUES ('".$Name."','".$Phone."', '".$Email."', '".$Message."')";

  //Execute the query and returning a message
if(!$result = $con->query($sql)){
die('Error occured [' . $con->error . ']');
echo "Sorry! Please try again!";
}
else
  echo '<span class="dot1"></span>';
   echo "<span class='thanksyou'>Thank you! We will get in touch with you soon</span>";
}

?>
</body>