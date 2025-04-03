<!DOCTYPE html>
<html>
  <head>
    <title>Renacer contigo</title>
    <style>
		body {
			background-color: silver; /* Color del fondo */
			font-family: Serif;
			text-align: center; /* Centrado de todo B) */
		}
			.logo-container {  /*Parte del menu */
			background-color: white; /*Color del fondo*/
		}
		img {
			margin-right: 20px; /* Espacio a la derecha de las imágenes */
		}
		h1 {
			color: black;
			text-align: center;
		}
    </style>
	
  </head>
  <body>
    <div class="logo-container">
      <?php
		//Logo
        echo '<img src="logo.png" alt="Logo" width="250" height="100">';
        echo '<br>';
		
		//Home
        echo '<a href="https://www.google.com">'; // URL de Home
        echo '<img src="https://images.icon-icons.com/2249/PNG/512/home_circle_outline_icon_139029.png" alt="Home" width="50" height="50">';
        echo '</a>';
		
		//Contactanos
        echo '<a href="https://www.youtube.com/watch?v=k_ERtBrlSsQ&list=RDMMinb0qjDWeHQ&index=3">'; // URL de contactanos
        echo '<img src="https://medameris.com/wp-content/uploads/2018/11/call-medameris-1-300x300.png" alt="Contactanos" width="40" height="40">';
        echo '</a>';
      ?>
    </div>
  </body>
</html>
