<?php 

    Class Playlist{
        public $Title = "None";
        private $songs = [];

        public function addMusic(Song $song): void{
            $this->songs[]=$song;
        }
        public function listPlaylist(){
            echo "Playlist name: $this->Title".PHP_EOL;
            for($i = 0; $i < count($this->songs); $i++){
                echo "$i ".$this->songs[$i]->nameOfSong.PHP_EOL;
            }
           //return $this->songs;
        }

    }
    
    class Song{
        public function __construct(public string $nameOfSong = "None",float $lenght){
            $this->nameOfSong = $nameOfSong;
            $this->lenght = $lenght;
        }


    }


    $Song = new Song(nameOfSong: "Cant find me love",lenght: 3.5);
    $Song2 = new Song(nameOfSong: "Hello",lenght: 7.8);





    $playlist = new Playlist("Test Playlist");
    $playlist->addMusic($Song);
    $playlist->addMusic($Song2);
    $playlist->listPlaylist();

    //var_dump($playlist->listPlaylist());

?>