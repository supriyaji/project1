<?php include_once('header.php') ?>
<div class="container"  style="margin-top:20px;">
  <?php  echo form_open("welcome/update/{$post->id}",['class'=>'form-horizontal']);?>
  <fieldset>
    <legend><u><b>UPDATE POST </b></u></legend>
    <hr>
    <div >
     <div class="form-group">
        <label for="title" class="col-md-2 control-label">TITLE:</label>
        <div class="col-md-5">
          <?php echo form_input(['name'=>'title','placeholder'=>'Title','class'=>'form-control','value'=>set_value('title',$post->title) ]);  ?>
        </div>
        <div class="col=md-5">
          <?php echo form_error('title','<div class= "text-danger">','</div>'); ?>
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-md-2 control-label">DESCRIPTION:</label>
        <div class="col-md-5">
          <?php echo form_textarea(['name'=>'description','placeholder'=>'description','class'=>'form-control','value'=>set_value('description',$post->description)]); ?>
        </div>
        <div class="col=md-5">
          <?php echo form_error('description','<div class= "text-danger">','</div>'); ?>
        </div>
      </div>
      <?php echo form_submit(['name'=>'submit','value'=>'SUBMIT','class'=>'btn btn-default']);?>
      <?php echo anchor('welcome','BACK',['class'=>'btn btn-secondary']); ?>
    </fieldset>
    <?php echo form_close(); ?>
</div>
<?php include_once('footer.php') ?>
