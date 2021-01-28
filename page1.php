<?php
// Premiere ligne

//methode get
if(isset($_GET['fname'])){
    $a = trim(strip_tags($_GET['fname']));
    echo "Bienvenue ". $a . '!';
}

//methode post
if(isset($_POST['name'])) {
    $name = trim(strip_tags($_POST['name']));
    echo 'Bonjour ' . $name . '!';

}



