<?php  
class Movie{
    public $title;
    public $director;
    public $year;

    // Definizione del costruttore
    function __construct($title, $director, $year){
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
    }

    // Definizione di un metodo per ottenere le informazioni del film
    function geiTinfo(){
        return " {$this->title} ({$this->year}), directed by {$this->director}";
    }
}

// Istanziamento del primo oggetto Movie con Star Wars: Episode I
$movie1 = new Movie("Star Wars: Episode I – The Phantom Menace", "George Lucas", 1999);
// Istanziamento del secondo oggetto Movie con Harry Potter and the Philosopher's Stone
$movie2 = new Movie("Harry Potter and the Philosopher's Stone", "Chris Columbus", 2001);

// Stampa a schermo dei valori delle proprietà degli oggetti Movie
echo $movie1->geiTinfo();
echo "br";
echo $movie2->geiTinfo();


?>