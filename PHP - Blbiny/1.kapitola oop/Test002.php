<?php

class Song {

    public $songId;
    public $title;
}

    $octopusSong = new Song();
    $octopusSong->songId = 1;
    $octopusSong->title = "Octopus´s garden";

var_dump($octopusSong);


class Playlist
{
    public $name;
    public $songs = [];
    public function addSong($songId){

        $this->songs[] = $song;
    }

}


    $yellowSubmarine = new Song();
    $yellowSubmarine->songId = 2;
    $yellowSubmarine->title = 'yellow Submarine';

    $playlist = new Playlist();
    $playlist->name = 'Rock!';
    $playlist->addSong($octopusSong);
    var_dump($playlist);

?>