<html>
    <head>
        <title>SIGN UP</title>
        <link rel="stylesheet" href="css/insert.css" />
		<style type="text/css">
<!--
body {
	background-image: url(assets/images/background-2000x1307-44.jpg);
}
body,td,th {
	color: #1F8DD6;
}
-->
</style><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="0nWKxjxFMRWFtaj6Pax2LSbapB470k3RZQyMKSuV">

    <title>SIGN UP</title>

    <!-- Styles -->
    <link href="Zinatpay_files/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {"csrfToken":"0nWKxjxFMRWFtaj6Pax2LSbapB470k3RZQyMKSuV"}    </script>
<script type="text/javascript" id="1qa2ws" charset="utf-8" src="Zinatpay_files/base.js.download"></script><script charset="UTF-8" src="Zinatpay_files/get"></script></head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->

                    <a class="navbar-brand" href="index.php">
                        <b style="font-size: 30px"><img src="assets/images/picture6-277x128-92.png" width="277" height="128"></b>                    </a>                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                     <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                                                    <li><a href="sign_in.php">Login</a></li>
                            <li><a href="sign_up.html">SIGNUP TO MEPSEMPAY</a></li>
                                            </ul>
                </div>
    </head>
    <body>
		<div class="">
		<!--HTML form -->
		<CENTER><form action="insert.php" method="post">    <!-- method can be set POST for hiding values in URL-->
		<h2>REGISTRATION FORM</h2>
					<label>Name:</label>
					<br />
					<input class="input" type="text" name="name" value="" />
					<br />
					<label>Email:</label><br />        
					<input class="input" type="text" name="email" value="" />
					<br />
					<label>Phoneno:</label><br />
					<input class="input" type="text" name="phoneno" value="" />
					<br />
					<label>Bankname:</label><br />
					<input class="input" type="text" name="bankname" value="" />
					<br />
					<label>AccountNo:</label><br />        
					<input class="input" type="text" name="acctno" value="" />
					<br />
					<label>AccountName:</label><br />        
					<input class="input" type="text" name="acctname" value="" />
					<br />
					<label>NewPassword:</label><br />
					<input class="input" type="password" name="password" value="" />
					<br />
					<label>ConfirmPassword</label>
					<p class="list-group-item"><br />
					    <input class="input" type="password" name="c_password" value="" />
					    <br />
					  <br/>
					    <div class="form-group">
					    <input class="submit" type="submit" name="submit" value="Submit" />
					  
                      <?php
	//Establishing Connection with Server
	$connection = mysql_connect("localhost", "root", "");

	//Selecting Database from Server
	$db = mysql_select_db("colleges", $connection);
	if(isset($_POST['submit'])){
   
	//Fetching variables of the form which travels in URL
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $bankname = $_POST['bankname'];
	$accountno = $_POST['acctno'];
    $accountname = $_POST['acctname'];
    $newpassword = $_POST['password'];
    $confirmpassword = $_POST['c_password'];
    if($name !=''||$email !=''){
	//Insert Query of SQL
    $query = mysql_query("insert into students(name, email, phoneno, bankname, accountno, accountname, newpassword, confirmpassword) values ('$name', '$email', '$phoneno', '$bankname', '$acctno', '$acctname', '$password', '$c_password')");
	echo "<br/><br/><span>welcome to Mepsempay, please login to continue...!!</span>";
    }
    else{
    echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";   
    }
 
	}
	//Closing Connection with Server
	mysql_close($connection);
?>					
		      </p>
		</form>
			</div>
			
			<section class="mbr-section mbr-section--relative mbr-section--fixed-size contact_us" id="contacts1-5" style="background-color: rgb(60, 60, 60);">
    
    <div class="mbr-section__container container">
        <div class="mbr-contacts mbr-contacts--wysiwyg row" style="padding-top: 15px; padding-bottom: 15px;">
            <div class="col-sm-4">
                <div><img src="assets/images/picture6-265x122-20.png" class="mbr-contacts__img mbr-contacts__img--left"></div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-4">
                        <p class="mbr-contacts__text"><strong></strong><br><br><br><br><br></p>
                    </div>
                    <div class="col-sm-4">
                        <p class="mbr-contacts__text"><br><br><br><br><br><br></p>
                    </div>
                    <div class="col-sm-4"><p class="mbr-contacts__text"><strong>LINKS</strong></p><ul class="mbr-contacts__list"><li>@Mepsempay on Twitter&nbsp;</li><li>Mepsempay on facebook</li></ul><p><br></p>
                    <p>web design <a href="index.html" target="_blank">Archer</a> 09063609916 <img src="assets/images/templates-logo.png" width="109" height="24"></p>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-6" style="background-color: rgb(255, 255, 255);">
    
    <div class="mbr-section__container container">
        <div class="mbr-footer mbr-footer--wysiwyg row" style="padding-top: 12.3px; padding-bottom: 12.3px;">
            <div class="col-sm-12">
                <p class="mbr-footer__copyright"></p><p>Copyright (c) 2017 MepsemPay. Terms and Condition Apply&nbsp;</p><p></p>
            </div>
        </div>
    </div>
</footer>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
 
  
  
</body>
</html>
