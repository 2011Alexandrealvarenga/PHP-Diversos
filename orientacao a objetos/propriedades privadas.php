<?php 
// classe
class Post{
    // inserindo tipo de int
    public int $likes = 23;

    // metodo
    public function aumentarLike(){
        $this->likes++;
    }
}

// objeto
$post1 = new Post();



echo 'post 1 = '.$post1->likes.'<br/>';

?>