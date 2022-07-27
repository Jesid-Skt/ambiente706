<?php

    $nombre = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $nota1 = $_POST['calificacion_1'];
    $nota2 = $_POST['calificacion_2'];
    $nota3 = $_POST['calificacion_3'];
    $opcion = $_POST['opcion'];
    $promedio = ($nota1 + $nota2 + $nota3)/3;

    if($promedio > 4){
        $Dios = "Te salvaste";
    }else{
        $Dios = "Lo siento, ya valistes";
    }
    echo '
        <h3>CALIFICACIONES FINALES</h3> 
        <p>Nombre del aprendiz: '.$nombre.' '.$apellidos.'</p>
        <p>Nota Uno: '.$nota1.'</p>
        <p>Nota Dos: '.$nota2.'</p>
        <p>Nota Tres: '.$nota3.'</p>
        --------------------------------<br>
        <p>La nota final es: '.$promedio.'</p>
        <p>Final: '.$Dios.'</p>
    ';
    switch($opcion){
      case 1:
        echo("Estas en la opción de suma");
        break;
        case 2:
            echo("Estas en la opción de resta");
            if($nota2 %2==0){
                echo 'el numero es par: ';
            }
            else{
                echo 'el numero es impar';
            }
            break;
        case 3:
            echo("Estas en la opción de multiplicacion ");
            $resultadomultiplicacion=($nota1*$nota2*$nota3);
            echo(", resultado: ".$resultadomultiplicacion);
            break;
            default;
    }
    


