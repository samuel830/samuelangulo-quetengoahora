<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horarios 2º DAW</title>
</head>
<body>
    <div>
    <h1 align='center'>Horarios de los 2º El Rincón</h1>
    </div>
    
    <div>
        <form action="horario.php" method="get" align='center'>
            <label for="horarios">Elige un horario que visualizar:</label>
            <select  name="horarios" id="horarios">
            <optgroup label="Horarios Alumnos">
            <option value="2dawAlum">2º DAW [Desarrollo de aplicaciones Web]</option>
            <option value="2damAlum">2º DAM [Desarrollo de aplicaciones Multiplataformas]</option>
            </optgroup>
            <optgroup label="Horarios Profesores">
            <option value="SerRam">SerRam [Desarrollo web en entorno servidor]</option>
            <option value="JosIgn">JosIgn [Acceso a datos]</option>
            </optgroup>
            </select>
            <input type="submit" value="Ver" name>
        </form>
    </div>
    
</body>
</html>