<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="estilos.css"> -->
    
    <title>Listar</title>    
</head>
<body>
<section class="section">
    <div class="div">
    <table class="table">
            <caption>LISTADO DE APRENDICES</caption>
            <thead>
                <tr>
                    <th>NOMBRE COMPLETO</th>
                    <th>DOCUMENTO</th>
                    <th>ESTADO CIVIL</th>
                    <th>TIPO DOCUMENTO</th>
                    <th>CORREO</th>
                    <th>GÉNERO</th>
                    <th>CELULAR</th>
                    <th>FECHA NACIMIENTO</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($Empleado as $a) {
                        echo "<tr>";
                        echo "<td>" . $a->getnombre1() . " " . $a->getapellido1() . "</td>";
                        echo "<td>" . $a->getnumeroidentificacione() . "</td>";
                        echo "<td>" . $a->estado_civilE() . "</td>";
                        echo "<td>" . $a->tipodocE() . "</td>";
                        echo "<td>" . $a->correoE() . "</td>";
                        echo "<td>" . $a->generoE() . "</td>";
                        echo "<td>" . $a->celularE() . "</td>";
                        echo "<td>" . $a->fecha_nacimiento() . "</td>";
                        echo "</tr>";                   
                    }
                ?>
            </tbody>
    </table>
    </div>
    <section class="section">
</body>

</html>