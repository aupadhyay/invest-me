<html>
	<head>
		<title>E-VeST</title>
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>
	<body>
		<nav class="navbar navbar-default">
  			<div class="container">
    		<!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
      				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        			<span class="sr-only">Toggle navigation</span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
      				</button>
              
     			 	<a class="navbar-brand" href="index.php">
                    <img src="https://cloud.githubusercontent.com/assets/9246693/6094703/1aba957e-aeeb-11e4-8a95-683b7d2a84d7.png" style= "float:left; margin:-12px 15px 0px 15px"; height= "40" width="50" />
                </a>
                <a class="navbar-brand" href="index.php">E-VesT</a>
    			</div>

    			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      				<ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="how-it-works.php">How it Works</a></li>
        		  	   <li><a href="explore.php">Explore</a></li>
                    <?php if($_SESSION["loggedin"] != 1){ ?>
                      <li class="link-nav">
                        <a href="#login" data-toggle="modal"> Log In</a>
                      </li>
                  
                      <li class="link-nav">
                        <a href="#register" data-toggle="modal"> Register</a>
                      </li>
              
                    <?php }else{ ?>
                      <li class="dropdown link-nav">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_SESSION['first_name'];?> <span class="caret"></span></a>
                        <ul class="dropdown-menu link-nav" role="menu">
                            <li><a href="myaccount.php">My Account</a></li>
                            <li><a href="logout.php"> Log Out </a> </li>
                            <li><a href="#idea-register" data-toggle="modal">New Idea</a> </li>
                        </ul>
                    </li>
              
                    <?php } ?>                 
                 </ul>
      			</div>	

  			</div><!-- /.container-fluid -->
		</nav>
      

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
                  <div class="checkbox">
                      <input type="radio" name="type" value="inv" checked>Investor
                      <br>
                      <input type="radio" name="type" value="ent">Entrepreneur
                  </div>
                </div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" id = "submitRegister" name="submitRegister" class="btn btn-success">Register</button>
            </form>

            </div>
          </div>
        </div>
        </div>

      <div class="modal fade" id="idea-register" role = "dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="h1">New Idea</h4>
            </div>
          <div class="modal-body">
            <div id="ack"></div>
            <form action="new_idea.php" id = "myForm"method="POST">
                <div class="form-group">

                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title">

                    <label for="title">Description</label>
                    <input type="text"  class="form-control" id="desc" name="desc" placeholder="Description">

                    <label for="title">Video-URL</label>
                    <input type="text" class="form-control" id="video_url" name="video_url" placeholder="Video (Optional)">

                    <label for="title">Equity</label>
                    <input type="text" class="form-control" id="equity" name="equity" placeholder="Equity">

                    <label for="title">Keywords (seperated by commas)</label>
                    <input type="text" class="form-control" id="keywords" name="keywords" placeholder="Keywords">

                    <label for="title">Company</label>
                    <input type="text" class="form-control" id="company" name="company" placeholder="Company">

                    <label for="title">Founder</label>
                    <input type="text"  class="form-control"id="founder" name="founder" placeholder="Founder">

                    <label for="title">Website URL</label>
                    <input type="text" class="form-control" id="website" name="website" placeholder="Website URL">

                    <label for="title">Other</label>
                    <input type="text" class="form-control" id="other" name="other" placeholder="Other">
                



                </div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" id = "submit" name="submit" class="btn btn-success">Log In</button>
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