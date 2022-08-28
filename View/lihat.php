<?php

?>
<div class="countainer">
    <div class="row">
        <ol class="breadcrumb" style="box-shadow: 2px 2px 8px #888888;">
            <p><img src="../assets/icons/archive.svg" style="float: left; padding-top: 5px;">
        <h4>&nbsp;&nbsp;&nbsp;&nbsp;</h4></p>
    </ol>
    </div>

    <?php 
    $id=$_GET['id'];
    $data= query ("SELECT * FROM lembar_kerja ");
    while ($b=($data)){
        ?>
    
        

        <object data="../asset/file/<?php echo $b['file'] ?>" width="100%" height="1000px" style="border: 1px solid; box-shadow: 2px 2px 8px #000000;"></object>
        
        <?php
    }
    ?>  
    
</div>