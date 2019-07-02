<?php include("menu.php");?>

	<link rel="stylesheet" type="text/css" href="css/titulos.css">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/contacto.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">

    
	<div class="cuerpo">
		<h3 class="lines-effect"> Contactos</h3>	
	</div>
	
	<style>
		body{
			background-image: url(quienesSomos/fondo3.jpeg);
			background-repeat: no-repeat;
			background-size: 100vw 100vh;
			background-attachment: fixed;

		}
	</style>
	<br><br><br><br>
    <form action="enviar.php" method="post" class="form_contact">
        <h2>Enviar Mensaje</h2>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="correo" placeholder="Correo" required>
        <input type="text" name="telefono" placeholder="Teléfono">
        <textarea name="mensaje" placeholder="Escriba aquí el mensaje" required></textarea>
        <input type="submit" value="Enviar" id="boton">

    </form>
    
    <br><br><br><br>

    <section id="info">
         <h4 class="ruta"><img src="ruta.png" alt=""> Nos encontramos en el Valle de Ujarras, Piedra Azul, Sántigo, Paraiso, Costa Rica<img src="costa-rica.png" alt=""></h4>
        <div class="contenedor">
          
          <p>150 m Este de la Iglesia Católica de Piedra azul, carretera a Santiago.<br></p>
            
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1114.51825945015!2d-83.80843917078636!3d9.860076320854475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOcKwNTEnMzYuMyJOIDgzwrA0OCcyOC40Ilc!5e1!3m2!1ses-419!2scr!4v1562044915468!5m2!1ses-419!2scr" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
           
            <div class="info1">
                <img class="imagenes" src="quienesSomos/mujer.jpg" alt="">
                <h4>&emsp;&emsp; <strong>Adriana Morales Brenes</strong> <br>&emsp;Gerente General<br><br> <img class="inconos" src="incMenu/telefono.png">(+506) 8644-7167<br> &emsp;<img class="inconos" src="incMenu/gmail.png"> productosagricolasevan1711@gmail.com&emsp;</h4>
                
                
            </div>
            <div class="info1">
                <div class="mario">
                
                <img class="imagenes" src="quienesSomos/hombre.png" alt="">
                <h4>&emsp;&emsp; <strong>Mario Bustos García</strong> <br>  &emsp;&emsp;Gerente <br><br> <img class="inconos" src="incMenu/telefono.png">(+506) 8793-8888<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <img class="inconos" src="incMenu/gmail.png"> abriruno@gmail.com&emsp;&emsp;&emsp;&emsp;&emsp;</h4>
                </div>    
            </div>
        </div>
    
    </section>

<footer>
    <div class="contenedor">
        <p class="copy" style="font-size:small">&emsp;&emsp;&emsp;&emsp;Copyright &copy; 2018 Productos Agrícolas Evan</p>
        <div class="social">
            <a class="correo" href="contactos.php"><img src="incMenu/gmail.png"></a>
            <a class="facebook" href="https://www.facebook.com/ProductosAgricolasEvan/"><img src="incMenu/facebook.png"></a>
        </div>
    </div>
    <div class="developer">
        <p class="deve" style="font-size:small">&emsp; Desarrollo Web<br>&emsp;Stephanie Delgado</p>
        <img class="log" src="incMenu/logoSD.png">
        <div class="social">
            <a class="correo" href="correoDe.php"><img src="incMenu/google.png"></a>
        </div>
    </div>
</footer>

