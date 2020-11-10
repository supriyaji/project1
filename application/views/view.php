<?php include_once('header.php') ?>
<div class="container"  style="margin-top:20px;">

    <h3 > VIEW POST</h3>
    
   <p> <?php echo $post->title; ?></p>
 
    <p><?php echo $post->description; ?></p>
  

<?php echo anchor('welcome','Back',['class'=>'btn btn-secondary']);?>
</div>
<?php include_once('footer.php') ?>





