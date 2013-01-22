<!DOCTYPE html>
<html class="no-js" lang="pt-br">
<?php
$cssPaths = $this -> lang -> line( 'css_file' );
if($this->uri->segment(1) != ""){
    $pagina = $this -> config -> item($this->uri->segment(1))." - ";
}else{
    $pagina = "";
}
?>
<head>
  <title><?php echo $pagina.$this -> config -> item('title_site'); ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width">
  <meta name="robots" content="index,follow" />
  <meta name="googlebot" content="index,follow" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
  <meta name="author" content="Opera Bacana" />
  <meta http-equiv="content-language" content="pt-br" />
  <meta name="reply-to" content="contato@operabacana.com.br" />
  <?php echo link_tag( $cssPaths['normalize'] ); ?>
  <?php echo link_tag( $cssPaths['main'] ); ?>
  <script src="js/modernizr-2.5.3.min.js"></script>
</head>
<body>