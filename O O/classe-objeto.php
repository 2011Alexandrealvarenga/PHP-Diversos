<?php 
// classe
class Post{
    public $likes =0;
    public $commnets = [];
    public $author;
}

// objeto
$post1 = new Post();
$post1->likes =3;


$post2 = new Post();
$post2->likes =10;

echo 'post 1 = '.$post1->likes.'<br/>';
echo 'post 2 = '.$post2->likes.'<br/>';

?>