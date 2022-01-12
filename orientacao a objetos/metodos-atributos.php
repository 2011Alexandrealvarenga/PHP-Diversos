<?php 
// classe
class Post{
    public $likes =0;
    public $commnets = [];
    public $author;

    // metodo
    public function aumentarLike(){
        $this->likes++;
    }
}

// objeto
$post1 = new Post();

// 2x igual a 2 likes
$post1->aumentarLike();
$post1->aumentarLike();

echo 'post 1 = '.$post1->likes.'<br/>';

?>