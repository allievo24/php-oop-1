<?php

//creo la classe con gli attributi che la definiscono



class Movie{
    public $title;
    public $director;
    public $plot;
    protected $year;
    public $language;

    //chiamo il costruttore che andra a riempire i parametri della classe 
    //quelli null non saranno obbligatori 
    public function __construct($title,$director,$Language,$plot = null)
    {
        //assegno i gli atributi che formano la classe 
        //Es:[this->title prendera il valore di $title che il costruttore gli passera]

        $this->title = $title;
        $this->director = $director;
        $this->Language =  $Language;
        $this->plot = $plot;
    }
     //fine costruttore
     
     
     //definisco una funzione (metodo) di verifica dell'anno

    public function setYear($year){
        if(is_int($year)){
            $this->year =$year;

        }else{
            echo'anno sbagliato';
        }
    }
    //definisco un metodo per poter recuperare il valore di year in quanto e protetto

    public function getYear(){
        return $this->year;
    }

    //definisco un metodo per poter stampare gli attributi della classe
    public function getMovie(){
        return 'Title:' . $this->title .'<br>'.
                'Director:' . $this->director .'<br>'.
                'year:' . $this->year .'<br>'.
                'language:' .$this->Language .'<br>'.
                'plot:'. $this->plot.'<br>'.'<br>';
                
    }












}