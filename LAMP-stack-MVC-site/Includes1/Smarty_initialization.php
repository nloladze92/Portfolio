<?php
	
		//require_once '../Libraries/Smarty_libs/Smarty.class.php';
		
		require_once '../Libraries/Smarty_libs/Smarty.class.php';
		

		class Smarty_inital extends Smarty {
		
		public function __construct()
		
		{
			$smarty = new Smarty;
			$this->Smarty();
			$this->template_dir = "../../Includes/Templates/";
			$this->compile_dir = "../../Includes/Compile_directory";
			$this->cache_dir = "../../Includes/Smarty_cache";
			
			/*
		$smarty = new Smarty;
	   $smarty->setTemplateDir('./Templates')
       ->setCompileDir('./Compile_directory')
       ->setCacheDir('./Smarty_Cache');
*/
		}
	   
		}
