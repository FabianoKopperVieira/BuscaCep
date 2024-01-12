
<?php

require_once "vendor/autoload.php";


use \Fabiano\CursoPHP\Search;

$busca = new Search;

$resultado = $busca->getAdressFromZipcode('99500000');

print_r($resultado);