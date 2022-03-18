<?php foreach($result->data as $get_result): ?>
    <?php foreach($get_result->images as $image): ?>
        
        <?php 
        if (!empty($image->hash)) {
            echo $image->hash .'<br>';
        } 
        if (!empty($image->height)) {
            echo $image->height .'<br>';
        } 
        ?>
        <hr>
    <?php endforeach; ?> 
<?php endforeach; ?> 
<!-- 

    exemplo
    data					
	    images				
            original			
                hash		$result->data->images->original as $image
                            $image->hash

 -->