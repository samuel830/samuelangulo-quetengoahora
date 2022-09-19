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
                "Materia" => "PRW",
                "Docente" => "MarRod",
                "Taller" => "G201"
            ),
            "12:10 - 13:05" =>array(
                "Materia" => "PRW",
                "Docente" => "MarRod",
                "Taller" => "G201"
            ),
            "13:05 - 14:00" =>array(
                "Materia" => "PRW",
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

    function mostrarHorario($horario){
        echo "<h1>Horario de clase 2ºDAW</h1>";
         foreach($horario as $clave => $valor){
            echo $clave;
            echo "</br>";
        }
    };

    mostrarHorario($horario);
?>