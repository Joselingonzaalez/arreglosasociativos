<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Arreglos Asociativos</title>
</head>
<body bgcolor="pink">
    <main>
        <h1>Empleados de MELÍACAR C.A.</h1>

        <h2>Ingresa los datos de 3 empleados: </h2>

        <form id="formulario" name="formulario" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <h3>Empleado #1: </h3>
            <h4>Nombre: <input type="text" id="empleadoN1" name="empleadoN1"></h4>
            <h4>Apellido: <input type="text" id="empleadoA1" name="empleadoA1"></h4>
            <h4>Cédula: <input type="text" id="empleadoC1" name="empleadoC1"></h4>
            <h4>Sueldo: <input type="text" id="empleadoS1" name="empleadoS1"></h4>
            <h4>Departamento: <input type="text" id="empleadoD1" name="empleadoD1"></h4>
            <h4>Cargo: <input type="text" id="empleadoCA1" name="empleadoCA1"></h4>

            <h3>Empleado #2: </h3>
            <h4>Nombre: <input type="text" id="empleadoN2" name="empleadoN2"></h4>
            <h4>Apellido: <input type="text" id="empleadoA2" name="empleadoA2"></h4>
            <h4>Cédula: <input type="text" id="empleadoC2" name="empleadoC2"></h4>
            <h4>Sueldo: <input type="text" id="empleadoS2" name="empleadoS2"></h4>
            <h4>Departamento: <input type="text" id="empleadoD2" name="empleadoD2"></h4>
            <h4>Cargo: <input type="text" id="empleadoCA2" name="empleadoCA2"></h4>
            
            <h3>Empleado #3: </h3>
            <h4>Nombre: <input type="text" id="empleadoN3" name="empleadoN3"></h4>
            <h4>Apellido: <input type="text" id="empleadoA3" name="empleadoA3"></h4>
            <h4>Cédula: <input type="text" id="empleadoC3" name="empleadoC3"></h4>
            <h4>Sueldo: <input type="text" id="empleadoS3" name="empleadoS3"></h4>
            <h4>Departamento: <input type="text" id="empleadoD3" name="empleadoD3"></h4>
            <h4>Cargo: <input type="text" id="empleadoCA3" name="empleadoCA3"></h4>

            <input type="submit" id="enviar" name="btn" value="Enviar">
            <td><input type="reset" name="limpiar" value="Limpiar"></td>

        </form>


<?php

$empleados[0] = array ('Nombre'=>$_POST['empleadoN1'],
                       'apellido'=>$_POST['empleadoA1'],
                       'cedula'=>$_POST['empleadoC1'],
                       'sueldo'=>$_POST['empleadoS1'],
                       'departamento'=>$_POST['empleadoD1'],
                       'cargo'=>$_POST['empleadoCA1'],
);

$empleados[1] = array ('Nombre'=>$_POST['empleadoN2'],
                       'apellido'=>$_POST['empleadoA2'],
                       'cedula'=>$_POST['empleadoC2'],
                       'sueldo'=>$_POST['empleadoS2'],
                       'departamento'=>$_POST['empleadoD2'],
                       'cargo'=>$_POST['empleadoCA2'],
);

$empleados[2] = array ('Nombre'=>$_POST['empleadoN3'],
                       'apellido'=>$_POST['empleadoA3'],
                       'cedula'=>$_POST['empleadoC3'],
                       'sueldo'=>$_POST['empleadoS3'],
                       'departamento'=>$_POST['empleadoD3'],
                       'cargo'=>$_POST['empleadoCA3'],
);

    echo '<h1> REGISTRO DE EMPLEADOS DE MELÍACAR C.A. : </h1>';

        foreach ($empleados as $posicion) {
            echo '<h3>Nombre: ' . $posicion['Nombre'] . '</h3>';
            echo '<h3>Apellido: ' . $posicion['apellido'] . '</h3>';
            echo '<h3>Cédula: ' . $posicion['cedula'] . '</h3>';
            echo '<h3>Sueldo: ' . $posicion['sueldo'] . '</h3>';
            echo '<h3>Departamento: ' . $posicion['departamento'] . '</h3>';
            echo '<h3>Cargo: ' . $posicion['cargo'] . '</h3>';
            echo '<hr>';
        }
?>

<div class="contenedor-footer">
                <div class="content-foo">
            <h5 class="titulo-final">&copy; Melíacar 2022 | Joselin Gonzalez</h5>

</main>
</body>
</html>