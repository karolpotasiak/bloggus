
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign in &middot; Bloggus Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?=base_url('static/bootstrap/css/bootstrap.css');?>" rel="stylesheet">
    <link href="<?=base_url('static/app/admin.css');?>" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <form class="form-signin" method="POST" action="">
        <h2 class="form-signin-heading">Please sign in</h2>
        <? if($this->session->flashdata('error')){?>
        <div class="alert alert-error">
	  		<?=$this->session->flashdata('error');?>
	  	</div>
	  	<? } ?>
        <input type="text" name="email" class="input-block-level" placeholder="Email address">
        <input type="password" name="password" class="input-block-level" placeholder="Password">
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
      </form>
    </div> 
  </body>
</html>
