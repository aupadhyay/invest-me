<?php
  session_start();
  require("php/header.php");

?>
<html>
    <link rel="stylesheet" type="text/css" href="css/style.css">
		<div class="container">
			<div class="jumbotron">
				<h1>E-VEST</h1>
              <p><?php echo $_SESSION['first_name'];?></p>
			</div>
		</div>
      
      <div class="container">
        <div class="ack2"></div>
        <div class="row">
          <div class="col-sm-6">
            <h1>Investors</h1>
            <p>Come look at cool products and invest in them! Help businesses grow with your business expertise!</p>
            <img src="img/money.png" alt="Money" width="100" height="100">
          </div>
          
          <div class="col-sm-6">
            <h1>Entrepreneurs</h1>
            <p></p>
          </div>
        </div>
        <div class="col-sm-12" style="padding-left:0px;">
            


          </div>
      </div>

</html> 
