<?php  
 $message = '';  
 $error = '';  
 $nameErr = $emailErr = $dobErr = $genderErr = $unameErr = $passErr = $cpassErr = "";
 $name = $email = $uname = $dob = $gender = $password = $cpassword = "";
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter an e-mail</label>";  
      }  
      else if(empty($_POST["uname"]))  
      {  
           $error = "<label class='text-danger'>Enter a username</label>";  
      }  
      else if(empty($_POST["cpassword"]))  
      {  
           $error = "<label class='text-danger'>Enter a password</label>";  
      }
      else if(empty($_POST["cpassword"]))  
      {  
           $error = "<label class='text-danger'>Confirm password field cannot be empty</label>";  
      } 
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Gender cannot be empty</label>";  
      }   
     else  
     {

     if(isset($_POST['cpassword'])&&isset($_POST['cpassword'])) // checking if password is set or not
     {
        $password = $_POST['cpassword'];
        $cpassword = $_POST['cpassword'];
        if($password == $cpassword) //checking if passwords match or not
        {
          if(file_exists('data.json'))  
          {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'e-mail'          =>     $_POST["email"],  
                     'username'     =>     $_POST["uname"],  
                     'gender'     =>     $_POST["gender"],  
                     'dob'     =>     $_POST["dob"]  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
        }
        else
        {
          $error = "<label class='text-danger'>Passwords did not match</label>";
        }
    }
            
          
     }  
 }  
 ?>  
<!DOCTYPE html>
 <html>
 <head>
 <style>
error {color: #FF0000;}
body{
        background-color:lavender;
      }
</style>
 </head>
 <body>
  <form method="post">
    <fieldset style="width: 450px;">
      <legend><b>REGISTRATION</b></legend>
      <label>Name: </label>
      <input type="text" name="name">
      <span class="error"><?php echo $nameErr;?></span><hr>
      <label>Email: </label>
      <input type="text" name="email">
      <span class="error"><?php echo $emailErr;?></span><hr>
      <label>User Name: </label>
      <input type="text" name="uname">
      <span class="error"><?php echo $unameErr;?></span><hr>
      <label>Password: </label>
      <input type="password" name="password">
      <span class="error"><?php echo $passErr;?></span><hr>
      <label>Confirm Password: </label>
      <input type="password" name="cpassword">
      <span class="error"><?php echo $cpassErr;?></span><hr>
      <fieldset>
        <legend>Gender</legend>
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="Other">Other  
        <span class="error"><?php echo $genderErr;?></span>
      </fieldset><hr>
      <fieldset>
        <legend>Date of Birth</legend>
        <input type='date' id='dob'name='dob' min="1953-01-01" max="1999-12-31" value="<?php echo $dob;?>">
        <span class="error"><?php echo $dobErr;?></span>
          <br><br>
        <span class="error"><?php echo $dobErr;?></span>
      </fieldset><hr><br><br>
      <input type="submit" name="submit" value="Submit">
      <input type="reset" name="reset" value="Reset">
    </fieldset><br><br>
    <?php   
      if(isset($error))  
        {  
          echo $error;  
        }  
    ?> 
    <?php   
      if(isset($message))  
        {  
          echo $message;  
        }  
    ?> 
  </form>
 
 </body>
 </html>