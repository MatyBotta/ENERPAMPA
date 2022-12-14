<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="estiloindex.css">
    <link rel="stylesheet" href="slideriniciogrande.css">
    <link rel="stylesheet" href="sliderinicio.css">
    <link rel="stylesheet" href="estilocards.css">
    <link rel="stylesheet" href="slider.css">
    <style>
.navbar a:hover {
    align-items: center;
    display: flex;
    justify-content: center;
    width: 15%;
    background: #3f3f3f;
    }
.prov{
   
   display: flex;
   padding: 20px;
   background: #171717;
   flex-flow: row wrap;
   justify-content: space-between;
   width: 100%;
   margin: 0 auto;
}

.c1{
   border: 1px solid rgb(70,69,69);
   background-color:#fff;
   color: #000;
   width: 120px;
   height: 120px;
   margin: 5px;
  
}


    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <title>ENERPAMPA.SA</title>
</head>
<body>
    <header>
    <div class="head">

        <div class="logo">
            <img src="Imagenes/LOGO.ico" width="80" alt="">
        </div>
        <div class="logo1">
            <a href="https://www.se.com/ar/es/"><img src="Imagenes/1x/Recurso 4.png" width="100" alt=""></a>
        </div>
        <div class="logo2">
            <a href="https://new.abb.com/south-america/el-latam-tour"><img src="Imagenes/1x/Recurso 5.png" width="100" alt=""></a>
        </div>
        <nav class="navbar">
            <a href="#inicio">Inicio</a>
            <a href="#nosotros">Nosotros</a>
            <a href="#contacto">ConTacto</a>
            <a href="#productos">Productos</a>
            <?php
            if(!isset($_SESSION))
            {
                session_start();
            }
            if(empty($_SESSION['mail']) === true)
            {
                ?>
                <a href="iniciar_sesion.html">Iniciar sesion</a>
                <?php
            }
            else
            {
                ?>
                <a href="carrito.php">Carrito</a>
                <a href="cerrar_sesion.php">Cerrar sesion</a>
                <?php
            }
            ?>
        </nav>
    </div>
    
        
    </header>
    <div id="carouselExampleIndicators" class="carousel slide vh-100 overflow-hidden" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="imagenes/inicio/slid1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="imagenes/inicio/prueba-02.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="imagenes/inicio/slidder3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <section class="slidermarcas">

        <article class="contain1">
            <h2 class="title1" id=""></h2>
            <div class="slider1">
                <div class="slide-track1">
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-01.png" alt="">
                    </div>
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-02.png" alt="">
                    </div>
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-03.png" alt="">
                    </div>
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-04.png" alt="">
                    </div>
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-05.png" alt="">
                    </div>
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-06.png" alt="">
                    </div>
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-07.png" alt="">
                    </div>
        
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-08.png" alt="">
                    </div>
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-09.png" alt="">
                    </div>
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-10.png" alt="">
                    </div>
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-11.png" alt="">
                    </div>
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-12.png" alt="">
                    </div>
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-13.png" alt="">
                    </div>
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-14.png" alt="">
                    </div>
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-15.png" alt="">
                    </div>
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-16.png" alt="">
                    </div>
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-17.png" alt="">
                    </div>
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-18.png" alt="">
                    </div>
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-19.png" alt="">
                    </div>
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-20.png" alt="">
                    </div>
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-21.png" alt="">
                    </div>
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-22.png" alt="">
                    </div>
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-23.png" alt="">
                    </div>
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-24.png" alt="">
                    </div>
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-25.png" alt="">
                    </div>
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-26.png" alt="">
                    </div>
                    <div class="slide1">
                        <img src="imagenes/inicio/IMAGENES CARRUSEL-27.png" alt="">
                    </div>
                </div>
            </div>
        </article>

    </section>
    <section class="imagenesprod">
        <div class="fondo">
        <br>
        <br>
        <br>
        <br>
        <br>
        <h2 class="title" id="productos">Productos:</h2>
        <br> 
        <form action="mostrar_productos.php" method="post">
        <p></p>
            <div class="contenedor1">
                <button type = "submit" value = "Distribucion electrica industrial" id = "categoria" name = "categoria">
                     <figure>
                         <img src="imagenes/1x/DIST. INDUSTRIAL.jpg">
                         <div class="capa1">
                             <h3>Distribucion electrica industrial</h3>
                             <p>Todo lo necesario en maniobra y monitoreo de redes de baja tensi??n, interruptores de potencia, ductos, bandejas, cables subterraneos y protecciones</p>
                         </div>
                     </figure>
        </button>
             </div>
             <div class="contenedor2">
             <button type = "submit" value = "Distribucion electrica terciaria" id = "categoria" name = "categoria">
                      <figure>
                          <img src="imagenes/1x/bombinia.jpg">
                          <div class="capa2">
                              <h3>Distribucion electrica domestica</h3>
                              <p>CUADRITO 2</p>
                          </div>
                      </figure>
        </button>
              </div>
              <div class="contenedor3">
              <button type = "submit" value = "Control de potencia" id = "categoria" name = "categoria">
                     <figure>
                         <img src="imagenes/1x/CONTROL DE POTENCIA.jpg">
                         <div class="capa3">
                             <h3>Control de potencia</h3>
                             <p>Linea completa de salida motor, contactores, variadores, arrancadores, motores y sus respectivas protecciones.</p>
                         </div>
                     </figure>
        </button>
             </div>
             <div class="contenedor4">
             <button type = "submit" value = "Automatizacion" id = "categoria" name = "categoria">
                     <figure>
                         <img src="imagenes/1x/AUTOMATIZACION.jpg">
                         <div class="capa4">
                             <h3>AUTOMATIZACION</h3>
                             <p>Arquitecturas de sistemas automatizados con PLC, HMI, sensores y sistemas scada.</p>
                         </div>
                     </figure>
        </button>
             </div>
             <div class="contenedor5">
             <button type = "submit" value = "Distribucion electrica terciaria" id = "categoria" name = "categoria">
                     <figure>
                         <img src="imagenes/1x/DIST. COMERCIAL.jpg">
                         <div class="capa5">
                             <h3>Distribucion electrica terciara</h3>
                             <p>Gama o linea completa de conductores, canalizaciones, gabinetes y todo lo que respecta a protecciones de personas e instalaciones.</p>
                         </div>
                     </figure>
                 </a>
             </div>
             <div class="contenedor6">
             <button type = "submit" value = "Iluminacion" id = "categoria" name = "categoria">
                     <figure>
                         <img src="imagenes/1x/ILUMINACI??N.jpg">
                         <div class="capa6">
                             <h3>ILUMINACI??N</h3>
                             <p>Provedores de instrumentos para el control del consumo de energia y su comunicacion para administrar el consumo.</p>
                         </div>
                     </figure>
        </button>
                </div>
                <div class="contenedor7">
                <button type = "submit" value = "Accesorios" id = "categoria" name = "categoria">
                         <figure>
                             <img src="imagenes/1x/ACCESORIOS.jpg">
                             <div class="capa7">
                                 <h3>ACCESORIOS</h3>
                                 <p>Gama completa en instrumentos de medicion, herramientas, accesorios que hacen a la instalacion y al trabajo en la misma.</p>
                             </div>
                         </figure>
        </button>
                    </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      
        <br>
        <br>
        <br>
        <br>
    </section>
    <section class="titulo">
    <h2>Nuestros principales aliados comerciales</h2>
    </section>
    <section class="prov">
    <div class="c1">
        <a href="https://new.abb.com/south-america/productos-y-servicios"><img src="imagenes/1x/ABB.jpg" width="100"></a>
    </div>
    <div class="c1">
        <a href="https://lct.com.ar/catalogo/"><img src="" width="100"></a>
    </div>
    <div class="c1">
        <a href="https://new.abb.com/south-america/productos-y-servicios"><img src="imagenes/1x/SCHNEIDER.jpg" width="100"></a>
    </div>
    <div class="c1">
        <a href="https://new.abb.com/south-america/productos-y-servicios"><img src="imagenes/1x/SAMET.jpg" width="100"></a>
    </div>
    <div class="c1">
        <a href="https://new.abb.com/south-america/productos-y-servicios"><img src="imagenes/1x/3M.jpg" width="100"></a>
    </div>
    <div class="c1">
        <a href="https://new.abb.com/south-america/productos-y-servicios"><img src="" width="100"></a>
    </div>
    <div class="c1">
        <a href="https://new.abb.com/south-america/productos-y-servicios"><img src="imagenes/1x/" width="100"></a>
    </div> <div class="c1">
        <a href="https://new.abb.com/south-america/productos-y-servicios"><img src="imagenes/1x/IMSA.jpg" width="100"></a>
    </div> <div class="c1">
        <a href="https://new.abb.com/south-america/productos-y-servicios"><img src="" width="100"></a>
    </div> <div class="c1">
        <a href="https://new.abb.com/south-america/productos-y-servicios"><img src="imagenes/1x/SIEMENS.jpg" width="100"></a>
    </div>
    <section class="nosotros">
        <br>
        <h2 class="title" id="nosotros">Nosotros</h2>
        <div class="title-cards">
            
        </div>
    <div class="container-card">
        
    <div class="card">
        <figure>
            <img src="imagenes/1x/cua1.jpg">
        </figure>
        <div class="contenido-card">
            <h3>COMPROMISO</h3>
            <p>Brindar a nuestros clientes la provicion de materiales y soluciones electricas para la vivienda, el comercio y la industria.</p>
            
            
        </div>
    </div>
    <div class="card">
        <figure>
            <img src="imagenes/1x/fondo.jpeg">
        </figure>
        <div class="contenido-card">
            <h3>OBJETIVO</h3>
            <p>Brindar siempre el mejor asesoramiento en cuanto a precio y las variantes que ofrece el mercadol mercado, logrando asi la confianza necesaria para extender la relacion comercial en el tiempo</p>
            
        </div>
    </div>
    <div class="card">
        <figure>
            <img src="https://image.freepik.com/foto-gratis/desarrollo-programadores-desarrollo-tecnologias-diseno-codificacion-sitios-web_18497-1090.jpg">
        </figure>
        <div class="contenido-card">
            <h3>ASESORAMIENTO TECNICO</h3>
            <p>Estar atento a la necesidad especifica del cliente. Asesorandolo constantemente en las variables tecnicas que surgan.Acompa??ando con nuestro conocimiento profesional para la realizacion del proyecto. </p>
            
        </div>
    </div>
    </div>

    </section>

    <section class="slidermarcas">

        <article class="contain">
            <h2 class="title"></h2>
            <div class="slider">
                <div class="slide-track">
                    <div class="slide">
                        <img src="imagenes/1x/3M.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="imagenes/1x/ABB.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="imagenes/1x/CAMBRE.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="imagenes/1x/CHINT.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="imagenes/1x/GENROD.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="imagenes/1x/IMSA.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="imagenes/1x/JELUZ.jpg" alt="">
                    </div>
        
                    <div class="slide">
                        <img src="imagenes/1x/LCT.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="imagenes/1x/LS.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="imagenes/1x/MACROLED.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="imagenes/1x/MASTECH.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="imagenes/1x/SAMET.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="imagenes/1x/SCHNEIDER.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="imagenes/1x/SICA.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="imagenes/1x/SIEMENS.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="imagenes/1x/STANLEY.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="imagenes/1x/WENTINCK.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="imagenes/1x/ZOLOCA.jpg" alt="">
                    </div>
                </div>
            </div>
        </article>

    </section>
    <br>
    <br>
    <br>
    
        <footer class="pie-pagina">
            <div class="grupo-1">
                <div class="box">
                    <figure>
                        <a href="https://www.google.com/maps/place/ENERPAMPA+S.+A./@-34.658319,-58.5352655,17z/data=!3m1!4b1!4m5!3m4!1s0x95bcc90a8b940961:0xf3487b128b69db7f!8m2!3d-34.6583674!4d-58.5330233"><img src="imagenes/MAPA.png" height="220px" width="100%" alt="mapa"></a>
                    </figure>
                </div>
                <div class="box">
                    <h2 id="contacto">Direccion:</h2>
                    <p>Mansilla 640 Lomas del Mirador.</p>
                    <br>
                    <p>7546-5690 7533-2216</p>
                    <p>2106-0462 7547-6554</p>
                    
                </div>
                <div class="box">
                    <h2>Redes sociales:</h2>
                    <div class="red-social">
                        <a href="https://www.facebook.com/people/Enerpampa-SA-Distribuidor-de-Materiales-El%C3%A9ctricos/100063664860017/?ref=page_internal&mt_nav=0" class="fa fa-facebook"></a>
                        <a href="https://www.instagram.com/enerpampa.sa/" class="fa fa-instagram"></a>
                        <a href="https://www.linkedin.com/in/enerpampa-s-a-355a45254/" class="fa fa-linkedin"></a>
                    </div>
                    <br>
                    <br>
                    <h2>Mail de contacto: ventas@enerpampa.com</h2>
                </div>
            </div>
            
    </section>
    
</body>
</html>