<?php
include './autoLoader.php';

echo "<pre>";
$testduDAO = new DefaultDAO();
$results= $testduDAO->getAll();
print_r($results);



