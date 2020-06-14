<?php 
  
  //llamaos a la libreria crud
  include_once('php/LIBRERIA.php');
  if(!isset($codigo)){
      $codigo= "";
  }
  $codigo = 1; 
  $sql = "SELECT * FROM T_habitacion WHERE IdT_habitacion = '$codigo'";
  $fila_personal = CARGAR_DATOS_CAMPO($sql);
 
  $codigo = 2; 
  $sql = "SELECT * FROM T_habitacion WHERE IdT_habitacion = '$codigo'";
  $fila_matri = CARGAR_DATOS_CAMPO($sql);

  $codigo = 3; 
  $sql = "SELECT * FROM T_habitacion WHERE IdT_habitacion = '$codigo'";
  $fila_fami = CARGAR_DATOS_CAMPO($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Wester</title>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">  -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&family=Comic+Neue&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/normalize.css">
    <!--IMAGEN DE LA WEB-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


</head>

<body>
    <!--Parte Navbar-->
    <nav class="navbar">
        <div class="container">
            <div class="flex-navbar">

                <div class="logo">
                    <img src="img/logo.png" alt="Imagen logo">
                </div><!--cierre logo-->
  
                <ul class="navigation">
                    <li class="item"><a class="enlace active" href="">Inicio</a></li>
                    <li class="item"><a class="enlace" href="nosotros.html">Nosotros</a></li>
                    <li class="item"><a class="enlace" href="habitaciones.php">Habitaciones</a></li>
                    <li class="item"><a class="enlace" href="servicios.html">Servicios</a></li>
                    <li class="item"><a class="enlace" href="contactos.html">Contactos</a></li>
                </ul><!--cierre navigation-->

            </div><!--cierre flex-navbar-->
        </div><!--cierre container-->
    </nav><!--cierre navbar-->
         
    <!--Fondo Header-->
    <header class="fondo paralax">
    </header><!--cierre header-->



    <!--Cuerpo del Programa-->
<main class="cuerpo">

    <section class="bienvenidos">
          <div class="container">
               <h1 class="title-bienvenido centro ">Bienvenido</h1>

                <div class="flex-bienvenido ">

                  <div class="mensaje">
                      <h2 class="titleh2-bienvenido centro">Hotel El Paraiso</h2>
                      <p class="parraf-bienvenida centro">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum repellendus porro aperiam similique iure maiores tempore. Laborum, consequatur animi! Dolore id quos enim porro sapiente iste deleniti voluptatibus quis rerum?</p>
                      <a class="boton" href="">Leer Mas ></a>
                  </div><!--Cierre mensaje-->

                  <div class="video">
                    <video muted autoplay loop>
                        <source src="video/video.mp4" type="video/mp4">
                    </video>
                    <div class="mejorlugar-video">
                        <p class="centro title-mejorlugar">El Mejor Lugar</p>
                    </div>
                  </div><!--cierre video-->

                </div><!--Cierre flex-bienvenido-->
        </div><!--cierre container-->
    </section><!--cierre Bienvenido-->


    <!--servicios de la empresa-->
    <section class="servicios">
        <div class="container">
            <h2 class="title-bienvenido centro ">Servicios que Brindamos</h2>

            <div class="grid-servicios margin_top_bottom">
            
                 <div class="servicios relative">
                   <a class="servicio-enlace" href="php/promocion.php">
                       <img src="img/wifi.jpg" alt="Promocion 1">
                   </a>
                  
                     <div class="descrip-servicio">
                        <h3 class="title-servicio">Red Wifi Gratis las 24 hrs</h3>
                        <p class="pf-servicio">
                         <span>Contraeña: Pedir en Area Recepcion</span>
                        </p>
                     </div><!--Cierre costo-->
                 </div><!--Cierre promocion-->


                
                <div class="servicios relative">
                     <a class="servicio-enlace" href="php/promocion.php">
                     <img src="img/cafe.jpg" alt="Promocion 1">
                     </a>
               
                   <div class="descrip-servicio">
                      <h3 class="title-servicio centro">Area de Cafeteria</h3>
                      <p class="pf-servicio">
                       <span>Desayuno sin costo brindado por la compañia</span>
                      </p>
                   </div><!--Cierre costo-->
                </div><!--Cierre promocion-->


                <div class="servicios relative">
                     <a class="servicio-enlace" href="php/promocion.php">
                     <img src="img/lavanderia.jpg" alt="Promocion 1">
                     </a> 
               
                     <div class="descrip-servicio">
                       <h3 class="title-servicio centro">Area de Lavanderia</h3> 
                       <p class="pf-servicio">
                         <span>Horario Disponible: 9:00 am - 17:00 pm</span>
                       </p>
                     </div><!--Cierre costo-->  
                </div><!--Cierre promocion-->


                <div class="servicios relative">
                     <a class="servicio-enlace" href="php/promocion.php">
                     <img src="img/telefono.jpg" alt="Promocion 1">
                     </a> 
                
                     <div class="descrip-servicio">
                       <h3 class="title-servicio centro">Servicios Telefonico Gratis</h3>
                       <p class="pf-servicio">
                        <span>Cada habitacion dispone de un telefono personal para quejas o sugerencias del cliente hospedado</span>
                       </p>
                     </div><!--Cierre costo-->
                </div><!--Cierre promocion-->
            </div><!--cierre grid promociones-->
      
        </div><!--cierre container-->
    </section><!--cierre promociones-->
</main><!--Cierre cuerpo-->



    <section class="fondo-reservas-info paralax">
        <div class="container centro">
           <div class="info-flex centro">
               <div class="descrip-info">
                 <h5 class="title-bienvenido centro">Ven y Has tu Reservar en uno de los Mejores Hoteles de Lima</h5>
                 <p class="parrafo-info">Para mas Info contactanos</p>
               </div>
           </div><!--Cierre info-flex-->
               <a class="boton" href="info.html" target="_blank">Leer Mas ></a>
        </div><!--Cierre container-->
    </section><!--cierre fondo-reservas-info-->



    <section class="nuestras-habitaciones">

    <div class="container">
      <h3 class="centro">Nuestras Habitaciones</h3>
        <div class="flex-habitaciones margin_top_bottom">       
            <div class="habitacion">
              <input class="caja" type="text" name="codigo" value="<?php echo $fila_personal['IdT_habitacion']?>">
              <img src="data:image/jpg;base64,<?= base64_encode($fila_personal['foto_principal']);?>" alt="fOTO Principal">
               <h4 class="titulo-habitacio">Habitacion Simple</h4>
               <ul class="nav-habitacion">
                  <li><span class="sig-rojo">></span> Cama: <span class="descrip-habita">Tamaño de 1 plaza y 1/2</span></li>
                  <li><span class="sig-rojo">></span> Personas: <span class="descrip-habita"> 1 Persona</span></li>
                  <li><span class="sig-rojo">></span> Area: <span class="descrip-habita"> 29 m^2</span></li>
               </ul><!--cierre nav-habitacion-->
               <a class="boton" href="php/habitacionReserva.php?elegido=<?=$fila_personal['IdT_habitacion']?>">SABER MAS <span class="sig-rojo"></span></a>
            </div><!--cierre habitacion-->



            <div class="habitacion">
              <input class="caja" type="text" name="codigo" value="<?php echo $fila_matri['IdT_habitacion']?>">
              <img src="data:image/jpg;base64,<?= base64_encode($fila_matri['foto_principal']);?>" alt="fOTO Principal">
                <h4 class="titulo-habitacion">Habitacion Matrimonial</h4>
                <ul class="nav-habitacion">
                   <li><span class="sig-rojo">></span>Cama: <span class="descrip-habita">Tamaño 2 plazas</span></li>
                   <li><span class="sig-rojo">></span>Personas: <span class="descrip-habita">2 Peronas</span></li>
                   <li><span class="sig-rojo">></span>Area: <span class="descrip-habita">45 m^2</span></li>
                </ul><!--cierre nav-habitacion-->
                <a class="boton" href="php/habitacionReserva.php?elegido=<?=$fila_matri['IdT_habitacion']?>">SABER MAS <span class="sig-rojo"></span></a>
            </div><!--cierre habitacion-->



            <div class="habitacion">
               <input class="caja" type="text" name="codigo" value="<?php echo $fila_fami['IdT_habitacion']?>">
               <img src="data:image/jpg;base64,<?= base64_encode($fila_fami['foto_principal']);?>" alt="fOTO Principal">
                <h4 class="titulo-habitacion">Habitacion Familiar</h4>
                <ul class="nav-habitacion">
                   <li><span class="sig-rojo">></span>Cama: <span class="descrip-habita">2 camas,Tamaño 1 plaza y 1/2</span></li>
                   <li><span class="sig-rojo">></span>Personas: <span class="descrip-habita">Maximo 5 personas</span></li>
                   <li><span class="sig-rojo">></span>Area: <span class="descrip-habita"> 60 m^2</span></li>
                </ul><!--cierre nav-habitacion-->
                <a class="boton" href="php/habitacionReserva.php?elegido=<?=$fila_fami['IdT_habitacion']?>">SABER MAS <span class="sig-rojo"></span></a>
            </div><!--cierre habitacion-->
        </div><!--Cierre flex-habitacion-->
    </div><!--cierre container-->
    </section><!--Cierre nuesras-habitaciones-->



    <!--Testimoniales-->
    <section class="testimoniales">
        <div class="container">
            <h4 class="title-testimonial centro title-bienvenido">Nuestro Clientes Opinan</h4>
            <div class="flex-testimoniales margin_top_bottom">
              
                <article class="testimonial centro">
                   <h5 class="title-bienvenido">Testimonios</h5>  
                   <p class=" parf-testimonio">Calido y muy acogedor sus hatiaciones ademas de la buena atencion y sevicios que brindar , todo muy ordenado y limpio de lo mejor ,les invito a reservar sera un bonito Recuerdo</p>
                   <p class="">By: Rosa Mercedes Pino</p>
                    <img src="img/testimoniales.jpg" alt="Foto del Cliente Redactado">
                </article>
    
                <article class="testimonial centro">
                    <h5 class="title-bienvenido">Preguntas </h5>
                </article><!--cierre preguntas-frecuentes-->
            </div><!--Cierre flex-testimoniales-->
        </div><!--cierre container-->
    </section><!--cierre testimoniales-->



    <!--pie de pagina o footer-->
    <footer class="footer">
        <div class="container">
            <div class="flex-footer margin_top_bottom">
                <div class="servicio">
                    <h5 class="centro">SERVICIO GRATUITO</h5>
                    <ul class="nav-servicio">
                        <li class="item-footer">Spa y Cortes</li>
                        <li class="item-footer">Atencion Medica las 24-Hrs</li>
                        <li class="item-footer">Gimnasio por las tardes</li>
                        <li class="item-footer">Piscina</li>
                    </ul>
                </div>
            

                <div class="servicio">
                    <h5 class="centro">Terminos y Condiciones</h5>
                    <ul class="nav-servicio">
                        <li class="item-footer">Ser ordenado</li>
                        <li class="item-footer">Ser Educado con los huespedes</li>
                        <li class="item-footer">Respetar al Personal del Servicio</li>
                    </ul>
                </div>


                <div class="servicio">
                    <!--display block-->
                    <h5 class="centro">Contactos</h5>
                    <div class="flex-servicio-contacto">
                        <div class="contacto">
                            <img src="img/ubitcation.png" alt="Icono Ubicacion">
                            <a class="direccion-contacto" href="contactos.html"><p>Av los Jazmines331 mz 19 lt 9</p></a>
                        </div>
                        <div class="contacto">
                            <img src="img/whatsapp.png" alt="Icono Whasaap">
                            <p>999 999 999</p>
                        </div>
                        <div class="contacto">
                            <img src="img/phone.png" alt="icono Telefono">
                            <p>5679765</p>
                        </div>
                        <div class="contacto">
                            <img src="img/email.png" alt="Icono Email">
                            <p>@micorreo.tipo</p>
                        </div>
                    </div>

                </div>
    

                <div class="servicio">
                    <h5 class="centro">Lgotipo</h5>
                   <div class="logo-footer">
                       <img src="img/logo.png" alt="">
                   </div>
                </div>
           </div><!--cierre flex-footer-->
        </div><!--cierre container-->


           <div class="derechos-reservados">
               <div class="msj-derechos">
                <p>Copyright</p>
                <p>Creado <date>11/04/2020</date></p>
                <p>Hidalgo rojas-alonos Zambrano</p>
               </div>    
           </div>
     
    </footer><!--cierre footer-->


</body>
</html>