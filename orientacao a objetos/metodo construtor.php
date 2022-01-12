<?php 
class Post{
    public int $likes = 23;


    // construtor metodo que executa toda vez o OBJETO é criado
    // define as propriedades iniciais, executa ao iniciar
    public function __construct($qtLikes = 3)
    {
        $this->likes = $qtLikes;
    }

}

// OBJETO
$post1 = new Post(25);

// no construtor foi setado um valor padrao caso não for alterado
$post2 = new Post();



echo 'post 1 = '.$post1->likes.'<br/>';
echo 'post 2 = '.$post2->likes.'<br/>';

?>