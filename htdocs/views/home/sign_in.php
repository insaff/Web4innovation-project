<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>CSS3 Animation Cloud and login form</title>
    
    
    
    
        <link rel="stylesheet" href="resources/css/style1.css">

    
    
    
  </head>

  <body>

    <div id="clouds">
	<div class="cloud x1"></div>
	<!-- Time for multiple clouds to dance around -->
	<div class="cloud x2"></div>
	<div class="cloud x3"></div>
	<div class="cloud x4"></div>
	<div class="cloud x5"></div>
</div>

 <div class="container">


      <div id="login">

        <form method="post">

          <fieldset class="clearfix">

            <p><span class="fontawesome-user"></span><input type="text" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="password"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" value="Sign In"></p>

          </fieldset>

        </form>

        <p>Not a member? <a href="#" class="blue">Sign up now</a><span class="fontawesome-arrow-right"></span></p>

      </div> <!-- end login -->

    </div>
   
    

    
    
    
  </body>
</html>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>CSS3 Animation Cloud and login form</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <div id="clouds">
  <div class="cloud x1"></div>
  <!-- Time for multiple clouds to dance around -->
  <div class="cloud x2"></div>
  <div class="cloud x3"></div>
  <div class="cloud x4"></div>
  <div class="cloud x5"></div>
</div>

 <div class="container">


      <div id="login">

        <form method="post">

          <fieldset class="clearfix">

            <p><span class="fontawesome-user"></span><input type="text" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="password"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" value="Sign In"></p>

          </fieldset>

        </form>

        <p>Not a member? <a href="#" class="blue">Sign up now</a><span class="fontawesome-arrow-right"></span></p>

      </div> <!-- end login -->

    </div>
    
    
    
    
    
    
  </body>
</html>
