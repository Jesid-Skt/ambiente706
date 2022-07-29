<?php


switch ($_POST['opciones']) {
    case 1:
        header('location:../Ejercicio1.php?id='.$_POST['opciones'].'');
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
