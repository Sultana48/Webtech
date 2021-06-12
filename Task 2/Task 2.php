<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
body{
        background-color:lavender;
      }
</style>
</head>
<body>

<?php

$nameErr = $emailErr = $genderErr  = $degreeErr = $bgErr = $dateErr = "";
$name = $email = $gender = $comment = $degree = $bg = $day = $month = $year = $checkedDegrees = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      $name = "";
    }
    if(str_word_count($name)<2){
      $nameErr = "Name should contain at least two word";
      $name = "";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $email = "";
    }
  }

  if (empty($_POST["day"]) || empty($_POST["month"]) || empty($_POST["year"])) {
    $dateErr = "Please provide date";
  } else {
    $day = test_input($_POST["day"]);
    $month = test_input($_POST["month"]);
    $year = test_input($_POST["year"]);
    if(!($day >= 1 && $day <= 31)){
      $dateErr = "Day should be valid dd: 1-32"; 
      $day = "";   
    }
    if(!($month >= 1 && $month <= 12)){
      $dateErr = "Month should be valid mm: 1-12"; 
      $month = "";   
    }
    if(!($year >= 1990 && $year <= 2005)){
      $dateErr = "Year should be valid yyyy: 1980-1999"; 
      $year = "";   
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  
  if(empty($_POST['degree']))
  {
   $degreeErr = "Check two or more degrees";
  } else {
    $values = $_POST['degree'];
    $checkedDegrees = count($values);
    if ($checkedDegrees == 1){
    $degreeErr = "Atleast two degree must be checked";
    } else {

    $degree = $values;
    }

  }
 
  if(empty($_POST["bg"])){
    $bgErr = "Select your blood group";
  } else {
    $bg = test_input($_POST["bg"]);
  }
}
  

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<h2>PHP Form Validation Example</h2>

<p>&nbsp;&nbsp;1.Design the following HTML form and perform the following validations</p>

<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

 <fieldset style="width: 250px;">
  <legend><b>NAME</b></legend>
  <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <hr><br><br>
 </fieldset>

<p>&nbsp;&nbsp;2.Design the following HTML form and perform the following validations</p><br>

 <fieldset style="width: 250px;">
  <legend><b>EMAIL</b></legend>
  <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <hr><br><br>
 </fieldset>

<p>&nbsp;&nbsp;3.Design the following HTML form and perform the following validations</p><br>

 <fieldset style="width: 250px;">
  <legend><b>DATE OF BIRTH</b></legend>
  dd &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;yyyy <br>
  <input type="number" name="day" value="<?php echo $day;?>" style=width:40px;> /
  <input type="number" name="month" value="<?php echo $month;?>" style=width:40px;>/
  <input type="number" name="year" value="<?php echo $year ;?>" style=width:80px;>
  <span class="error"><?php echo $dateErr;?></span>
  <hr><br><br>
 </fieldset>

<p>&nbsp;&nbsp;4.Design the following HTML form and perform the following validations</p><br>

 <fieldset style="width: 250px;">
  <legend><b>GENDER</b></legend>

  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <hr><br><br>
 </fieldset>

<p>&nbsp;&nbsp;5.Design the following HTML form and perform the following validations</p><br>

 <fieldset style="width: 250px;">
  <legend><b>DEGREE</b></legend>

  <input type="checkbox" name="degree[]" value="ssc" id ="degree"/>SSC <?php if (isset($degree) && $degree=="ssc ") echo "checked";?> 
    <input type="checkbox" name="degree[]" value="hsc" />HSC <?php if (isset($degree) && $degree=="hsc") echo "checked";?> 
    <input type="checkbox" name="degree[]" value="bsc" />BSc<?php if (isset($degree) && $degree=="bsc") echo "checked";?> 
    <input type="checkbox" name="degree[]" value="msc" />MSc<?php if (isset($degree) && $degree=="msc") echo "checked";?> 
    <span class="error">* <?php echo $degreeErr;?></span>
  <hr><br><br>
 </fieldset>

<p>&nbsp;&nbsp;6.Design the following HTML form and perform the following validations</p><br>

 <fieldset style="width: 250px;">
  <legend><b>BLOOD GROUP</b></legend>
  <select name="bg" id="bg" value="<?php echo $bg;?>">
    <option value="">Select</option>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
  </select><br>
  <span class="error"> <?php echo $bgErr;?></span><hr>
  <hr><br>
 <div style= "text-align:center;">
  <input type="submit" name="submit" value="Submit">
 </fieldset>

<?php
echo "<h2>Your Input:</h2>";

echo "Name is: ".$name;
echo "<br>";
echo "Email is: ".$email;
echo "<br>";
echo "Date Of Birth: ".$day."/".$month."/".$year;
echo "<br>";
echo "Gender is: ".$gender;
echo "<br>";
echo "Blood group: ".$bg;
echo "<br>";
echo "Degrees are: ";
if ($checkedDegrees >1){
  foreach ($degree as $key => $value) {
  echo $value."  ";}
  }
?>

</body>
</html>