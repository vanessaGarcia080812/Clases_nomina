<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="estilos.css"> -->
</head>
<body>
    <section class="section">
        <div class="wrap">
            <form action="../controlador/controladorRegistrarEmpleado.php" method="GET">
                <label for="numeroidentificacione">Número de Identificación</label>    
                <input type="text" name="numeroidentificacione" id="numeroidentificacione" class="form-control">
                
                <label for="nombre1">Primer Nombre</label>    
                <input type="text" name="nombre1" id="nombre1" class="form-control">
                
                <label for="apellido1">Primer Apellido</label>    
                <input type="text" name="apellido1" id="apellido1" class="form-control">
                
                <label for="estado_civile">Estado Civil</label>    
                <input type="text" name="estado_civile" id="estado_civile" class="form-control">
                
                <label for="tipodoce">Tipo de Documento</label>    
                <input type="text" name="tipodoce" id="tipodoce" class="form-control">
                
                <label for="correoe">Correo Electrónico</label>    
                <input type="email" name="correoe" id="correoe" class="form-control">
                
                <label for="generoe">Género</label>    
                <input type="text" name="generoe" id="generoe" class="form-control">
                
                <label for="celulare">Celular</label>    
                <input type="text" name="celulare" id="celulare" class="form-control">
                
                <label for="fecha_nacimiento">Fecha de Nacimiento</label>    
                <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control">
                
                <label for="fechaexpdocu">Fecha de Expedición del Documento</label>    
                <input type="text" name="fechaexpdocu" id="fechaexpdocu" class="form-control">
                
                <input type="submit" name="boton "value="Insertar Registro" class="btn btn-primary">
            </form>
        </div>
    </section>         
</body>
</html>