<?php

/* 
 *  Mail : subinpvasu@gmail.com
 *  Skype : subinpvasu 
 *  Author : SUBIN P VASU, Freelance Google AdWords API Developer - PHP
 *  Created On : 29 Nov, 2018 
 */
require_once './Advertising.php';
use adwords\Advertising;
if(isset($_POST['download']))
{
    $start = $_POST['email'];
    $end = $_POST['pwd'];
    $data = new Advertising();
    $data->AdowrdsReportDownload($data->createSession(Credentials::$MASTER_ID),$start,$end);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Report Download</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Download Report</h2>
  <form action="" method="post">
    <div class="form-group">
      <label for="email">Start Date:</label>
      <input type="date" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">End Date:</label>
      <input type="date" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    
      <input type="submit" class="btn btn-default" name="download" value="Download"/>
  </form>
</div>

</body>
</html>