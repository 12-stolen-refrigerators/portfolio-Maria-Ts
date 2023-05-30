<?php

$url = explode("/", $_SERVER['REQUEST_URI']);

if ($url[1] == "main") {
    $content = file_get_contents("pages/index.html");
} else if ($url[1] == "portfolio") {
    $content = file_get_contents("pages/portfolio-places.html");
} else if ($url[1] == "portfolio-places") {
    $content = file_get_contents("pages/portfolio-places.html");
} else if ($url[1] == "portfolio-people") {
    $content = file_get_contents("pages/portfolio-people.html");
} else if ($url[1] == "portfolio-things") {
    $content = file_get_contents("pages/portfolio-things.html");
} else if ($url[1] == "about-me") {
    $content = file_get_contents("pages/about-me.html");
} else if ($url[1] == "contacts") {
    $content = file_get_contents("pages/contacts.html");
} else {
    $content = file_get_contents("pages/index.html");
}

if (!empty($content)) {
    require_once("template.php");
}