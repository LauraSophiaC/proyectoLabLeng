<!DOCTYPE html>
<html lang="en">
<head>
  <h1 ></h1>
  <nav> <ul class="menu-general center-block">
<li class="col-md-2 col-sm-2 col-xs-12 btn"><a href="FrmUsuario.php">Inicio</a></li>
<li class="col-md-2 col-sm-2 col-xs-12 btn"><a href="gestorC.php">Gestor contenido</a></li>
<li class="col-md-2 col-sm-2 col-xs-12 btn"><a href="#">Contáctanos</a></li>
<li class="col-md-2 col-sm-2 col-xs-12 btn"><a href="#">Acerca de</a></li>
<li class="col-md-2 col-sm-2 col-xs-12 btn"><a href="cerrarSesion.php">Cerrar sesión</a></li>
</ul>
</nav>
  <title>Los tres cerditos</title>
  <style >
    .menu-general {
     margin: 8px;
     padding: 0;
     text-align: center;
     }

    .menu-general li{
    list-style-type: none;
    color: dark;
    font-size: 1.1em;
    background: #D6784A;
    text-align: center;
    padding: 7px;
    }

    nav > .menu-general a {
    color: white;
    -moz-border-radius: none;
    -webkit-border-radius: none;
    }

    nav > .menu-general a:hover {
    color: dark;
    font-family: verdana;
    -moz-border-radius: none;
    -webkit-border-radius: none;
    }

    nav > .menu-general a:link {
    color: dark;
    font-family: verdana;
    text-decoration: none;
    -moz-border-radius: none;
    -webkit-border-radius: none;
    }

    nav > .menu-general a:visited {
    color: dark;
    font-family: verdana;
    -moz-border-radius: none;
    -webkit-border-radius: none;
    }

    .flex-center{
    display: flex;
    justify-content:center;
    align-items: center;

    }

      .imagen, .texto{
      width:100%;
      height:auto;
      position:relative;
      display:inline;
      }
      .texto{
      height:auto;
      text-align:center
      }
      .Unidad{
      background-color: #DEBDBC;
      text-align:center
      }
      .Tema{
      background-color: #DEABA6;
      text-align:center
      }
      table {
        border-collapse: collapse;
        border-radius: 1em;
        overflow: hidden;
        align-items: center;
      }

      th, td {
        padding: 1em;
        background: #ddd;
        border-bottom: 2px solid white; 
      }

      .css-mine {
        margin-top: 2em;
        clear: both;
      }

      body {
        margin: 1.1em;
      }

      input[type="text"] {
        font-size: 15px/24px;
        font-family: 'Lat', sans-serif, Arial;
        width: 50%;
        color: #000000;
        background: none;
        letter-spacing: 1px;
        box-sizing: border-box;

      }

      input[type="submit"] {
        padding: 10px 25px;
        border: none;
        text-align: center;
        background-color: #b35a0b;
        color: white;
        display: block;
        margin: 0 auto;
        border: 1px solid black;

      }

      .effect1 {

        border: none;
        padding: 7px 10px;
        border-bottom: 1px solid #804040;
        transition: 0.4s;
      }

      :focus{outline: none;}

      .effect1:focus {
        padding: 15px 15px; 
        

      }

      #main-container {
        width: 70%;
        background-color:#ddd  ;
        margin: 10px auto;
        padding: 10px;

      }

      #main-container ul {
        
        list-style: none;
        
      }



      #main-container li {
        
        text-align: center;	
        
        margin: 10px auto;

        position: relative;
      }

      .break {
        padding: 0;
        margin: 10px 0;
        background-color: FireBrick;
        height: 10px;

      }

      .title {
        cursor: pointer;
        font-size: 1.5em;
        line-height: 2em;
        background-color: Peru;
        border-bottom: 1px solid #6e6e6e;
        border-top: 1px solid white;
        letter-spacing: 1px;
      }

      .fields {
        margin: 0;
        padding: 1em 0;

      }


      .hide {
        display: none;
      }

      hr {
        display: block;
        width: 200px;
        margin-bottom: 20px;
        background-color: #D6784A;
        height: 2px;
        
      }

      .add-border {
        position: absolute;
        
        left: 10%;
        width: 80%;
        height: 0;
        transition: 0.5s;

      }

      input:focus + .add-border {
      height: 36px; border: 2px solid #531c37;


      }


  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="style3Cerditos.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container-fluid border-3 w-100 p-2 bg-dark text-white text-center">
  <h1 class="display-1" >CASA DE PAJA</h1>
  <p>Bienvenido!</p> 
</div>

<div class="Unidad">
  <h1 class="Unidad" >UNIDAD #1</h1>

</div>
<div class="Tema">
    <h2 class="Tema">Tema: Nacionalidades y gentilicios </h2>
    <p>1. Escucha y pronuncia cada país con el apoyo del profesor, luego mira el video para reforzar la pronunciación.</p>
</div>

<div align="center"> 
<img src="../Nacionalidades.png" width="400" height="500" >
</div>

<div align="center">
<iframe width="560" height="315" src="https://www.youtube.com/embed/tvciVQlgLNo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<div class="Tema">
    <h2 class="Tema">Tema: Nacionalidades y gentilicios </h2>
    <p>2. Observa el cuadro y completa los espacios </p>
</div>

