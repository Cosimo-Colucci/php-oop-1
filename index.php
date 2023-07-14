// Descrizione:
// Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
// è definita una classe ‘Movie’ :
//  => all'interno della classe sono dichiarate delle variabili d'istanza
//  => all'interno della classe è definito un costruttore
//  => all'interno della classe è definito almeno un metodo
// vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

<?php
// Definito classe Movie
class Movie {

// Dichiarato delle variabili d'istanza
    public $title;
    public $description;
    public $year;

// Definito un costruttore all'interno della classe
    function __construct($title, $description, $year){
        $this->$title = $title;
        $this->$description = $description;
        $this->$year = $year;
    }

// Definito metodo all'interno della classe
    public function getTitle(){
        return $this->$title;
    }
}

//  Istanziati due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
$first = new Movie('Fast and Furious', 'Per indagare su una serie di furti, il poliziotto Brian O\'Connor diventa un infiltrato sotto copertura nel mondo delle corse clandestine di Los Angeles. Mentre cerca di guadagnarsi la fiducia del capo, l\'uomo rischia di essere smascherato.', 2001);
$second = new Movie('2 Fast 2 Furious', 'L\'agente O\'Conner, privato del suo distintivo, viene reclutato dall\'FBI per infiltrarsi in un giro clandestino di corsa automobilistiche a Miami e smantellare un\'organizzazione criminale.', 2003);

var_dump ($first);
var_dump ($second);