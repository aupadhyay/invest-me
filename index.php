<html>
	<head>
		<title>E-VeST</title>
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>
	<body>
		<nav class="navbar navbar-default">
  			<div class="container-fluid">
    		<!-- Brand and toggle get grouped for better mobile display -->
    			<div class="navbar-header">
      				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        			<span class="sr-only">Toggle navigation</span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
      				</button>
              
     			 	<a class="navbar-brand" href="#">
              <img src="https://cloud.githubusercontent.com/assets/9246693/6094703/1aba957e-aeeb-11e4-8a95-683b7d2a84d7.png" style= "float:left; margin:-12px 15px 0px 15px"; height= "40" width="50" />
            </a>
            <a class="navbar-brand" href="#">E-VesT</a>
    			</div>

    			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      				<ul class="nav navbar-nav navbar-right">
        		  	   <li><a href="#">Explore</a></li>
                    <li><a href="#login" data-toggle="modal">Log In</a></li>
                    <li><a href="#register" data-toggle="modal">Register</a></li>
                 </ul>
      			</div>	

  			</div><!-- /.container-fluid -->
		</nav>

		<div class="container">
			<div class="jumbotron">
        
				<h1>E-VEST</h1>
			</div>
		</div>



      <div class="modal fade" id="login" role = "dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="h1">Log In</h4>
            </div>
          <div class="modal-body">
            <div id="ack"></div>
            <form action="login.php" id = "myForm"method="POST">
              <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id = "email"name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id = "password"name="password" placeholder="Password">
                </div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" id = "submit" name="submit" class="btn btn-success">Log In</button>
            </form>

            </div>
          </div>
        </div>
        </div>



        <div class="modal fade" id="register" role = "dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="h1">Register</h4>
            </div>
          <div class="modal-body">
            <div id="ack2"></div>
            <form action="login.php" id = "registerForm"method="POST">
                <div class="form-group">
                  <label for="name">First Name</label>
                  <input type="text" class="form-control" id = "name"name="name" placeholder="First Name">
              
                  <label for="lname">Last Name</label>
                  <input type="text" class="form-control" id = "lname"name="lname" placeholder="Last Name">
                
              
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id = "email"name="email" placeholder="Enter email">
                
              
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id = "password"name="password" placeholder="Password">
                
                  <label for="location">Location</label>
                  <input type="text" class="form-control" id = "location"name="location" placeholder="Location">

                  <label for="phone">Phone Number</label>
                  <input type="text" class="form-control" id = "phone"name="phone" placeholder="Phone">

                  <label for="hours">Hours Available</label>
                  <input type="text" class="form-control" id = "hours"name="hours" placeholder="Hours">

                  <label for="type">Choose One: </label>
                  <input type="text" class="form-control" id = "type"name="type" placeholder="Type">
                </div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" id = "submitRegister" name="submitRegister" class="btn btn-success">Register</button>
            </form>

            </div>
          </div>
        </div>
        </div>
      <script type="text/javascript" src  = "js/jquery-1.11.0.min.js"></script>
      <script type="text/javascript" src  = "js/Login-AJAX.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>