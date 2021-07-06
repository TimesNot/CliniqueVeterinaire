<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>NOTRE ALBUM PHOTO  </title>
        <meta name="description" content="">
        <link href="../css/style.css" rel="stylesheet" type="text/css">
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap');
        </style>
    </head>
    <script type="text/javascript" src="../js/app.js"></script>
    <body>
        <header>
            <?php include("../navbar/header.html"); ?>
        </header>
        <section>
            <div class="container-photo">
                <h1>Notre album photo</h1>
            </div>
        </section>
        <section>
            <div class="main-container-photo">
                <div class="slideshow-gallery">
                    <div class="mySlides slides">
                        <div class="numbertext">1 / 10</div>
                            <img src="../img/photo clinique/accueil.jpg" style="width:100%">
                                <div class="text">Accueil de notre clinique vétérinaire</div>
                    </div>

                    <div class="mySlides slides">
                        <div class="numbertext">2 / 10</div>
                            <img src="../img/photo clinique/parking.jpg" style="width:100%">
                                <div class="text">Parking privé de la clinique</div>
                    </div>

                    <div class="mySlides slides">
                        <div class="numbertext">3 / 10</div>
                            <img src="../img/photo clinique/Radiologie.jpg" style="width:100%">
                                <div class="text">Service Radiologie de la clinique</div>
                    </div>

                    <div class="mySlides slides">
                        <div class="numbertext">4 /10</div>
                            <img src="../img/photo clinique/salle-hospitalisation.jpg" style="width:100%">
                                <div class="text">La salle post-opération pour les animaux</div>
                    </div>
                    <div class="mySlides slides">
                        <div class="numbertext">5 /10</div>
                            <img src="../img/photo clinique/salle-consultation.jpg" style="width:100%">
                                <div class="text">La pièce de consultation</div>
                        </div>
                        <div class="mySlides slides">
                            <div class="numbertext">6 /10</div>
                                <img src="../img/photo clinique/opération.jpg " style="width:100%">
                                    <div class="text">La salle d'opération</div>
                        </div>
                        <div class="mySlides slides">
                            <div class="numbertext">7 /10</div>
                                <img src="../img/photo clinique/chien(2).jpg " style="width:100%">
                                    <div class="text">Quelques clichés d'animaux 😍</div>
                        </div>
                        <div class="mySlides slides">
                            <div class="numbertext">8 /10</div>
                                <img src="../img/photo clinique/chat.jpg" style="width:100%">
                                    <div class="text">Quelques clichés d'animaux 😍</div>
                        </div>
                        <div class="mySlides slides">
                            <div class="numbertext">9 /10</div>
                                <img src="../img/photo clinique/chat(2).jpg" style="width:100%">
                                    <div class="text">Quelques clichés d'animaux 😍</div>
                        </div>
                        <div class="mySlides slides">
                            <div class="numbertext">10 /10</div>
                                <img src="../img/photo clinique/chien-blanc-L.jpg" style="width:100%">
                                    <div class="text">Quelques clichés d'animaux 😍</div>
                        </div>
                </div>
            <br>
                <div style="text-align:center">
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                    <span class="dot"></span>
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                    <span class="dot"></span>
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                    <span class="dot"></span>
                    <span class="dot"></span>   
                </div>
                <script>
                var slideIndex = 0;
                showSlides();

                function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
                }
                </script>
        </section>
        <footer>
            <?php include("../footer/footer.php"); ?>
    </footer>

        
    