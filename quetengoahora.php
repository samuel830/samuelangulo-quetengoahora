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

    function mostrarHorario(){
        global $horario;
        echo "<h1>Horario de clase 2ºDAW</h1>";
        echo "<table border='4' bordercolor='blue'
        cellpadding='15'>";
        foreach($horario as $dia => $horario1){
            echo "<tr><td>$dia</td></tr>";
            foreach($horario1 as $hora => $info){
                echo "<td>";
                foreach($info as $titulo => $contenido){
                    echo "<b>$titulo</b>: $contenido</br>";
                }
                echo "</td>";
            }
        }
        echo "</table>";
        /*foreach($horario as $dia => $horario1){
                echo "<h3>$dia</h3>";
                echo "<hr/>";
            foreach($horario1 as $hora => $info){
                    echo "<b>$hora</b>";
                    echo "<hr/>";
                foreach($info as $titulo => $contenido){
                    echo "<b>$titulo</b>: $contenido";
                    echo "<br/>";
                }
                echo "<hr/>";
            }
        }*/
    };

    function obtenerModulo($diaBusqueda,$horaBusqueda,$minutosBusqueda){
        global $horario;
        if($horaBusqueda==8 && $minutosBusqueda<55){$hora1 = "8:00 - 8:55";}
        if($horaBusqueda==8 && $minutosBusqueda>=55 || $horaBusqueda==9 && $minutosBusqueda<50 ){$hora1 = "8:55 - 9:50";}
        if($horaBusqueda==9 && $minutosBusqueda>=50 || $horaBusqueda==10 && $minutosBusqueda<45 ){$hora1 = "9:50 - 10:45";}
        if($horaBusqueda==11 && $minutosBusqueda>=15 || $horaBusqueda==12 && $minutosBusqueda<10 ){$hora1 = "11:15 - 12:10";}
        if($horaBusqueda==12 && $minutosBusqueda>=10 || $horaBusqueda==13 && $minutosBusqueda<05 ){$hora1 = "12:10 - 13:05";}
        if($horaBusqueda==13 && $minutosBusqueda>=05 || $horaBusqueda==14 && $minutosBusqueda<00 ){$hora1 = "13:05 - 14:00";}
        foreach($horario as $dia => $horario1){
            if($dia == $diaBusqueda){
                foreach($horario1 as $hora2 => $info){
                    if($hora2 === $hora1){
                        foreach($info as $titulo => $contenido){
                            echo "<b>$titulo</b>: $contenido";
                            echo "<br/>";
                        } 
                    }else{
                        echo "La hora introducida no encaja con ninguna registrada en el horario";
                    }
                }
            }else{
                echo "El día introducido no encaja con ninguno registrado en el horario";
            }
        }
    };

    mostrarHorario();
    //obtenerModulo("Martes","11","21");
?>