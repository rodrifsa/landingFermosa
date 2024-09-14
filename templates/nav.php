<?php

echo '

<nav class="nav-container">

        <!-- <h1 class="logo">LOGO</h1> -->
         <a href="index.php">
            <img src="images/logo/logo.png" alt="">
        </a>

        <div class="hamburger">

            <span class="lines"></span>
            <span class="lines"></span>
            <span class="lines"></span>

        </div>

        <ul id="nav-links">


            <li><a href="http://fermosainstituto.com/campus" class="links" target="_blank">CAMPUS</a></li>
            <li><a href="#" class="links">Nosotros</a></li>
            <li><a href="#" class="links">Carreras</a></li>
            <li><a href="#" class="links">Postgrado</a></li>
            <li><a href="#" class="links">Inscribete</a></li>
            <li><a href="#" class="links">Contacto</a></li>

        </ul>

    </nav>
';

?>

<!-- SCRIPTS -->
<script>
    let hamburger = document.querySelector('.hamburger');
    let navLinks = document.getElementById('nav-links');
    let links = document.querySelectorAll('.links');


    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('hide');
        hamburger.classList.toggle('lines-rotate');
    });

    for (let i = 0; i < links.length; i++) {
        links[i].addEventListener('click', () => {
            navLinks.classList.toggle('hide');
        });
    }
</script>