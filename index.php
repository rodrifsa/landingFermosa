<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto Superior Fermosa</title>

    <!-- ============================== -->
    <!-- =========== FAVICON ==========-->
    <!-- ============================== -->

    <link rel="icon" href="assets/img/icon/favicons/icon.png" type="image/x-icon">

    <!-- ============================== -->
    <!-- =========== STYLE ============-->
    <!-- ============================== -->

    <link rel="stylesheet" href="assets/styles/style.css">

    <!-- ============================== -->
    <!-- =========== ICONS ============-->
    <!-- ============================== -->

    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
        rel="stylesheet" />

    <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- ============================== -->
    <!-- =========== FONTS ============-->
    <!-- ============================== -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500;600&display=swap" rel="stylesheet">

</head>

<body>

    <!-- ============================== -->
    <!-- =========== HEADER ===========-->
    <!-- ============================== -->

    <?php
    include('assets/templates/nav.php');
    ?>

    <!-- ============================== -->
    <!-- =========== SLIDER ===========-->
    <!-- ============================== -->

    <div class="slider">
        <div class="list">
            <div class="item">
                <img src="assets/img/slider/image1.jpg" alt="">
            </div>
            <div class="item">
                <img src="assets/img/slider/image2.jpg" alt="">
            </div>
            <div class="item">
                <img src="assets/img/slider/image3.jpg" alt="">
            </div>
        </div>
        <div class="buttons">
            <button id="prev"> <i class="ri-arrow-left-s-line"></i></button>
            <button id="next"><i class="ri-arrow-right-s-line"></i></button>
        </div>
        <ul class="dots">
            <li class="active"></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <!-- ============================== -->
    <!-- =========== ABOUT US =========-->
    <!-- ============================== -->

    <!-- Sección Nosotros -->
    <section id="nosotros" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Nosotros</h2>
                <p>Somos una universidad dedicada a la excelencia académica, con una visión global y compromiso social.</p>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <p>Formamos técnicos superiores capacitados para actuar profesionalmente y con responsabilidad social para contribuir a la construcción y desarrollo de una sociedad más justa y solidaria.
                    </p>
                    <p>Impulsamos acciones de cooperación, articulación e intercambio con otras instituciones de educación superior (convenios universitarios).
                    </p>
                    <p>Diversidad de especialidades: Comercio, Administración, Tecnología informática, Turismo, Enfermería, Bibliotecología, Turismo, Seguros, Ceremonial, Automatización y Robótica, Telecomunicaciones, entre otras.
                    </p>
                    <p>Nuestros profesores han sido seleccionados por su excelencia profesional y compromiso con la docencia.</p>
                </div>
                <div class="about-image">
                    <img src="https://via.placeholder.com/500" alt="Nosotros">
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Carreras -->
    <section id="carreras" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Carreras</h2>
            </div>
            <div class="carreras-grid">
                <div class="carrera-card">
                    <h3>Tecnicatura Superior
                        en Gestion de Empresas</h3>
                    <span>Presencial - Duracion: 3 años</span>
                    <p>Aprender a encargarte de la gestión integral de los procesos administrativos. Resolve los problemas de cualquier empresa aplicando las competencias técnico-profesionales que adquiriras a lo largo de esta increible carrera.</p>
                </div>
                <div class="carrera-card">
                    <h3>Tecnicatura Superior
                        en Comunicacion Social</h3>
                    <span>Presencial - Duracion: 3 años</span>
                    <p>Desempeñate en medios de comunicación, organismos del estado, ONGs, instituciones privadas y consultoras, entre otros espacios, utilizando el conocimiento adquirido como herramienta para contribuir a la transformación de la realidad.</p>
                </div>
                <div class="carrera-card">
                    <h3>Tecnicatura Superior
                        en Desarrollo de Software</h3>
                    <span>Presencial - Duracion: 3 años</span>
                    <p>Participaras en equipos de desarrollo de software, en cualquiera de sus fases (requerimientos, análisis, diseño, programación, implantación, mantenimiento). Adquiriras conocimientos en distintas técnicas, herramientas, lenguajes de programación y procedimientos.</p>
                </div>
                <div class="carrera-card">
                    <h3>Tecnicatura Superior
                        en Desarrollo Local
                        y Economía Social</h3>
                    <span>Presencial - Duracion: 3 años</span>
                    <p>Ejercerás en áreas vinculadas a la promoción y desarrollo socio económico y socio organizativo, de organismos estatales y privados, y organizaciones sociales tales como, mutuales, asociaciones y/o grupos asociativos.</p>
                </div>
                <div class="carrera-card">
                    <h3>Tecnicatura Superior en
                        Producción e Industrializacion
                        Frutihorticola</h3>
                    <span>Presencial - Duracion: 3 años</span>
                    <p>Estaras capacitado para manifestar conocimientos, habilidades, destrezas, valores y actitudes en situaciones reales de trabajo, conforme a criterios de profesionalidad propios de cada área y de responsabilidad social</p>
                </div>
                <div class="carrera-card">
                    <h3>Trayecto Técnico
                        Asistencia en estratégias
                        de Comercialización</h3>
                    <span>Presencial - Duracion: 1 años</span>
                    <p>Las estrategias de comercialización son acciones planeadas dentro de un plan para la consecución de unos objetivos previamente fijados. Esta actividad se realiza todos los días en el ámbito de los negocios.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Postgrados -->
    <section id="postgrados" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Postgrados</h2>
                <p>Especialízate con nuestros programas de postgrado en diversas disciplinas.</p>
            </div>
            <div class="postgrados-list">
                <div class="postgrado-item">
                    <h3>Maestría en Gestión
                        y Asesoramiento Pedagógico</h3>
                    <span>Universidad Nacional de Rosario</span>
                    <div class="postgrado-info">
                        <p>La Maestría en Administración está diseñada para líderes que buscan mejorar sus habilidades gerenciales en un entorno globalizado.</p>
                    </div>
                </div>
                <div class="postgrado-item">
                    <h3>Maestría en Educación
                        en Ciencias de la Salud</h3>
                    <span>Universidad Nacional del Chaco Austral</span>
                    <div class="postgrado-info">
                        <p>El Doctorado en Ciencias Sociales ofrece un enfoque interdisciplinario en el análisis de problemas sociales complejos.</p>
                    </div>
                </div>
                <div class="postgrado-item">
                    <h3>Maestría en
                        Administración de Negocios</h3>
                    <span>Universidad Nacional del Chaco Austral</span>
                    <div class="postgrado-info">
                        <p>Esta especialización proporciona las herramientas necesarias para desarrollar y gestionar soluciones tecnológicas en empresas modernas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Inscríbete -->
    <section id="inscribete" class="section">
        <div class="container container-form">
            <div class="section-title">
                <h2>Inscríbete</h2>
                <p>Completa el siguiente formulario para comenzar tu proceso de inscripción.</p>
            </div>
            <form class="inscribete-form">
                <input type="text" placeholder="Nombre completo" required>
                <input type="email" placeholder="Correo electrónico" required>
                <input type="text" placeholder="Teléfono" required>
                <select required>
                    <option value="" disabled selected>Selecciona una carrera</option>
                    <option value="ingenieria">Tecnicatura Superior en Gestion de Empresas</option>
                    <option value="medicina">Tecnicatura Superior en Comunicacion Social</option>
                    <option value="derecho">Tecnicatura Superior en Desarrollo de Software</option>
                    <option value="derecho">Tecnicatura Superior en Desarrollo Local y Economía Social</option>
                    <option value="derecho">Tecnicatura Superior en Producción e Industrializacion Frutihorticola</option>
                    <option value="derecho">Trayecto Técnico Asistencia en estratégias de Comercialización</option>
                </select>
                <textarea placeholder="¿Por qué te interesa esta carrera?" required></textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>

    <!-- Sección Contacto -->
    <section id="contacto" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Contacto</h2>
            </div>
            <div class="contact-info">
                <p>Dirección: Saavedra 1005, P3600 Formosa</p>
                <p>Teléfono: +123 456 7890</p>
                <p>Email: info@universidad.com</p>
            </div>
        </div>
    </section>

    <!-- Sección Ministerios -->
    <section id="ministries" class="section">
        <div class="container">
            <div class="ministries-img">
                <img src="assets/img/ministries/minifor.png " alt="">
                <img src="assets/img/ministries/miniar.png " alt="">
            </div>
        </div>
    </section>

    <!-- ============================== -->
    <!-- =========== MAP ===========-->
    <!-- ============================== -->

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d447.54944759035254!2d-58.17782846820343!3d-26.183807092532007!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945ca5e52a7611cd%3A0xe0cb130c3dafcdd1!2sColegio%20Privado%20Espacios!5e0!3m2!1ses!2sar!4v1727968051316!5m2!1ses!2sar" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <!-- ============================== -->
    <!-- ========== BACKTOTOP =========-->
    <!-- ============================== -->

    <a href="#" id="backToTop" class="back-to-top">
        <i class="ri-arrow-up-s-fill"></i>
    </a>

    <!-- ============================== -->
    <!-- =========== FOOTER ===========-->
    <!-- ============================== -->

    <?php
    include('assets/templates/footer.php');
    ?>

    <!-- ============================== -->
    <!-- =========== SCRIPTS ==========-->
    <!-- ============================== -->

    <script src="assets/js/script.js" defer></script>

</body>

</html>