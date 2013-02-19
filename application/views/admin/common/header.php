<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bloggus Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="<?=base_url('static/bootstrap/css/bootstrap.css');?>" rel="stylesheet">
    <link href="<?=base_url('static/app/admin.css');?>" rel="stylesheet">
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
                	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi, FIRST LAST<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">