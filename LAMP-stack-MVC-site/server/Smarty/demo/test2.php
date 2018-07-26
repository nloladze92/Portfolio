	<?php

	 require '../libs/Smarty.class.php';
	 
	  $smarty = new Smarty;
	   $smarty->setTemplateDir('./newtemp')
       ->setCompileDir('./templates_c')
       ->setCacheDir('./cache');
	 
	 class Pledge{
  	 var $radio = '<input type="radio" name="rr" value="';
  	 var $value = array(10, 15, 30, 50, 100, 150, 200, 300, 500);
	 var $ids =  array(p1, p2, p3, p4, p5, p6, p7, p8, p9);
	}

	 $pledge = new Pledge; 
	 $smarty->assign('pledge', $pledge);

	 $smarty->display('plans.tpl');

	?>