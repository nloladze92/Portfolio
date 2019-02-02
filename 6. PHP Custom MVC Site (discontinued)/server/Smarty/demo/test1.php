	<?php

	 require '../libs/Smarty.class.php';
	 
	 class Pledge{
  	 var $radio = '<input type="radio" name="rr" value="';
  	 var $value = array(10, 15, 30, 50, 100, 150, 200, 300, 500);
	 var $ids =  array(p1, p2, p3, p4, p5, p6, p7, p8, p9);
	}
	
	 $smarty = new Smarty;
	 $pledge = new Pledge; 
	 $smarty->assign('pledge', $pledge);

	 $smarty->display('test2.tpl');

	?>