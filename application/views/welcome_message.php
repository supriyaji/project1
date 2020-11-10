<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
  <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.bundle.js'); ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">CRUD APPLICATION</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarColor01">   
  </div>
</nav>
<div class="container"  style="margin-top:20px;">
    <h3> <u>VIEW ALL POSTS</u></h3>
    <hr>
    <?php if($msg = $this->session->flashdata('msg')): ?>
      <div class="row">
        <div class="col-md-5">
          <div class="alert alert-success">
            <?php echo $msg ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <?php echo anchor('welcome/create','Add post',['class'=>'btn btn-dark']); ?>
    <hr>
    <table class="table table-striped">
      <thead>
        <tr>
            <th scope="col">TITLE</th>
            <th scope="col">DESCRIPTION</th>
            <th scope="col">CREATION DATE</th>
            <th scope="col">ACTION</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($data as $post) { ?>
        <tr>
          <td><?php echo $post->title; ?></td>
          <td><?php echo $post->description; ?> </td>
          <td> <?php echo $post->date_created; ?></td>
          <td>
          <?php echo anchor("welcome/view/{$post->id}",'view',['class'=>'badge badge-primary']); ?>
          <?php echo anchor("welcome/edit/{$post->id}",'Update',['class'=>'badge badge-success']); ?>
          <?php echo anchor("welcome/delete/{$post->id}",'Delete',['class'=>'badge badge-danger']); ?>
          </td>
        </tr>
       <?php } ?>
      </tbody>
   </table> 
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <a class="navbar-brand" href="#"></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
     </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
   </nav>
</div>
</body>
</html>