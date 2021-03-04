<?php

use App\Get;

require '../vendor/autoload.php';
Get::getAuth()->requireRole('admin');
?>
Réservé à l'admin