<?php

// Premiere ligne
//methode get
echo "Bienvenue ". htmlspecialchars($_GET["fname"]) . '!';

//methode post
echo 'Bonjour ' . htmlspecialchars($_POST["name"]) . '!';


