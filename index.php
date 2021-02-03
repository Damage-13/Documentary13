<?php 
  include 'send_email.php';
?>

<!DOCTYPE html>
<html>
	<title>Web-Site</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="immagini/icona.png">
  <script src="script.js"></script>
  <link rel="stylesheet" href="style.css">


	<style>
		body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
		body, html 
		{
			height: 100%;
			color: #777;
			line-height: 1.8;
		}

		/* Create a Parallax Effect */
		.bgimg-1, .bgimg-2, .bgimg-3 
		{
		background-attachment: fixed;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		}

		/* First image (Logo. Full height) */
		.bgimg-1 
		{
			background-image: url('https://www.apfeltalk.de/magazin/wp-content/uploads/2021/01/IMG_04.jpg');
			min-height: 100%;
		}

		/* Second image (Portfolio) */
		.bgimg-2 
		{
			background-image: url("immagini/Desktop.jpg");
			min-height: 400px;
		}

		/* Third image (Contact) */
		.bgimg-3 
		{
			background-image: url("immagini/Photo.jpg");
			min-height: 400px;
		}

		.w3-wide {letter-spacing: 10px;}
		.w3-hover-opacity {cursor: pointer;}

		/* Turn off parallax scrolling for tablets and phones */
		@media only screen and (max-device-width: 1600px) {
      .bgimg-1, .bgimg-2, .bgimg-3 {
        min-height: 400px;
      }
		}
	</style>
  <body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
      <div class="w3-bar" id="myNavbar">
        <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
          <i class="fa fa-bars"></i>
        </a>
        <a href="#home" class="w3-bar-item w3-button">HOME</a>
        <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ALTRO</a>
        <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> LINGUAGGI </a>
        <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTATTI</a>

      </div>

      <!-- Navbar on small screens -->
      <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
        <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
        <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
        <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
        <a href="#" class="w3-bar-item w3-button">SEARCH</a>
      </div>
    </div>

    <!-- First Parallax Image with Logo Text -->
    <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
      <div class="w3-display-middle" style="white-space:nowrap;">
      </div>
    </div>

    <!-- Container (About Section) -->
    <div class="w3-content w3-container w3-padding-64" id="about">
      <h3 class="w3-center">Informazioni su di Me</h3>
      <em>Ciao, mi chiamo Nunzio Schiavone,</em>
      <p>sono un ragazzo di vent'anni che ama la programmazione e ovviamente <br>programmare. <br>La passione per la programmazione ebbe inizio quando frequentai le scuole superiori, imparando le basi, la struttua di come un progetto 
      prende forma tramite il linguaggio C++. 
      <br> Un linguaggio, che, viene consigliato alla maggior parte dei ragazzi che vuole addentrarsi e apprendere il mondo della programmazione.<br></p>
      <p>Con il tempo mi sono addentrato ancora di più nel mondo della programmazione, infatti, ho 'lavorato' nello sviluppo di giochi, prendendo anche l'incarico di Moderatore nei forum ai fini di supportare e consigliarei clienti nei loro acquisti o nelle loro indecisioni.

      <div class="w3-row">
        <div class="w3-col m6 w3-center w3-padding-large">
          <br>
          <img src="immagini/me.png" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of s" width="240" height="90" style="border-radius: 12%;">
        </div>

        <!-- Hide this text on small devices -->
        <div class="w3-col m6 w3-hide-small w3-padding-large">
          <br><br>
          <hr></hr>
          <center>Benvenuti nel mio Sito!</center><br>
          I linguaggi conosciuti:
          <ul>
            <li>HTML</li>
            <li>PHP</li>
            <li>JAVASCRIPT</li>
            <li>JQUERY</li>
            <li>SQL</li>
            <li>CSS</li>
          </ul>
          <br>
        </p>
        <hr></hr>
          <p>I linguaggi da studiare sono:
            <ul>
              <li>JAVASPRING</li>
              <li>XML</li>
              <li>HYBRIS</li>
              <li>MAVEN</li>
              <li>JAVA</li>
            </ul>
          </p>
        </div>
      </div>
      
      <p class="w3-wide"><i class="fa fa-laptop"></i>Web Design</p>
      <div class="w3-light-grey">
        <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-camera"></i>Fotografie</p>
      <div class="w3-light-grey">
        <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:70%">70%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-photo"></i>Photoshop</p>
      <div class="w3-light-grey">
        <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:75%">75%</div>
      </div>
    </div>

    <!-- Second Parallax Image with Portfolio Text -->
    <div class="bgimg-2 w3-display-container w3-opacity-min">
      <div class="w3-display-middle">
      </div>
    </div>

    <!-- Container (Portfolio Section) -->
    <div class="w3-content w3-container w3-padding-64" id="portfolio">
      <h3 class="w3-center">Linguaggi conosciuti/da conoscere</h3>
      <p class="w3-center"><em>Qui sono elencati alcuni dei linguaggi che conosco.</em></p>

      <div class="w3-row-padding w3-center">
        <div class="w3-col m3">
          <img src="immagini/html.png" style="width:100%">
        </div>

        <div class="w3-col m3">
        <img src="immagini/php.png" style="width:100%">    </div>

        <div class="w3-col m3">
        <img src="immagini/JS.png" style="width:100%">    </div>

        <div class="w3-col m3">
        <img src="immagini/spring.png" style="width:100%">    </div>
      </div>

      <div class="w3-row-padding w3-center w3-section">
        <div class="w3-col m3">
        <img src="immagini/sql.png" style="width:100%">    </div>

        <div class="w3-col m3">
        <img src="immagini/xml.png" style="width:100%">    </div>

        <div class="w3-col m3">
        <img src="immagini/hybris-logo.png" style="width:100%">    </div>

        <div class="w3-col m3">
        <img src="immagini/maven.png" style="width:100%">    </div>
        </div>
      </div>
    </div>

    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
      <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
      <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-image">
        <p id="caption" class="w3-opacity w3-large"></p>
      </div>
    </div>

    <!-- Third Parallax Image with Portfolio Text -->
    <div class="bgimg-3 w3-display-container w3-opacity-min">
      <div class="w3-display-middle">
      </div>
    </div>

    <!-- Container (Contact Section) -->
    <div class="w3-content w3-container w3-padding-64" id="contact">
      <h3 class="w3-center">DOVE LAVORO</h3>

      <div class="w3-row w3-padding-32 w3-section">
        <div class="w3-col m4 w3-container">
        </div>
        <div class="w3-col m8 w3-panel">
          <div class="w3-large w3-margin-bottom">
            <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Palagiano, TA<br>
            <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Telefono: 3338158115<br>
            <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: nunzioschiavone@outlook.it<br>
          </div><br>
          <hr></hr>
          <h3 class="w3">INOLTRA E-MAIL</h3>
          <form target="_blank" name="form" method="POST" action="">
          <?php
            print $alert;
          ?>
            <p><input class="w3-input w3-padding-16" required type="text" placeholder="Nome" autocomplete="none" name="Name" id="nome" style="width: 450px;"  onfocus="focusnome()" onblur="onblurnome()"></p><div id="feedback"></div>
            <p><input class="w3-input w3-padding-16" required type="email" placeholder="E-Mail"  autocomplete="none" name="mail" id="email" style="width: 450px;" onfocus="" onblur=""></p></p><div id="feedback3"></div>
            <p><input class="w3-input w3-padding-16" required type="text" placeholder="Oggetto"  autocomplete="none" name="object" id="oggetto" style="width: 450px;" onfocus="focusoggetto()" onblur="onbluroggetto()"></p></p><div id="feedback2"></div>
            <p><textarea class="w3-input w3-padding-16" required type="text" placeholder="Inoltra il Messaggio"  autocomplete="off" name="Message" id="messaggio" style="width: 450px;"></textarea></p>
            <p><button class="w3-button w3-light-grey w3-section" name="bottone"  type="submit" onclick="campivuoti()" >Inoltra Messaggio</button></p>
          </form>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off" style="background-color: black;">
      <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Sali Sopra</a>
      <div class="w3-xlarge w3-section">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
      </div>
      <p>Creato da <h6>Nunzio Schiavone</h6>
    </footer>
    
    <script>
    // Modal Image Gallery
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
      var captionText = document.getElementById("caption");
      captionText.innerHTML = element.alt;
    }

    // Change style of navbar on scroll
    window.onscroll = function() {myFunction()};
    function myFunction() {
        var navbar = document.getElementById("myNavbar");
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
        } else {
            navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
        }
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function toggleFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
    </script>
    <script type="text/javascript">
      if(window.history.replaceState)
      {
        window.history.replaceState(null, null, window.location.href);
      }
    </script>
  </body>
</html>
