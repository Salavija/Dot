<!DOCTYPE html>
<html>
<head>
	<title>The DOT</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="app2.css">
</head>
<body>

 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href=index.php>The DOT</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
       <ul class="nav navbar-nav navbar-right">
        <li><a href="Anketa.php">Order<i class="fa fa-user-plus"></i></a></li>
      </ul>
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  </div>
 </nav>

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
<br>


<p>
<input type="submit" name="submit" value="Send" />
</form>
</p>
</div>
<br>
  
<div class="container" container=fixed-bottom>

</br>

</div>
<?php include 'footeris.php';?>

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>