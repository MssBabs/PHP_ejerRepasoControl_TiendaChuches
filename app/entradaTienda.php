<form action="" name="entradaTienda" method="GET">
    <h3>Bienvenido a Mss.CandyBabs</h3>
    <p>Es la visita numero: <?= $_COOKIE["numVisitas"] ?></p>

    <p>Introduzca sus datos:</p>
    <label>Nombre: <input type="text" name="nombUsu"></label><br/>

    <input type="submit" name="orden" value="Entrar">
</form>