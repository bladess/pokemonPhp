<?php

    require('./class/Capacite.php');
    require('./class/Pokemon.php');

    $fouetLiane = new Capacite("Plante","Fouet Liane",10);
    $canonGraine = new Capacite("Plante","Canon Graine",20);
    $charbonMutant = new Capacite("Feu","Charbon mutant",30);
    $marisson = new Pokemon('Marisson',60,9,0.4,"Plante","Feu",$fouetLiane,$canonGraine);
    
    $marisson->afficherFiche();