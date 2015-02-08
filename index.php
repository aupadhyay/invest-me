<?php
  session_start();
  require("php/header.php");

?>
<html>
  <script>
    window.fbAsyncInit = function() {
        FB.init({
          appId      : '828722570518250',
          xfbml      : true,
          version    : 'v2.1'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
  </script>


  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=828722570518250&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>



    <link rel="stylesheet" type="text/css" href="css/style.css">
		<div class="container">
			<div class="jumbotron">
				<h1 class="title">E-VEST</h1>
			</div>
		</div>
      
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="title2">Investors</h1>
            <p>Come look at cool products and invest in them! Help businesses grow with your business expertise!</p>
            <img src="img/money.png" alt="Money" width="100" height="100">
          </div>

          <div class="col-sm-6">
            <h1 class="title2">Entrepeneurs</h1>
            <p>Post your company's information and have the investors lined up behind your product! <br>
              Use their past experience and contacts to further expand your business.</p>
            <img src"img/light_bulb.png" alt="Idea" width"100" height"100">
          </div>
        </div>
        <div class="col-sm-12" style="text-align:center;">
            
          <div class="fb-like" data-href="https://www.facebook.com/pages/E-Vest/1585328398346199" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

        </div>
      
    
  </div>
</html> 
