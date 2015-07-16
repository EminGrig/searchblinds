<?php
    require 'includes/connect.inc.php';
    require 'includes/functions.php';
    header('Content-Type: text/xml');
    echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
        $wi = $_GET['wi'];
        $hi = $_GET['hi'];
        $datab=$_GET['db'];
        $quantity =$_GET['quantity'];
        $result = GetPrice($wi,$hi,$datab);
    echo '<response>';
            echo '<price>';
                echo '<current-width>';
                echo $wi.'"';
                echo '</current-width>';
                echo '<current-length>';
                echo $hi.'"';
                echo '</current-length>';
                echo '<price-current>';
                        echo '$ '.$result*0.22*$quantity;
                echo '</price-current>';
                echo '<price-prev>';
                        echo '$ '.$result*$quantity;
                echo '</price-prev>';
            echo '</price>';
    echo '</response>';
?>