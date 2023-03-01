<html>
<head>
<style>
  .error {
    color: #FF0000;
  }
    
    body{
     background:url(photo-1565730878954-7e199b20a9ce.jpeg); 
     font-weight:bold;  
     font-family:courier 1em  sans-serif;
     background-repeat:repeat;
     margin-right: 40px;
    background-size: cover;
    background-position:center;
    position: relative;
    
     
    }
    form {
        width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-position: 0cqmax;
        background-color:lightgreen;   
      }
      input {
        font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-style:normal;
        font-size:14px;
        border-radius:20px;
        background-color:white; 

      }
      input[type="checkbox"],input[type="radio"]{
        height:16px;
        weight:16px;
      }
      input[type="submit"]{
        background-color:black;
        background-color: black;
        color: white;
        padding: 10px 20px;
        border-radius:5px;
        cursor:pointer;
      }
      input[type="reset"]{
        background-color:black;
        background-color: black;
        color: white;
        padding: 10px 20px;
        border-radius:5px;
        cursor:pointer;
      }
    h2 {
      justify-content:center;
      border-color: azure; 
      font-weight:bolder; 
      font-size:14px;
      font-family:courier 1em  sans-serif;
     

    }
  
      
 
</style>
 
</head>
<body style=text-align:center>  

<?php
// define variables and set to empty values //
$nameErr = $fathersnameErr = $mothersnameErr = $phonenumberErr = $emailErr = $genderErr = $addressErr = $bloodgroupErr = $departmentErr =$courseErr = $photoErr = $submitErr = $resetErr = "";
$name = $fathersname = $mothersname = $phonenumber = $email  = $gender = $address = $bloodgroup = $department = $course =  $photo = $submit = $reset = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
      }
    }
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fathersname"])) {
      $fathersnameErr = "fathersname is required";
    } else {
      $name = test_input($_POST["fathersname"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$fathersname)) {
        $fathersnameErr = "Only letters and white space allowed";
      }
    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["mothersname"])) {
      $mothersnameErr = "mothersname is required";
    } else {
      $name = test_input($_POST["mothersname"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$mothersname)) {
        $mothersnameErr = "Only letters and white space allowed";
      }
    }
  }

  if (empty($_POST["phonenumber"])) {
    $phonenumberErr = "phonenumber is required";
  } else {
  
    $phonenumber = test_input($_POST["phonenumber"]);
    // check if phone number is well-formed
    
    if (!preg_match("/[0-9]{3}-[0-9]{3}-[0-9]{4}/",$phonenumber)) {
 
      $phonenumberErr = "Invalid phonenumber";
    

  }
  } 

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)) {
 
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["address"])) {
    $addressErr = "address is required";
  } else {
    $address = test_input($_POST["address"]);
  }




  if (empty($_POST["department"])) {
    $departmentErr = "department  is required";
  } else {
    $department = test_input($_POST["department"]);
  }

  if (empty($_POST["course"])) {
    $courseErr = "course is required";
  } else {
    $course = test_input($_POST["course"]);
  }


  if (empty($_POST["photo"])) {
    $photoErr = "photo is required";
  } else {
    $photo = test_input($_POST["photo"]);
  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>

<h2 style=background-color:white; >REGISTERATION FORM </h2>
<p><span class="error"></span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<table> 
<tr>
<td>  Name:</td> <td> <input type="text" name="name">
<span class="error"> <?php echo $nameErr;?></span></td>
</tr>
<tr>
<td> Fathersname:</td> <td> <input type="text" name="fathersname">
<span class="error"> <?php echo $fathersnameErr;?></span></td>
</tr>
<tr>
<td>Mothersname:</td> <td> <input type="text" name="mothersname">
<span class="error"> <?php echo $mothersnameErr;?></span></td> 
</tr>
<tr>
<td>Ph.no:</td> <td> <input type="text" name="Ph.no">
<span class="error">* <?php echo $phonenumberErr;?></span></td>
</tr> 
<tr>
<td>E-mail:</td> <td> <input type="text" name="email">
 <span class="error">* <?php echo $emailErr;?></span></td>
 <tr>
<td>Gender:</td>
  <td> <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span></td>
</tr>
<tr>
<td>Address:</td> <td> <input type="textarea" name="address"></td> 
</tr> 
<tr>
<td><label>Select your blood group:</label></td>
<td> <select name="bloodgroup">
  
    <option  value="B+" >B+</option>
    <option value="A-" >A-</option>
    <option value="o+">O+</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <span class="error">* <?php echo $bloodgroupErr;?></span></td>

</select>
</tr>
<tr> 
<td>Department:</td>
 <td> <input type="radio" name="department" value="CSE">CSE
  <input type="radio" name="department" value="EEE">EEE
  <input type="radio" name="department" value="BBA">BBA
  <span class="error">* <?php echo $departmentErr;?></span></td>
</tr>
<tr>
<td>Course:</td>

   <td> <input type="checkbox" name="course" value="C">C
  <input type="checkbox" name="course " value="C++">C++
  <input type="checkbox" name="course " value="Java">Java
  <input type="checkbox" name="course " value="AI">AI
  <input type="checkbox" name="course " value="Machinelearning">Machinelearning
  <input type="checkbox" name="course " value="Robotics">Robotics
  <span class="error">* <?php echo $courseErr;?></span></td>
</tr>
<tr>
 <td> Photo:</td> <td> <input type="file" name="file">
<span class="error">* <?php echo $photoErr;?></span></td>
</tr>

<tr>
<td><input type="submit" name="submit" value="Submit"></td> 
<td><input type="reset" name="reset" value="reset"></td> 

</tr> 
</table>
</form>
<?php
echo "<h2 style=background-color:white;>Your Input:</h2>";
echo $name;
echo "<br>";
echo $mothersname;
echo "<br>";
echo $fathersname;
echo "<br>";
echo $phonenumber;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $address;
echo "<br>";
echo $bloodgroup;
echo "<br>";
echo $department;
echo "<br>";
echo $course;
echo "<br>";
echo $photo;
echo "<br>";

?>














