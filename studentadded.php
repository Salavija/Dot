<html>
<head>
<title>Nauja registracija</title>
</head>
<body>
<?php

if(isset($_POST['submit'])){
    
    $data_missing = array();
    
    if(empty($_POST['first_name'])){

        // Adds name to array
        $data_missing[] = 'First Name';

    } else {

        // Trim white space from the name and store the name
        $f_name = trim($_POST['first_name']);

    }

    if(empty($_POST['last_name'])){

        // Adds name to array
        $data_missing[] = 'Last Name';

    } else{

        // Trim white space from the name and store the name
        $l_name = trim($_POST['last_name']);

    }

    if(empty($_POST['email'])){

        // Adds name to array
        $data_missing[] = 'Email';

    } else {

        // Trim white space from the name and store the name
        $email = trim($_POST['email']);

    }


    if(empty($_POST['phone'])){

        // Adds name to array
        $data_missing[] = 'Phone Number';

    } else {

        // Trim white space from the name and store the name
        $phone = trim($_POST['phone']);

    }

    if(empty($_POST['birth_date'])){

        // Adds name to array
        $data_missing[] = 'Birth Date';

    } else {

        // Trim white space from the name and store the name
        $b_date = trim($_POST['birth_date']);

    }

    if(empty($_POST['sex'])){

        // Adds name to array
        $data_missing[] = 'Sex';

    } else {

        // Trim white space from the name and store the name
        $sex = trim($_POST['sex']);

    }

    if(empty($_POST['life'])){

        // Adds name to array
        $data_missing[] = 'Life';

    } else {

        // Trim white space from the name and store the name
        $lunch = trim($_POST['life']);

    }
    
    if(empty($data_missing)){
        
        require_once('../mysqli_connect.php');
        
        $query = "INSERT INTO students (first_name, last_name, email,
         phone, birth_date, sex, date_entered,
        lunch_cost, student_id) VALUES (?, ?, ?,
        ?, ?, ?, ?, ?, ?, ?, NOW(), ?, NULL)";
        
        $stmt = mysqli_prepare($dbc, $query);
        
        i Integers
        d Doubles
        b Blobs
        s Everything Else
        
        mysqli_stmt_bind_param($stmt, "ssssssisssd", $f_name,
                               $l_name, $email,
                                $phone, $b_date,
                               $sex, $life);
        
        mysqli_stmt_execute($stmt);
        
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        
        if($affected_rows == 1){
            
            echo 'Student Entered';
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        } else {
            
            echo 'Error Occurred<br />';
            echo mysqli_error();
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        }
        
    } else {
        
        echo 'You need to enter the following data<br />';
        
        foreach($data_missing as $missing){
            
            echo "$missing<br />";
            
        }
        
    }
    
}

?>

<div class="container">

<form action="http://localhost//DOT/Database/studentadded.php" method="post">

<div class="container-fluid">
  <div class="row"> 
    <div class="col-md-6">
                <div class="col-sm-8">
          <p>First Name:
            <textarea class="form-control" name="first_name" size="30" rows="1" value=""></textarea>
           </p>
        </div>
                <div class="col-sm-8">
          <p>Last name:
            <textarea class="form-control" name="last_name" size="30" rows="1" value=""></textarea>
           </p>
        </div>
                <div class="col-sm-8">
          <p>Email:
            <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
           </p>
        </div>
                <div class="col-sm-8">
          <p>Phone Number:
            <textarea class="form-control" name="phone"  size="30" rows="1" value=""></textarea>
           </p>
        </div>
                <div class="col-sm-8">
          <p>Birth Date (YYYY-MM-DD):
            <textarea class="form-control" name="birth_date"  size="30" rows="1" value=""></textarea>
           </p>
        </div>
        <p>Sex:
                <div class="col-sm-8">
                <label class name="sex"="radio-inline">
                  <input type="radio" name="sex" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Female
                </label>
                <label class="radio-inline">
                  <input type="radio" name="sex" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Male
                </label>
                </label>
                 </div>
          </p>
        <div class="col-sm-8">
          <p>What do you want to change in your life:
            <textarea class="form-control" name="life" size="30" rows="2" value=""></textarea>
           </p>
        </div>
    </div>
  </div>
</div>
    
</form>
</body>
</html>