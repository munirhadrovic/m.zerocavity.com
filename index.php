<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Children's Dentistry of Naples</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="shortcut icon" href="../../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css"/>
        <link rel="stylesheet" type="text/css" href="css/style4.css"/>
		<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
    </head>
    <body id="page">
    	<?php 
			include 'settings.php';
			
			// echo "<script type='text/javascript'>alert('$transitionefect')</script>";
		?>
        <ul class="cb-slideshow">
            <li>
            	<span>Image 01</span>
            		<div>
            			<h3>Children's</h3>
            		</div>
            </li>
            <li><span>Image 02</span><div><h3>Dentistry</h3></div></li>
            <li><span>Image 03</span><div><h3>of Naples</h3></div></li>
            <li><span>Image 04</span><div><h3>Children's</h3></div></li>
            <li><span>Image 05</span><div><h3>Dentistry</h3></div></li>
            <li><span>Image 06</span><div><h3>Dentistry of Naples</h3></div></li>
        </ul>
        <div class="container">
            <!-- Codrops top bar -->
           <!--  <div class="codrops-top">
                <a href="http://tympanus.net/Development/RockingLetters/">
                    <strong>&laquo; Previous Demo: </strong>Rocking Letters with CSS3 &amp; jQuery
                </a>
                <span class="right">
                    <a href="http://www.flickr.com/photos/markjsebastian/" target="_blank">Photography by Mark Sebastian</a>
                    <a href="http://creativecommons.org/licenses/by-sa/2.0/deed.en" target="_blank">CC BY-SA 2.0</a>
                    <a href="http://tympanus.net/codrops/2012/01/02/fullscreen-background-image-slideshow-with-css3/">
                        <strong>Back to the Codrops Article</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div> --><!--/ Codrops top bar -->
            <header>
                <h1> <span>Children's Dentistry of Naples</span></h1>
				<p class="codrops-demos">
					
                    
                    <div id="findUS"><a href="tel:<?php echo $telephone ?>" class="findusdugme">Call US</a></div>
                    <script>
                            var ua = navigator.userAgent;
                            if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
                                console.log("Android uslo");
                                var prostordugme=document.getElementById('findUS');
                                var dugme= document.createElement('a');
                                dugme.setAttribute('class', "findusdugme");
                                dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
                                dugme.innerHTML="Find US";
                                prostordugme.appendChild(dugme);
                            }
                            else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
                                console.log("Iphone ");
                                var prostordugme=document.getElementById('findUS');
                                var dugme= document.createElement('a');
                                dugme.setAttribute('class', "findusdugme");
                                dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
                                dugme.innerHTML="Find US";
                                prostordugme.appendChild(dugme);
                            }
                            else if (ua.indexOf("BlackBerry") >= 0)
                                    {
                                      
                                         console.log("Blakberu je prosao ");
                                       console.log("Blakberu je prosao ")
	                                    var prostordugme=document.getElementById('findUS');
	                                    var dugme= document.createElement('a');
	                                    dugme.setAttribute('class', "findusdugme");
	                                    dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
	                                    dugme.innerHTML="Find US";
	                                    prostordugme.appendChild(dugme);
	                                    }        
                                    
                                
                                    

                                    
                            else {
                                console.log("nije nigdje uslo default ")
                                var prostordugme=document.getElementById('findUS');
                                var dugme= document.createElement('a');
                                dugme.setAttribute('class', "findusdugme");
                                dugme.setAttribute('href',"geo:0,0?q=1110 W. Lake Cook Road Suite 375 Buffalo Grove, IL 60089");
                                dugme.innerHTML="Find US";
                                prostordugme.appendChild(dugme);
                            }

                            

                            // if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                            // // some code..
                            // }

                        </script>
                        <a href="first/index.php" class="findusdugme pading">Home</a>
					<!-- <a href="index2.html">Demo 2</a>
					<a href="index3.html">Demo 3</a>
					<a class="current-demo" href="index4.html">Demo 4</a> -->
				</p>
            </header>
        </div>
    </body>
</html>