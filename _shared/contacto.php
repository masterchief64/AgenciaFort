<?php 
include ('http://localhost/AgenciaFort/_shared/head.php');
include ('http://localhost/AgenciaFort/_shared/menu.php');
 ?>
 <br>
<center>
<body style="background-color: ;">
<br><br>
<img src="http://localhost/AgenciaFort/_shared/img/logo.png" width="350" height="180" alt=""><br><br>
<div style="width: 500px;">
	<form class="form-horizontal" role="form">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <textarea rows="4" cols="40" class="form-control" id="pwd" placeholder="Enter password">Hola</textarea>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>
</div>
</center>