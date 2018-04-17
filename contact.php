<?php
	if(isset($_POST['ContactButton'])){
		
		$url = 'https://www.google.com/recaptcha/api/siteverify';
		$privatekey = "6LdXFCITAAAAABcXO0bIcPy42i8Rl_-7j-4dQcXE";
		
		$response = file_get_contents($url."?secret=".$privatekey."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
		
		$data = json_decode($response);
		
		if(isset($data->success) AND $data->success==true){
			
			$name = $_REQUEST["name"];
			$subject = $_REQUEST["subject"];
$message = $_REQUEST["message"];
$from = "form@sibir-invest.rs";

$name = stripslashes($name); 
$message = stripslashes($message); 
$subject = stripslashes($subject); 
$from = stripslashes($from); 


$message = "Kontakt: ".$name."\n".$message;
	
	mail("kontakt@sibir-invest.rs", 'Zahtev od: '.$subject, $_SERVER['REMOTE_ADDR']."\n".$message, "From: $from");


			header('Location: contact.php?CaptchaPass=True');
			
			
		}else{
			
			header('Location: contact.php?CaptchaFail=True');
		}

	}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="građevinsko preduzeće SIBIR INVEST, Požarevac">
<meta name="keywords" content="izgradnja poslovno-stambenih objekata, građevinski objekti, izgradnja stambenih objekata, izgradnja nestambenih objekata"> 

<title>Kontakt</title>

<!-- for FF, Chrome, Opera -->
<link rel="icon" type="image/png" href="img/ico16.png" sizes="16x16">
<link rel="icon" type="image/png" href="img/ico32.png" sizes="32x32">

<!-- for IE -->
<link rel="icon" type="image/x-icon" href="img/ico32.png" >
<link rel="shortcut icon" type="image/x-icon" href="img/ico32.png"/>



<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">


<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script src='https://www.google.com/recaptcha/api.js?hl=hr'></script>


<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->


</head>

<body>

<header class="header">	
	<div class="greska">
	Ekran Vašeg mobilnog telefona je male rezolucije, kako bi sajt prikladno bio prikazan, okrenite Vaš mobilni u "landscape" položaj (horizontalna orijentacija ekrana)</div>	

</header>

<nav class="main-nav-outer" id="test">
	<div class="container">
        <ul class="main-nav">
        	<li><a href="index.html">Početna</a></li>
            <li><a href="Delatnosti.html">Delatnosti</a></li>
			<li><a href="Ponuda.html">Ponuda</a></li>
			<li id="oui"><a href="Objekti.html">Objekti u izgradnji</a></li>
            <li><a href="Galerija.html">Galerija</a></li>
			<li><a href="Reference.html">Reference</a></li>
            <li><a href="oNama.html">O nama</a></li>
			<li><a href="contact.php">Kontakt</a></li>
        </ul>               
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav>
 

<div class="container animated fadeIn delay-19s" id="sib" style="padding-top:20px;">
<div class="sibir"><img  src="img/logo_wide.jpg" alt=""> </div>	
</div>


<div class="spremnismo2 animated bounceInRight brTB pdT4 pdB4">Ukoliko imate neke predloge, zahteve ili pitanja, uvek nas možete kontaktirati ovde, putem Email-a ili telefonom.
	</div>





<!-- ---------------- KONTAKT PODACI I FORMA ---------------- -->
<div class="mainDiv  animated bounceInLeft delay-04s">





<!-- ---------------- KONTAKT PODACI ---------------- -->    
<div class="mainLeft">

<div class="ico">
	
	
	<div class="ikonica">
		<i class="fa-at"></i>
	</div>
	<div class="ikonica">
		<i class="fa-globe"></i>
	</div>
	<div class="ikonica">
		<i class="fa-pencil"></i>
	</div>
	<div class="ikonica">
		<i class="fa-phone"></i>
	</div>
</div>

<div class="txtZaIco">
	
	<p>EMAIL:</P>
	<p>ADRESA:</P>
	<p>PIB:</P>
	<p>TELEFON:</P>
</div>

<div class="txt2ZaIco"  id="kpodaci" >
	
	<p>kontakt@sibir-invest.rs</p>
	<p>Sinđelićeva 23 lokal br.5</p>
	<p>108899140</p>
	
	
	<div id="fon">
	<p>012 / 531 - 739</p>
	<p>060 / 650-80-80</p>
	<p>+491172144518</p>
</div>	
</div>


</div>		
<!-- ---------------- KONTAKT PODACI ---------------- -->       






<!-- --------------------- FORMA --------------------- -->



<div class="mainRight">

 

				
<form method="POST" name="form1" id="form1" onsubmit="MM_validateForm('from','','RisEmail','subject','','R','verif_box','','R','message','','R');return document.MM_returnValue">

<input class="input-text" name="subject" type="text" id="subject" value="Vaše Ime *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>

<input class="input-text" name="name" type="text" id="name" value="Vaš br. telefona ili E-mail Adresa *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
					
<textarea class="input-text text-area" name="message" cols="20" rows="20" id="message" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">Vaša poruka *</textarea>




		
<div class="g-recaptcha" id="html_element" data-sitekey="6LdXFCITAAAAAEitEo97QSolxzA-PgnSohbjauxO"></div>

	
<input name="ContactButton" type="submit" class="input-btn" id="ContactButton" value="POŠALjI PORUKU"/>


			
</form>	

				</div>	





<!-- --------------------- FORMA --------------------- -->







<div class="clear"></div>



</div>






<?php if(isset($_GET['CaptchaPass'])){ ?>
			
			<div class="hvala1 animated fadeIn delay-05s">PORUKA JE POSLATA
	</div>
			
			<div class="hvala2 animated fadeIn delay-12s">Hvala Vam na ukazanom poverenju, očekujte odgovor uskoro. S poštovanjem, <span id="cdTeam">SIBIR INVEST</span>
	</div>
			<?php } ?>	
	
	
	
	
	
	<?php if(isset($_GET['CaptchaFail'])){ ?>
			
			<div class="hvala1 animated fadeIn delay-05s" id="colred">PORUKA NIJE POSLATA
	</div>
			
			<div class="hvala2 animated fadeIn delay-12s">Da biste poslali poruku, neophodno je da čekirate polje "NISAM ROBOT"
	</div>
	
	
			<?php } ?>

			
			
		
			
<!-- ---------------- KONTAKT PODACI I FORMA ---------------- -->


	








<div id="ceentar" class="animated bounceInRight delay-07s">
<script type="text/javascript" src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
<div id='gmap_canvas'>
<div><small><a href="http://embedgooglemaps.com">embed google maps</a></small></div>
<div><small><a href="http://www.proxysitereviews.com/">proxy sites</a></small></div>
</div>
<script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(44.620173,21.183708),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(44.620173,21.183708)});infowindow = new google.maps.InfoWindow({content:'<strong>sibir-invest.rs</strong><br>Sindjeliceva 23 lokal br.5,Požarevac,Srbija<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>





 


<div class="clear"></div>
<footer class="footer">
        <span class="copyright">sibir-invest.rs - Sva prava zadržana |  Designed by custom-design.org</span>
</footer>

<script type="text/javascript">
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });
</script>

</body>
</html>