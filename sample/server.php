<?php

session_start();

// initializing variables
$RegNo = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'sample');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $RegNo = mysqli_real_escape_string($db, $_POST['RegNo']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, @$_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, @$_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($RegNo)) { array_push($errors, "RegNo is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same RegNo and/or email
  $user_check_query = "SELECT * FROM users WHERE RegNo='$RegNo' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['RegNo'] === $RegNo) {
      array_push($errors, "RegNo already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO users (RegNo, email, password) 
          VALUES('$RegNo', '$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['RegNo'] = $RegNo;
    $_SESSION['success'] = "You are now logged in";
    header('location: advance.php');
  
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $RegNo = mysqli_real_escape_string($db, @$_POST['RegNo']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($RegNo)) {
    array_push($errors, "RegNo is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE RegNo='$RegNo' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['RegNo'] = $RegNo;
      $_SESSION['success'] = "You are now logged in";

      header('location: index.php');
    }else {
      array_push($errors, "Wrong RegNo/password combination");
    }
  }
}


// ENTERING DATA INTO DB
if (isset($_POST['advance'])) {
  // receive all input values from the form
  $FullName = mysqli_real_escape_string($db, $_POST['FullName']);
  $RegNo = mysqli_real_escape_string($db, $_POST['RegNo']);
  $IdNo = mysqli_real_escape_string($db, $_POST['IdNo']);
  $MobileNo = mysqli_real_escape_string($db, $_POST['MobileNo']);
  $HomeTown = mysqli_real_escape_string($db, $_POST['HomeTown']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $NextOfKin = mysqli_real_escape_string($db, $_POST['NextOfKin']);
  $PhoneNo = mysqli_real_escape_string($db, $_POST['PhoneNo']);
  $Programme = mysqli_real_escape_string($db, $_POST['Programme']);
  $School = mysqli_real_escape_string($db, $_POST['School']);
  $Department = mysqli_real_escape_string($db, $_POST['Department']);
  $Date = mysqli_real_escape_string($db, $_POST['Date']);
  $CurrentCourse = mysqli_real_escape_string($db, $_POST['CurrentCourse']);
  $StudyMode = mysqli_real_escape_string($db, $_POST['StudyMode']);
  $NewCourse = mysqli_real_escape_string($db, $_POST['NewCourse']);
  $StudyMode2 = mysqli_real_escape_string($db, $_POST['StudyMode2']);
  $CommenceDate = mysqli_real_escape_string($db, $_POST['CommenceDate']);
  


  if (count($errors) == 0) {
    $query = "INSERT INTO form (FullName, RegNo, IdNo, MobileNo, HomeTown, email, NextOfKin, PhoneNo, Programme, School, Department, Date, CurrentCourse, StudyMode, NewCourse, StudyMode2, CommenceDate) 
          VALUES('$FullName', '$RegNo', '$IdNo', '$MobileNo', '$HomeTown', '$email', '$NextOfKin', '$PhoneNo', '$Programme', '$School', '$Department', '$Date', '$CurrentCourse', '$StudyMode', '$NewCourse', '$StudyMode2', '$CommenceDate')";
        if (mysqli_query($db, $query))
        echo "Your Advancement Form Has Been Submitted Successfully";
  }
}

  if(isset($_POST['subscribe']))
  {
    $email = $_POST['email'];
    $approval = "Not Allowed";
    $sql = "INSERT INTO `newsletter`( `email`,`cdate`,`approval`) VALUES ('$email',now(),'$approval')" ;
    
    if(mysqli_query($db,$query))
    echo"OK";
    
  }

?>