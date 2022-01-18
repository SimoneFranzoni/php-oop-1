<?php

class Movie{
    public $_name;
    public $_genre;
    public $_movie_director;
    public $_duration;
    public $_vote;

    function __construct($_name, $_genre, $_movie_director, $_duration, $_vote)
    {
        $this->name = $_name;
        $this->genre = $_genre;
        $this->movie_director = $_movie_director;
        $this->duration = $_duration;
        $this->vote = $_vote;
    }

    public function getReview(){
        $message = 'Vincerà gli oscar';
        if($this->vote <= 3){
            $message = 'Nemmeno Sharknado è così brutto';
        } elseif($this->vote <= 5){
            $message = "è probabilmente diretto da Michael Bay";
        } elseif($this->vote <= 7){
            $message = 'Si può fare di meglio';
        } elseif($this->vote <= 9){
            $message = 'Canditato agli Oscar';
        }

        return $message;
    }
}