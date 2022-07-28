<?php


switch ($_POST['opcion']) {
    case 1:
        echo "estoy en la opcion 1";
        break;
    case 2:
        header('location:../Ejercicio2.php');
        break;
    case 3:
        header('location:../Ejercicio2.php');
        break;
    default:
        # code...
        break;
}
