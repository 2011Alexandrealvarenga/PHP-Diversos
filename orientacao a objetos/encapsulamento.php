<?php 
// classe
class Post{
    public string $author;

    public function setAuthor($n){
        $this->author = $n;
    }
    public function getAuthor(){
        return $this->author;
    }

}

// encapsulamento, protege os dados, set get,
// melhora a forma forma com que é tratado os dados

// objeto
$post1 = new Post();
$post1->setAuthor('Alexandre');

echo 'post 1 = '.$post1->author.'<br/>';

?>