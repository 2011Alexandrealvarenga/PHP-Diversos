<?php 
                            // herança ... herda caracteristicas 
    class Post{
        private int $id;
        private int $likes = 0;

        // encapsulamento set and get
        public function setId($i){
            $this->id =$i;
        }
        public function getId(){
            return $this->id;
        }

        public function setLikes($n){
            $this->likes = $n;
        }
        public function getLikes(){
            return $this->likes;
        }
    }

    class Foto extends Post{
        private $url;
        public function __construct($id){
            $this->setId($id);
        }
        public function getUrl(){
            return $this->url;
        }
    }
// id 20
$foto = new Foto(20);
$foto->setLikes(12);
echo 'foto: #'.$foto->getId().' - '.$foto->getLikes().' Likes';