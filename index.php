<!DOCTYPE html>
<html>

<head>
<title>Cotizador</title>
<LINK REL="STYLESHEET" TYPE= "TEXT/CSS" HREF="estilo.css" >
</head>
<body>







<header>
<div clas="container">
<nav>
<ul>
<li><A>Catalogo</A></li>
<li><A>Cotiza</A></li>
<li><A>Contacto</A></li>

</ul>
</nav>
</div>

</header>

<? php
session_start();
?>
<form action="validar.php" method="post" enctype="application/x-www-form-urlencoded">
<label for="caja1"><p>Nombre de usuario</p>
<p><input type="text" id="caja1" name="usuario" placeholder="usuario" required></p>

</label>
<label for="caja2"><p>Contraseña</p>
<p><input type="password" id="caja2" name="password" placeholder="contraseña" required></p>
</label>

<input type="submit" value="Iniciar sesion">
</form>


</body>
</html>
