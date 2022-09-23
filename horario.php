<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario</title>
</head>
<body>
<?php
    $horario = array(
        "Lunes" => array(
            "8:00 - 8:55" =>array(
                "Materia" => "EMR",
                "Docente" => "MarGarc",
                "Taller" => "G201"
            ),
            "8:55 - 9:50" =>array(
                "Materia" => "DSW",
                "Docente" => "SerRam",
                "Taller" => "G201"
            ),
            "9:50 - 10:45" =>array(
                "Materia" => "DSW",
                "Docente" => "SerRam",
                "Taller" => "G201"
            ),
            "11:15 - 12:10" =>array(
                "Materia" => "DEW",
                "Docente" => "MarRod",
                "Taller" => "G201"
            ),
            "12:10 - 13:05" =>array(
                "Materia" => "DEW",
                "Docente" => "MarRod",
                "Taller" => "G201"
            ),
            "13:05 - 14:00" =>array(
                "Materia" => "DEW",
                "Docente" => "MarRod",
                "Taller" => "G201"
            )
        ),
        "Martes" =>array(
            "8:00 - 8:55" =>array(
                "Materia" => "DPL",
                "Docente" => "MarMon",
                "Taller" => "G201"
            ),
            "8:55 - 9:50" =>array(
                "Materia" => "DPL",
                "Docente" => "MarMon",
                "Taller" => "G201"
            ),
            "9:50 - 10:45" =>array(
                "Materia" => "DSW",
                "Docente" => "SerRam",
                "Taller" => "G201"
            ),
            "11:15 - 12:10" =>array(
                "Materia" => "DSW",
                "Docente" => "SerRam",
                "Taller" => "G201"
            ),
            "12:10 - 13:05" =>array(
                "Materia" => "DOR",
                "Docente" => "ErmPap",
                "Taller" => "G201"
            ),
            "13:05 - 14:00" =>array(
                "Materia" => "DOR",
                "Docente" => "ErmPap",
                "Taller" => "G201"
            )
        ),
        "Miercoles" =>array(
            "8:00 - 8:55" =>array(
                "Materia" => "DEW",
                "Docente" => "MarRod",
                "Taller" => "G201"
            ),
            "8:55 - 9:50" =>array(
                "Materia" => "DEW",
                "Docente" => "MarRod",
                "Taller" => "G201"
            ),
            "9:50 - 10:45" =>array(
                "Materia" => "DSW",
                "Docente" => "SerRam",
                "Taller" => "G201"
            ),
            "11:15 - 12:10" =>array(
                "Materia" => "DSW",
                "Docente" => "SerRam",
                "Taller" => "G201"
            ),
            "12:10 - 13:05" =>array(
                "Materia" => "DOR",
                "Docente" => "ErmPap",
                "Taller" => "G201"
            ),
            "13:05 - 14:00" =>array(
                "Materia" => "DOR",
                "Docente" => "ErmPap",
                "Taller" => "G201"
            )
        ),
        "Jueves" =>array(
            "8:00 - 8:55" =>array(
                "Materia" => "DPL",
                "Docente" => "MarMon",
                "Taller" => "G201"
            ),
            "8:55 - 9:50" =>array(
                "Materia" => "DPL",
                "Docente" => "MarMon",
                "Taller" => "G201"
            ),
            "9:50 - 10:45" =>array(
                "Materia" => "DPL",
                "Docente" => "MarMon",
                "Taller" => "G201"
            ),
            "11:15 - 12:10" =>array(
                "Materia" => "DEW",
                "Docente" => "MarRod",
                "Taller" => "G201"
            ),
            "12:10 - 13:05" =>array(
                "Materia" => "DEW",
                "Docente" => "MarRod",
                "Taller" => "G201"
            ),
            "13:05 - 14:00" =>array(
                "Materia" => "EMR",
                "Docente" => "MarGarc",
                "Taller" => "G201"
            )
        ),
        "Viernes" =>array(
            "8:00 - 8:55" =>array(
                "Materia" => "DOR",
                "Docente" => "ErmPap",
                "Taller" => "G201"
            ),
            "8:55 - 9:50" =>array(
                "Materia" => "DOR",
                "Docente" => "ErmPap",
                "Taller" => "G201"
            ),
            "9:50 - 10:45" =>array(
                "Materia" => "DPL",
                "Docente" => "MarMon",
                "Taller" => "G201"
            ),
            "11:15 - 12:10" =>array(
                "Materia" => "EMR",
                "Docente" => "MarGarc",
                "Taller" => "G201"
            ),
            "12:10 - 13:05" =>array(
                "Materia" => "DSW",
                "Docente" => "SerRam",
                "Taller" => "G201"
            ),
            "13:05 - 14:00" =>array(
                "Materia" => "DSW",
                "Docente" => "SerRam",
                "Taller" => "G201"
            )
        )
    );

    echo "<h1 align='center'>Horario de clase 2ºDAW</h1>";

    function mostrarHorario(){
        global $horario;
        echo "<table border='4' cellpadding='16' align='center'>";
        echo "<tr bgcolor='#E79233'>";
        echo "<td></td>";
        echo "<td><b>8:00 - 8:55</b></td>";
        echo "<td><b>8:55 - 9:50</b></td>";
        echo "<td><b>9:50 - 10:45</b></td>";
        echo "<td><b>11:15 - 12:10</b></td>";
        echo "<td><b>12:10 - 13:05</b></td>";
        echo "<td><b>13:05 - 14:00</b></td>";
        echo "</tr>";
        foreach($horario as $dia => $horario1){
            echo "<tr><td bgcolor='#E79233'><b>$dia</b></td>";
            foreach($horario1 as $hora => $info){
                echo "<td>";
                foreach($info as $titulo => $contenido){
                    echo "$contenido ";
                }
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    };
    mostrarHorario();
?>
</body>
</html>