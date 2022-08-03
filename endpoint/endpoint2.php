<?php

require '../UAS_PW/easyrdf/vendor/autoload.php';

EasyRdf\RdfNamespace::set('dc','http://purl.org/dc/elements/1.1/');
EasyRdf\RdfNamespace::set('laptop','http://www.projectsemweb/namespace#');

$newrdf = new \EasyRdf\Graph("https://jtps-x.github.io/UASLabSW/Laptop.rdf");
$newrdf->load();

$allSubject = $newrdf->resourcesMatching('dc:name');

$i = 0;

foreach($allSubject as $subjek) {
    $name[$i]   = $newrdf->get($subjek,'dc:name');
    $processor[$i]  = $newrdf->get($subjek,'laptop:processor');
    $memory[$i]  = $newrdf->get($subjek,'dc:memory');
    $storage[$i]  = $newrdf->get($subjek,'laptop:storage');
    $price[$i]  = $newrdf->get($subjek,'dc:price');
    $i++;
    }

?>