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
    <!-- ============= BODY ===========-->
    <!-- ============================== -->

    <!-- Sección Nosotros -->
    <section id="nosotros" class="about-section">
        <div class="container">
            <!-- Título de la sección -->
            <div class="section-title">
                <h2>Sobre Nosotros</h2>
                <p>Conoce nuestra historia, misión, visión y valores que nos definen.</p>
            </div>

            <!-- Contenido principal con imágenes y texto -->
            <div class="about-content">
                <!-- Primera fila de contenido con imagen y texto -->
                <div class="about-row">
                    <div class="about-image">
                        <img src="https://via.placeholder.com/500x300" alt="Historia de la Universidad">
                    </div>
                    <div class="about-text">
                        <h3>Nuestra Historia</h3>
                        <p>Desde nuestro inicio en XXXX, hemos crecido hasta convertirnos en una de las universidades líderes en el país. Nuestro enfoque siempre ha sido la excelencia académica y el impacto positivo en la comunidad. A lo largo de los años, hemos formado a miles de profesionales que hoy son líderes en sus áreas.</p>
                    </div>
                </div>

                <!-- Segunda fila de contenido con imagen y texto -->
                <div class="about-row">
                    <div class="about-text">
                        <h3>Nuestra Misión</h3>
                        <p>Nuestra misión es proporcionar una educación integral que fomente el crecimiento académico, personal y profesional de nuestros estudiantes. Queremos preparar a los futuros líderes para que enfrenten los desafíos globales, promoviendo la innovación y el desarrollo sostenible.</p>
                    </div>
                    <div class="about-image">
                        <img src="https://via.placeholder.com/500x300" alt="Misión de la Universidad">
                    </div>
                </div>

                <!-- Tercera fila de contenido con imagen y texto -->
                <div class="about-row">
                    <div class="about-image">
                        <img src="https://via.placeholder.com/500x300" alt="Visión de la Universidad">
                    </div>
                    <div class="about-text">
                        <h3>Nuestra Visión</h3>
                        <p>Queremos ser una universidad reconocida a nivel internacional por nuestra calidad académica, nuestra innovación en el ámbito de la educación superior y por nuestra contribución a la sociedad. Trabajamos para que nuestros egresados sean agentes de cambio en el mundo.</p>
                    </div>
                </div>

                <!-- Cuarta fila con los valores y una imagen -->
                <div class="about-row">
                    <div class="about-text">
                        <h3>Nuestros Valores</h3>
                        <ul class="values-list">
                            <li><strong>Innovación:</strong> Adoptamos nuevas tecnologías y metodologías para mejorar el aprendizaje.</li>
                            <li><strong>Excelencia:</strong> Nos esforzamos por alcanzar los más altos estándares en educación.</li>
                            <li><strong>Responsabilidad Social:</strong> Impactamos positivamente en la sociedad a través de proyectos que benefician a la comunidad.</li>
                            <li><strong>Colaboración:</strong> Promovemos el trabajo en equipo para lograr objetivos comunes.</li>
                        </ul>
                    </div>
                    <div class="about-image">
                        <img src="https://via.placeholder.com/500x300" alt="Valores de la Universidad">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Carreras -->
    <section id="carreras" class="carreras-section">
        <div class="container">
            <div class="section-title">
                <h2>Nuestras Carreras</h2>
                <p>Explora las carreras que ofrecemos para ayudarte a alcanzar tus metas.</p>
            </div>
            <div class="carreras-grid">
                <!-- Card 1: Tecnicatura Superior en Gestion de Empresas -->
                <div class="carrera-card">
                    <div class="carrera-header">
                        <h3>Tecnicatura Superior
                            en Gestion de Empresas</h3>
                        <span>Presencial - Duracion: 3 años</span>
                    </div>
                    <div class="carrera-content">
                        <p>Aprender a encargarte de la gestión integral de los procesos administrativos. Resolve los problemas de cualquier empresa aplicando las competencias técnico-profesionales que adquiriras a lo largo de esta increible carrera.</p>
                    </div>
                </div>
                <!-- Card 2: Tecnicatura Superior en Comunicacion Social -->
                <div class="carrera-card">
                    <div class="carrera-header">
                        <h3>Tecnicatura Superior
                            en Comunicacion Social</h3>
                        <span>Presencial - Duracion: 3 años</span>
                    </div>
                    <div class="carrera-content">
                        <p>Desempeñate en medios de comunicación, organismos del estado, ONGs, instituciones privadas y consultoras, entre otros espacios, utilizando el conocimiento adquirido como herramienta para contribuir a la transformación de la realidad.</p>
                    </div>
                </div>
                <!-- Card 3: Tecnicatura Superior en Desarrollo de Software -->
                <div class="carrera-card">
                    <div class="carrera-header">
                        <h3>Tecnicatura Superior
                            en Desarrollo de Software</h3>
                        <span>Presencial - Duracion: 3 años</span>
                    </div>
                    <div class="carrera-content">
                        <p>Participaras en equipos de desarrollo de software, en cualquiera de sus fases (requerimientos, análisis, diseño, programación, implantación, mantenimiento). Adquiriras conocimientos en distintas técnicas, herramientas, lenguajes de programación y procedimientos.</p>
                    </div>
                </div>
                <!-- Card 4: Tecnicatura Superior en Desarrollo Local y Economía Social -->
                <div class="carrera-card">
                    <div class="carrera-header">
                        <h3>Tecnicatura Superior
                            en Desarrollo Local
                            y Economía Social</h3>
                        <span>Presencial - Duracion: 3 años</span>
                    </div>
                    <div class="carrera-content">
                        <p>Ejercerás en áreas vinculadas a la promoción y desarrollo socio económico y socio organizativo, de organismos estatales y privados, y organizaciones sociales tales como, mutuales, asociaciones y/o grupos asociativos.</p>
                    </div>
                </div>
                <!-- Card 5: Tecnicatura Superior en Producción e Industrializacion Frutihorticola -->
                <div class="carrera-card">
                    <div class="carrera-header">
                        <h3>Tecnicatura Superior en
                            Producción e Industrializacion
                            Frutihorticola</h3>
                        <span>Presencial - Duracion: 3 años</span>
                    </div>
                    <div class="carrera-content">
                        <p>Estaras capacitado para manifestar conocimientos, habilidades, destrezas, valores y actitudes en situaciones reales de trabajo, conforme a criterios de profesionalidad propios de cada área y de responsabilidad social</p>
                    </div>
                </div>
                <!-- Card 6:Trayecto Técnico Asistencia en estratégias de Comercialización -->
                <div class="carrera-card">
                    <div class="carrera-header">
                        <h3>Trayecto Técnico
                            Asistencia en estratégias
                            de Comercialización</h3>
                        <span>Presencial - Duracion: 1 años</span>
                    </div>
                    <div class="carrera-content">
                        <p>Las estrategias de comercialización son acciones planeadas dentro de un plan para la consecución de unos objetivos previamente fijados. Esta actividad se realiza todos los días en el ámbito de los negocios.</p>
                    </div>
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

    <!-- Map -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d447.54944759035254!2d-58.17782846820343!3d-26.183807092532007!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945ca5e52a7611cd%3A0xe0cb130c3dafcdd1!2sColegio%20Privado%20Espacios!5e0!3m2!1ses!2sar!4v1727968051316!5m2!1ses!2sar" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <!-- BackToop -->
    <a href="#" id="backToTop" class="back-to-top">
        <i class="ri-arrow-up-s-fill"></i>
    </a>

    <!-- Chatbox -->
    <div class="chatbox-container">
        <div class="chatbox-header">
            <h4>Asistente</h4>
            <button id="closeChat">&times;</button>
        </div>
        <div class="chatbox-body">
            <div class="chatbox-messages">
                <!-- Los mensajes del chat aparecerán aquí -->
            </div>
            <div class="chatbox-input">
                <input type="text" id="chatInput" placeholder="Escribe un mensaje...">
                <button id="sendMessage">Enviar</button>
            </div>
        </div>
    </div>
    <button id="openChat" class="chatbox-button">💬</button>


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