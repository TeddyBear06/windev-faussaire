<?php

error_reporting(E_ERROR | E_PARSE);

$noms = [];

$urls = [
    "https://www.shopify.com/fr/outils/generateur-de-nom-d-entreprise/rechercher?query=Jolie&button=&tool=business_name_generator",
    "https://www.shopify.com/fr/outils/generateur-de-nom-d-entreprise/rechercher?button=&page=2&query=Jolie&tool=business_name_generator",
    "https://www.shopify.com/fr/outils/generateur-de-nom-d-entreprise/rechercher?button=&query=groupe&tool=business_name_generator",
    "https://www.shopify.com/fr/outils/generateur-de-nom-d-entreprise/rechercher?button=&page=2&query=groupe&tool=business_name_generator",
    "https://www.shopify.com/fr/outils/generateur-de-nom-d-entreprise/rechercher?query=pierre&button=&tool=business_name_generator#ToolContent",
    "https://www.shopify.com/fr/outils/generateur-de-nom-d-entreprise/rechercher?button=&page=2&query=pierre&tool=business_name_generator",
    "https://www.shopify.com/fr/outils/generateur-de-nom-d-entreprise/rechercher?query=terre&button=&tool=business_name_generator#ToolContent",
    "https://www.shopify.com/fr/outils/generateur-de-nom-d-entreprise/rechercher?button=&page=2&query=terre&tool=business_name_generator",
    "https://www.shopify.com/fr/outils/generateur-de-nom-d-entreprise/rechercher?query=eau&button=&tool=business_name_generator#ToolContent",
    "https://www.shopify.com/fr/outils/generateur-de-nom-d-entreprise/rechercher?button=&page=2&query=eau&tool=business_name_generator",
    "https://www.shopify.com/fr/outils/generateur-de-nom-d-entreprise/rechercher?query=france&button=&tool=business_name_generator#ToolContent",
    "https://www.shopify.com/fr/outils/generateur-de-nom-d-entreprise/rechercher?button=&page=2&query=france&tool=business_name_generator",
];

foreach ($urls as $url) {

    $HTMLpage = file_get_contents($url);

    $doc = new DOMDocument();
    $doc->loadHTML($HTMLpage);

    $classname = "business-name-button__name";
    $finder = new DomXPath($doc);
    $elements = $finder->query("//*[contains(@class, '$classname')]");
    
    foreach ($elements as $element) {
        array_push($noms, '"'.$element->nodeValue.'"');
    }

    sleep(2);

}

$listeNoms = implode(', ', $noms);

file_put_contents("./listeNoms.txt", $listeNoms);