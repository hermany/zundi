<?php
header("Content-Type: text/html;charset=utf-8");
require_once(_RUTA_NUCLEO."clases/class-constructor.php");
$fmt = new CONSTRUCTOR;
//$fmt->header->cnd_jquery();
?>

<div class="nav container-fluid" >
<div class="container">
	<a class="nav-brand" href="<?php echo _RUTA_WEB; ?>" ></a>
  <ul class="nav-inner ">
    <?php echo $fmt->nav->traer_cat_hijos_menu("0","0","1"); ?>
  </ul>
</div>
</div>
