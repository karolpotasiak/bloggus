<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bloggus Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="<?=base_url('static/bootstrap/css/bootstrap.css');?>" rel="stylesheet">
    <link href="<?=base_url('static/bootstrap/addons/datepicker/css/datepicker.css');?>" rel="stylesheet">
    <link href="<?=base_url('static/app/admin.css');?>" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="<?=base_url('static/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?=base_url('static/bootstrap/addons/datepicker/js/bootstrap-datepicker.js');?>"></script>
    <script>
    $(document).ready(function() {
    	$('.dropdown-toggle').dropdown();
    	$('.datepicker').datepicker({format: 'dd/mm/yyyy'});
    });
    </script>
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Bloggus Administration</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="<?=site_url('admin/posts');?>">Posts</a></li>
            </ul>
            <ul class="nav pull-right">
            	<li class="dropdown">
                	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi, <?=$this->session->userdata('use_firstname');?> <?=$this->session->userdata('use_lastname');?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="<?=site_url('admin/login/logout');?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">