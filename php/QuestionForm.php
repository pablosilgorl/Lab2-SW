<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
    	<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
    	<script type="text/javascript" src="../js/ValidateFieldsQuestion.js"></script>
		<form name='fquestion' id="fquestion" action="AddQuestion.php" method="post" onsubmit='return validate()'>
		    Email: <input type="text" id="email"><br>
		    Pregunta: <input type="text" id="pregunta"><br>
		    Opción Correcta: <input type="text" id="opcioncorrecta"><br>
		    Opción Incorrecta 1: <input type="text" id="opcionincorrecta1"><br>
		    Opción Incorrecta 2: <input type="text" id="opcionincorrecta2"><br>
		    Opción Incorrecta 3: <input type="text" id="opcionincorrecta3"><br>
		    Complejidad:
		    <select id="complejidad" id="operation">
			    <option id="baja" value=1>Baja</option>
			    <option id="media" value=2>Media</option>
			    <option id="alta" value=3>Alta</option>
			</select><br>
			Tema: <input type="text" id="tema"><br>
		    <input type="submit" value="Enviar">
		    
		</form>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
