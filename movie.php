<?php

class Movie{
    public $_name;
    public $_genre;
    public $_movie_director;
    public $_duration;

    function __construct($_name, $_genre, $_movie_director, $_duration)
    {
        $this->name = $_name;
        $this->genre = $_genre;
        $this->movie_director = $_movie_director;
        $this->duration = $_duration;
    }
}