<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Pasión F.C</title>
    <link rel="icon" href="Imagenes/logo.png">
    <link rel="stylesheet" href="/css/estilos.css">
    <link rel="stylesheet" href="/css/cards.css">
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">
    <script src="https://kit.fontawesome.com/d55e038903.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
       <nav>
            <div class="logo">
                <img src="/Imagenes/logo.png" alt="Logo" class="logo-img">
                <h1 class="tituloo">REAL PASION</h1>
            </div>
            <ul id="menuList">
                <li><a href="login.php">Inicio</a></li>
                <li><a href="valores.html">Sobre</a></li>
                <li><a href="portafolio.html">Servicios</a></li>
                <li><a href="contacto.html">Contacto</a></li>
            </ul>
            <div class="menu-icon">
                <i class="fa-solid fa-bars" onclick="toggleMenu()"></i>
        </div>
        </nav>
        <section class="textos-header">
            <h1>REAL PASION F.C</h1>
            <h2>Somos real pasion, club ubicado en Funza-Cundinamarca, trabajamos para capacitar a los mejores jugadores</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 150%; width: 150%;"><path d="M-2.82,33.95 C352.14,200.28 126.41,-72.33 500.00,49.85 L500.00,149.60 L-5.64,152.06 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>
    <?php include"insertar.php"?>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Nosotros</h2>
            <div class="contenedor-sobre-nosotros">
                <div class="cardd">
                    <div class="face front">
                        <img src="<?php echo $rutas_imagenes[0]; ?>" alt="">
                        <h3>MISION</h3>
                    </div>
                    <div class="face back">
                        <h3>Misión</h3>
                        <p>Nuestra misión en Real Pasion FC es fomentar el desarrollo integral de nuestros jugadores, tanto en lo deportivo como en lo personal, inculcando valores como la disciplina, el respeto y el trabajo en equipo. Nos enfocamos en brindar oportunidades a jóvenes talentos, proporcionándoles una formación técnica y táctica de alto nivel...</p>
                        <div class="link">
                            <a href="valores.html">Detalles</a>
                        </div>
                    </div>
                </div>
            
                <div class="cardd">
                    <div class="face front">
                        <img src="<?php echo $rutas_imagenes[1]; ?>" alt="">
                        <h3>Visión</h3>
                    </div>
                    <div class="face back">
                        <h3>Visión</h3>
                        <p>Nuestra visión es convertirnos en un club reconocido a nivel regional y nacional, por nuestra capacidad de formar jugadores que destaquen tanto en el fútbol profesional como en la vida cotidiana. Aspiramos a ser un modelo de gestión deportiva, donde el talento y el esfuerzo se combinen con la innovación en el entrenamiento y el desarrollo humano...</p>
                        <div class="link">
                            <a href="valores.html">Detalles</a>
                        </div>
                    </div>
                </div>

                <div class="cardd">
                    <div class="face front">
                        <img src="<?php echo $rutas_imagenes[2]; ?>" alt="">
                        <h3>Historia</h3>
                    </div>
                    <div class="face back">
                        <h3>Historia</h3>
                        <p>Real Pasion FC fue fundado en el año 2015 en Funza, Cundinamarca, por la apasionada visionaria Mayra Ramírez. El equipo nació con el propósito de ofrecer a jóvenes y adultos de la región una plataforma para desarrollar su talento futbolístico y fomentar valores como la disciplina, el trabajo en equipo y el respeto dentro del deporte...</p>
                        <div class="link">
                            <a href="valores.html">Detalles</a>
                        </div>
                    </div>
                </div> 

                <div class="cardd">
                    <div class="face front">
                        <img src="<?php echo $rutas_imagenes[3]; ?>" alt="">
                        <h3>Actualidad</h3>
                    </div>
                    <div class="face back">
                        <h3>Actualidad</h3>
                        <p>En la actualidad, Real Pasion FC continúa creciendo, consolidándose no solo como un equipo de fútbol, sino como una comunidad unida por el amor al deporte. Bajo la dirección de Mayra Ramírez y un equipo técnico comprometido, el club sigue desarrollando talentos y soñando con llevar el nombre de Funza a escenarios más grandes del fútbol colombiano...</p>
                        <div class="link">
                            <a href="valores.html">Detalles</a>
                        </div>
                    </div>
                </div> 
            </div>
            <br><br>
            <div class="info-bar">
                <div class="info-item">
                    <img src="https://img.icons8.com/ios-filled/50/ffffff/planner.png" alt="Progression">
                    <h3>Programación</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci velit id libero.</p>
                </div>
                <div class="info-item">
                    <img src="https://img.icons8.com/ios-filled/50/ffffff/dumbbell.png" alt="Workout">
                    <h3>Entranamientos</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci velit id libero.</p>
                </div>
                <div class="info-item">
                    <img src="https://img.icons8.com/ios-filled/50/ffffff/treadmill.png" alt="Nutrition">
                    <h3>Nutricion   </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci velit id libero.</p>
                </div>
            </div>
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Nuestros servicios</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="/Imagenes/icono4.png" alt="">
                        <h3>Name</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="/Imagenes/icono2.png" alt="">
                        <h3>Name</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="/Imagenes/icono5.png" alt="">
                        <h3>Name</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="real">
            <img src="/Imagenes/img 2.jpeg" alt="Jude Bellingham" class="background-image">
            <div class="over">
                <h2>Nuestros Uniformes</h2>
            </div>
        </div>
    </main>
    <footer class="pie-pagina">
        <div class="grupo-1">
           
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Contamos con un equipo de profesionales cualificados y apasionados por el fútbol, que te ayudarán a desarrollar tu potencial y alcanzar tus objetivos.</p>
            </div>
            
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/profile.php?id=100063746286057&mibextid=ZbWKwL" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/real.pasionfc?igsh=a2F3eXlwdWdldzk0" class="fa fa-instagram"></a>
                    <a href="https://www.youtube.com/@RealPasionFC" class="fa fa-youtube"></a>
                    <a href="https://www.tiktok.com/@fabio12445_?_t=8fkd6q7v0is&_r=1" class="fa fa-brands fa-tiktok"></a>
                </div>
            </div>  
            

        
            
            <div class="box">
                <h2>ACERCA DE</h2>
                <a href="/valores.html" class="acerca">Nosotros</a>
                <a href="https://www.facebook.com/CundeportesFunzaOficial?mibextid=ZbWKwL" class="acerca">Inscripciones</a>
                <a href="https://www.facebook.com/CundeportesFunzaOficial?mibextid=ZbWKwL" class="acerca">Noticias</a>
            </div> 

            

            <div class="box">
                <div class="Contacto">
                    <h2>SUGERENCIAS</h2>
                    <form action="https://formsubmit.co/aflsrm2@gmail.com" method="POST">
                        <div class="input-group">
                
                            <input class="input-cont" type="email" name="email" id="email" placeholder="Su correo">

                            <textarea name="message" id="message" cols="30" rows="5" placeholder="Sus sugerencias"></textarea>
            
                            <a href=""><button class="btn">Enviar</button></a>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
</footer>
<!-- Swiper JS -->
<script src="/java/swiper-bundle.min.js"></script>

<!-- JavaScript -->
<script src="/java/nav.js"></script>
<script src="/java/card.js"></script>
<script src="//code.tidio.co/moxzg2z7zbnpho1trn7s4nv3rrd1cf4k.js" async></script>
</body>
</html>