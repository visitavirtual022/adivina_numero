<?php




$opcion = $_POST['submit'] ?? "Por la url";
switch ($opcion){
    case "Empezar":
        $min=0;
        $intentos = $_POST['intentos'];
        $max = 2** $intentos;
        $numero_propuesto=($min+$max)/2;
        $jugada=1;
        break;
    case "Jugar":
        $min= $_POST['min'];
        $max= $_POST ['max'];
        $intentos = $_POST['intentos'];

        break;
    case "Reiniciar":
        break;
    case "Volver":
        break;
}
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juego de adivina un número</title>
</head>
<body style="width: 60%;float:left;margin-left: 20%; ">

<h3></h3>
<fieldset style="width:40%;background:bisque ">
    <legend>Empieza el juego</legend>
    <form action="jugar.php" method="POST" >
        <h2> El n&uacutemero es  <span style="color: blue"><?=$numero_propuesto=></span></h2>
        <h5> Jugada  <span style="color: blue"><?=$jugada></span> </h5>
        <h5> Actualmente te quedan   <span style="color: blue"><?=$intentos-$jugada=></span> intentos </h5>

        <input type="hidden" value="10" name="intentos">
        <fieldset>
            <legend>Indica c&oacutemo es el n&uacutemero qu&eacute has pensado</legend>
            <input type="radio" name="rtdo" checked value='>'> Mayor<br />
            <input type="radio" name="rtdo" value='<'> Menor<br />
            <input type="radio" name="rtdo" value='='> Igual<br />
        </fieldset>
        <hr />
        <input type="submit" value="Jugar" name="submit" >
        <input type="submit" value="Reiniciar" name="submit"  >
        <input type="submit" value="Volver" name="submit"  >
        <input type="submit" value="<?=$max=>" name="max"  >
        <input type="submit" value="<?=$min=>" name="min"  >
        <input type="submit" value="<?=$numero_propuesto=>" name="numero_propuesto"  >
        <input type="submit" value="<?=$intentos=>" name="intentos"  >
    </form>
</fieldset>

</body>
</html>