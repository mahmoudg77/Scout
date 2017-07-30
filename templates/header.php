<html>
    <head>
          <meta charset="utf-8">
                  <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="<?=assets('css/bootstrap.min.css')?>">

        <!-- Optional theme -->
        <link rel="stylesheet" href="<?=assets('css/bootstrap-theme.min.css')?>">
        <script src="<?=assets('js/jquery-3.2.1.min.js')?>" ></script>
            <script src="<?=assets('js/jquery.form.js')?>"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="<?=assets('js/bootstrap.min.js')?>" ></script>

       <script>
    //   $(function(){
    //       $(".ajax-link").click(function(e){
    //           e.preventDefault();
    //           var $btn=$(this);
    //           $("#page-content").load($btn.prop("href"));
    //       });
    //   });
       </script>
    </head>
    <body>

<div class="row">
    <div class="container">
    <h1 class="col col-xs-6 ">Header</h1>
    <?if($context->user){?>
   	 <div class="col col-xs-4 ">User : <?=$context->user->name?> (<a href="/<?=LANG?>/auth.Login/logout">Logout</a>)<br/>Date : <?=Date("Y-m-d")?></div>
    <?}?>
    </div>
</div>
<div class="clearfix"></div>
<div class="row">
     <div class="container">
    <div class="col col-xs-12">
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/<?=LANG."/"?>">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

<?
foreach (glob(PATH."controller/*.php") as $filename)
{
    $ctr=str_replace("/",".",str_replace(PATH.'controller/',"",str_replace('.php','',$filename)));
    if(in_array($ctr,['BaseController','home'])) continue;
?>
   <li> <a class="ajax-link" href="/<?=LANG?>/<?=$ctr?>/all"><?=$ctr?></a> </li>
<?
}
 ?>
   <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Security <span class="caret"></span></a>
          <ul class="dropdown-menu">
 <?
foreach (glob(PATH."framework/controller/auth/*.php") as $filename)
{
    $ctr=str_replace("/",".",str_replace(PATH.'framework/controller/',"",str_replace('.php','',$filename)));
?>
    <li><a class="ajax-link" href="/<?=LANG?>/<?=$ctr?>"><?=str_replace("auth.","",$ctr)?></a></li>
<?
}
?>
 </ul>
</li>
</ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</div>
</div>
<!--<a href="/<?=LANG."/Account/all"?>">Account</a> |
<a href="/<?=LANG."/PayMethod/all"?>">Pay Methods</a> |
<a href="/<?=LANG."/auth.Users/all"?>">Users</a> |
<a href="/<?=LANG."/Articles/all"?>">Articles</a> |

<a href="/<?=LANG."/auth.Login"?>">Login</a> -->
<hr/>
<div class="row">
     <div class="container">
    <div id="page-content" class="col col-xs-12">
