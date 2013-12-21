<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />

	<title>Encryption - JOPHEST.US</title>
	<meta name="HandheldFriendly" content="true">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Import CSS -->
	<link rel="stylesheet" href="css/main.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/jquery.scrollto.min.js"></script>
	<script src="js/slabtext.min.js"></script>
	<script src="js/jquery.nav.js"></script>
	<script src="js/main.js"></script>
	
	<style>
	   .button {
	   background: #e66565;
	   -webkit-border-radius: 4px;
	   -moz-border-radius: 4px;
	   -o-border-radius: 4px;
	   border-radius: 4px;
	   display: inline-block;
	   padding: 9px 12px;
	   color: #fff!important;
	   text-shadow: 1px 1px rgb(202,71,71);
	   font-size: 0.786em;
	   font-weight: bold;
	   text-transform: uppercase;
	   margin-bottom: 10px;
	   line-height: 14px;
	   -webkit-transition: background-color .25s linear;
	   -moz-transition: background-color .25s linear;
	   -o-transition: background-color .25s linear;
	   -ms-transition: background-color .25s linear;
	   transition: background-color .25s linear;
   }
   
	   .button:hover {
		   background: #d85656;
		   color: #fff;
	   }
	</style>
</head>
<!-- To change color change the class "color-1" to "color-2, color-3 ... color-6" -->
<body class="home color-1">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42139940-1', 'jophest.us');
  ga('send', 'pageview');

</script>

	<!-- Big Full screen Banner -->
	<div class="hero bg-fixed bg-color" id="home">

		<div class="slogan">
		
		
			<div  class="vcenter container">


				<div class="row">


					<div class="span12">
					<br><br><br><br><br><br><br>
					<h1><i class="fa fa-lock"></i> Encryption</h1>
<?php 

$string1 = $_POST['msg'];

function convert($str,$ky=''){ 
if($ky=='')return $str; 
$ky=str_replace(chr(32),'',$ky); 
if(strlen($ky)<8)exit('key error'); 
$kl=strlen($ky)<32?strlen($ky):32; 
$k=array();for($i=0;$i<$kl;$i++){ 
$k[$i]=ord($ky{$i})&0x1F;} 
$j=0;for($i=0;$i<strlen($str);$i++){ 
$e=ord($str{$i}); 
$str{$i}=$e&0xE0?chr($e^$k[$j]):chr($e); 
$j++;$j=$j==$kl?0:$j;} 
return $str; 
} 
/////////////////////////////////// 

// Secret key to encrypt/decrypt with 
$key='tiggeristhebestcat'; // 8-32 characters without spaces 

// String to encrypt 


// EnCrypt string 
$string2=convert($string1,$key); 

// DeCrypt back 
$string3=convert($string2,$key); 

// Test output 
echo '<h4>Your Plaintext Message:</h4><textarea  name="" id="" cols="50" rows="6" disabled="true">'.$string1.'</textarea>'."\n"; 

echo '<h4><br>Your Encrypted Message:</h4><textarea  name="" id="" cols="50" rows="6" disabled="true">'.$string2.'</textarea>'."\n"; 


?>
<br><br>
<h4><a href="./index.php" class="button"><i class="fa fa-reply"></i> Take me back</a></h4>
    
  
					
					
					</div>
				</div>
			</div>
		</div>


	</div>
	<!-- End Full screen banner  -->
	<!-- Services Section -->
	<!-- class section-alt is to give a different color please edit css/style.css to change the color -->
		
		 
	
</body>
</html>