<div align="center">
<table class="default">
  <tr>
    <td>Portugal</td>
    <td>Suiza</td>
    <td>Australia</td>
    <td>Alemania</td>
  </tr>
  <tr>
    <td>Holandes</td>
    <td>Frances</td>
    <td>Italiano</td>
    <td>Belga</td>
  </tr>
  <tr>
    <td>Peru</td>
    <td>Colombiano</td>
    <td>Argentina</td>
    <td>Brasil</td>
  </tr>
  <tr>
    <td>Mexicano</td>
    <td>Estadounidense</td>
    <td>Inglaterra</td>
    <td>Dinamarca</td>
  </tr>
</table>
</div>

<div id="main-container" >
	
	<form name="formone" onsubmit="return allanswers()">
		<ul>
			<li class="title"> Nacionalidades</li>
			<li class="fields">
				<label>1. Espanol</label><br><br>
				<input type="text" value="Espana" class="req effect1" id="first_name"> 
	<span class="add-border"></span>
				<hr>

				<label>2. Potugues</label><br><br>
				<input type="text" class="req effect1" id="first_name" placeholder="Escribe tu respuesta"> 
<span class="add-border"></span>
				<hr>

				<label>3. Francia</label><br><br>
				<input type="text" class="req effect1" id="first_name" placeholder="Escribe tu respuesta"> 
<span class="add-border"></span>
				<hr>

				<label>4. Aleman</label><br><br>
				<input type="text" class="req effect1" id="first_name" placeholder="Escribe tu respuesta"> 
<span class="add-border"></span>
				<hr>

				<label>5. Italia</label><br><br>
				<input type="text" class="req effect1" id="first_name" placeholder="Escribe tu respuesta"> 
<span class="add-border"></span>
				<hr>

				<label>6. Suizo</label><br><br>
				<input type="text" class="req effect1" id="first_name" placeholder="Escribe tu respuesta"> 
<span class="add-border"></span>
				<hr>

				<label>7. Austriaco</label><br><br>
				<input type="text" class="req effect1" id="first_name" placeholder="Escribe tu respuesta"> 
<span class="add-border"></span>
				<hr>

				<label>8. Holanda</label><br><br>
				<input type="text" class="req effect1" id="first_name" placeholder="Escribe tu respuesta"> 
<span class="add-border"></span>
				<hr>

				<label>9. Danes</label><br><br>
				<input type="text" class="req effect1" id="first_name" placeholder="Escribe tu respuesta"> 
<span class="add-border"></span>
				<hr>

				<label>10. Belgica</label><br><br>
				<input type="text" class="req effect1" id="first_name" placeholder="Escribe tu respuesta"> 
<span class="add-border"></span>
				<hr>

        <label>11. Peruano</label><br><br>
				<input type="text" class="req effect1" id="first_name" placeholder="Escribe tu respuesta"> 
<span class="add-border"></span>
				<hr>

        <label>12. Colombia</label><br><br>
				<input type="text" class="req effect1" id="first_name" placeholder="Escribe tu respuesta"> 
<span class="add-border"></span>
				<hr>

        <label>13. Argentino</label><br><br>
				<input type="text" class="req effect1" id="first_name" placeholder="Escribe tu respuesta"> 
<span class="add-border"></span>
				<hr>
			 

        <label>14. Mexico</label><br><br>
				<input type="text" class="req effect1" id="first_name" placeholder="Escribe tu respuesta"> 
<span class="add-border"></span>
				<hr>       

        <label>15. Brasileno</label><br><br>
				<input type="text" class="req effect1" id="first_name" placeholder="Escribe tu respuesta"> 
<span class="add-border"></span>
				<hr>

        <label>16. Estados Unidos</label><br><br>
				<input type="text" class="req effect1" id="first_name" placeholder="Escribe tu respuesta"> 
<span class="add-border"></span>
				<hr>

        <label>17. Ingles</label><br><br>
				<input type="text" class="req effect1" id="first_name" placeholder="Escribe tu respuesta"> 
<span class="add-border"></span>
				<hr>
     </li>

		</ul>
		<input type="submit" value="Submit Answers">
	</form>
	<div class="break"></div>
	<div id="answersone"></div>
  <script>
    function allanswers() {

    
    var score = 0;

    for(var i = 0; i < formone.elements.length; i++) {

    if(formone.elements[i].value.length == ''){
      
      alert('Completa todos los espacios!!!');

      return false;

      }

      }

    var answers = ['Espana', 'Portugal' , 'Frances', 'Alemania', 'Italiano', "Suiza", 'Australia', 'Holandes', 'Belga', 'Peru', 'Colombiano', 'Argentina', 'Mexicano', 'Brasil' ,'Estadounidense', 'Inglaterra' ];

    for(i = 0; i < formone.elements.length-1 ; i++ ) {

      if(formone.elements[i].value.toLowerCase() == answers[i]) {
          score++
        //alert("YOU wrote good");

      }

    
      }

    

    function writean() {
        var allstring = '<h1>Buenas Respuestas</h1>' + '<h2>Tu puntaje es: ' + score + '</h2>';
        
        for(i = 0; i <= formone.elements.length-2; i++){
          allstring += '<h3>' + answers[i] + '</h3>';
          console.log(allstring);

        }
        document.getElementById("answersone").innerHTML = allstring;
      }

    writean();
    return false;
    
    
      
  }  
  </script>
	</div>


  

</body>
</html>