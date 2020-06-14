<?php 

 include_once('LIBRERIA.php');
 $codigo = $_POST['codigo'];/*dato capturado de habitacionReserva.php*/
 $fecha_inicio = $_POST['fecha_inicio'];/*dato capturado de habitacionReserva.php*/
 $fecha_fin = $_POST['fecha_salida'];/*dato capturado de habitacionReserva.php*/

 /*consulta para traer datos con el dato capturado de la pagina habitacionReserva.php*/
 $sql = "SELECT * FROM T_habitacion where IdT_habitacion = '$codigo' ";
 $resultado = CARGAR_DATOS_CAMPO($sql);

//  echo "el resultado es".var_dump($resultado);

//  operacion de retas de fecha
    $final_dia = null;
    $inicio_f = strtotime($fecha_inicio);
    $final_f = strtotime($fecha_fin);
    $diff =  $final_f - $inicio_f;
    $final_dia = round($diff / 86400);
    $monto_total = (90*$final_dia); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">  -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&family=Comic+Neue&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <!--IMAGEN DE LA WEB-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

</head>

<body>
    <!--Parte Navbar-->
    <nav class="navbar">
        <div class="container">
            <div class="flex-navbar">

                <div class="logo">
                    <img src="../img/logo.png" alt="Imagen logo">
                </div><!--cierre logo-->
  
                <ul class="navigation">
                    <li class="item"><a class="enlace" href="principal.html">Inicio</a></li>
                    <li class="item"><a class="enlace" href="nosotros.html">Nosotros</a></li>
                    <li class="item"><a class="enlace" href="habitaciones.php">Habitaciones</a></li>
                    <li class="item"><a class="enlace" href="servicios.html">Servicios</a></li>
                    <li class="item"><a class="enlace" href="contactos.html">Contactos</a></li>
                </ul><!--cierre navigation-->

            </div><!--cierre flex-navbar-->
        </div><!--cierre container-->
    </nav><!--cierre navbar-->
         
 


    <!--Cuerpo del Programa-->

    <main class="habitacion-huesped">
        <div class="container">
            <h1 class="centro title-reservacion">Datos de Tu Reservacion</h1>
            <div class="flex-habitacion">
               
               
                <form class="form-reservacion" action="AplicarReserva.php" method="POST">
                    <div class="form-habitacion">
                        <input type="text" name="codigo" value="<?php echo $resultado['IdT_habitacion']?>"><!--codigo de la habitacion oculto-->
                        <div class="flex-cajas-h">
                            <div class="caja-h">
                                <label class="centro" for="">Fecha De Inicio Hospedaje</label>
                                <input type="text" name="fecha_inicio" value="<?php echo $fecha_inicio ?>">
                            </div>
        
                            <div class="caja-h">
                                <label class="centro" for="">Fecha De Fin Hospedaje</label>
                                <input type="text" name="fecha_salida" value="<?php echo $fecha_fin ?>">
                            </div>

                            <div class="caja-h">
                                <label class="centro" for="">Dias Totales</label>
                                <input type="text" value="<?php echo $final_dia ?>">
                            </div>

                            <div class="caja-h">
                                <label class="centro" for="">Monto Total</label>
                                <input type="text" value="<?php echo $monto_total ?>">
                            </div>
                        </div>
                   
                        <div class="caja-h espacio-arriba">
                          <input class="btn" type="submit" name="" value="Aplicar Reserva" id="">
                        </div>
                    </div><!--cierre caja formulario-->
                </form>
              

                <div class="img-habitacion relative">
                    
                     <img src="data:image/jpg;base64,<?= base64_encode($resultado['foto_principal']);?>" alt="Imagen de la Habitacion General">
                    <!-- <img src="../img/contacto.jpg" alt=""> -->
                
                    <div class="caja-precio absolute">
                        <label class="centro title-label" for="">Costo Habitacion</label>
                        <p class="pf-precio"><span>90 S/</span></p>
                    </div>
                </div>

            </div><!--cierre flex-habitacion-->
        </div><!--cierre container-->
    </main>

   
   
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
                            <img src="../img/ubitcation.png" alt="Icono Ubicacion">
                            <a class="direccion-contacto" href="contactos.html"><p>Av los Jazmines331 mz 19 lt 9</p></a>
                        </div>
                        <div class="contacto">
                            <img src="../img/whatsapp.png" alt="Icono Whasaap">
                            <p>999 999 999</p>
                        </div>
                        <div class="contacto">
                            <img src="../img/phone.png" alt="icono Telefono">
                            <p>5679765</p>
                        </div>
                        <div class="contacto">
                            <img src="../img/email.png" alt="Icono Email">
                            <p>@micorreo.tipo</p>
                        </div>
                    </div>

                </div>
    

                <div class="servicio">
                    <h5 class="centro">Lgotipo</h5>
                   <div class="logo-footer">
                       <img src="../img/logo.png" alt="">
                   </div>
                </div>
           </div><!--cierre flex-footer-->
        </div><!--cierre container-->


           <div class="derechos-reservados">
               <div class="msj-derechos">
                <p>Copyright</p>
                <p>Creado <date>11/04/2020</date></p>
               </div>    
           </div>
    </footer><!--cierre footer-->
</body>
</html>