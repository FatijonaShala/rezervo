<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$_SESSION["lloji"] = "";
$_SESSION["login"] = false;
$_SESSION["emri"] = "";
$errors = array(); 

// konektimi me databaz
$db = mysqli_connect('localhost', 'root', '', 'restoranti');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $emri = mysqli_real_escape_string($db, $_POST['emri']);
  $mbiemri = mysqli_real_escape_string($db, $_POST['mbiemri']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $lloji = mysqli_real_escape_string($db, $_POST['lloji']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($emri)) { array_push($errors, "emri is required"); }
  if (empty($mbiemri)) { array_push($errors, "mbiemri is required"); }
  if (empty($username)) { array_push($errors, "username is required"); }
  if (empty($password)) { array_push($errors, "password is required"); }
  if (empty($lloji)) { array_push($errors, "Type is required"); }



  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM shfrytezuesi WHERE username='$username' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO shfrytezuesi (emri, mbiemri, username, password, lloji) 
  			  VALUES('$emri', '$mbiemri','$username', '$password','$lloji')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
    $_SESSION['lloji'] = $lloji;
    $_SESSION['login'] = true;

    


  	        if($lloji == 'klient'){
           header('location: index.php');
        }
        else if($lloji == 'admin'){
           header('location: admin.php');
        }
        else if($lloji == 'admin_restorant'){
           header('location: admin_res.php');
        }
  }
}

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM shfrytezuesi WHERE username='$username' AND password='$password'";
    
  	$results = mysqli_query($db, $query);

      if (mysqli_num_rows($results) == 1) {
            while($row = mysqli_fetch_assoc($results)) {
           $emri = $row["emri"];
            $mbiemri = $row["mbiemri"];
            $lloji = $row["lloji"];
          $id_profi = $row["id"];

        }
        
 
        $_SESSION['emri'] = $username;
        $_SESSION['mbiemri'] = $mbiemri;
        $_SESSION['lloji'] = $lloji;
        $_SESSION['success'] = "Jeni kyqur ne sistem";
        $_SESSION['id_profi'] = $id_profi;

        if($lloji == 'klient'){
           header('location: index.php');
        }
        else if($lloji == 'admin'){
           header('location: admin.php');
        }
        else if($lloji == 'admin_restorant'){
           header('location: admin_res.php');
        }
       
      }
      else{
        array_push($errors,"Fjalekalimi ose email gabim");
      }
  }
}

?>