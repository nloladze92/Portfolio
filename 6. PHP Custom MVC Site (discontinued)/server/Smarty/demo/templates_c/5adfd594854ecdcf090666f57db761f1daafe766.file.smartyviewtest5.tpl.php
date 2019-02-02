<?php /* Smarty version Smarty-3.1.19, created on 2017-02-15 02:08:47
         compiled from "./newtemp/smartyviewtest5.tpl" */ ?>
<?php /*%%SmartyHeaderCode:570714905589f9bc9408809-82639768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5adfd594854ecdcf090666f57db761f1daafe766' => 
    array (
      0 => './newtemp/smartyviewtest5.tpl',
      1 => 1487120925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '570714905589f9bc9408809-82639768',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589f9bc981bf85_62301906',
  'variables' => 
  array (
    'plan_id' => 0,
    'plan' => 0,
    'j' => 0,
    'html' => 0,
    'percentage' => 0,
    'array' => 0,
    'k' => 0,
    'pledgeview' => 0,
    'ids' => 0,
    'pledge' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589f9bc981bf85_62301906')) {function content_589f9bc981bf85_62301906($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("../configs/scripts.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<html>
<head>
 <title>
 </title>
 <?php echo $_smarty_tpl->getConfigVariable('css');?>

 
 <link rel='stylesheet' type='text/css' href='pledgebuttonstyle.css' />
  <link rel='stylesheet' type='text/css' href='newteststyle.css' />
  </head>
  <body id="body">
  
  <script>
function goBack() {
    window.history.back();
}
</script>
  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js">
  </script>
  <?php echo $_smarty_tpl->tpl_vars['plan_id']->value;?>

  
  		
        <table><tr><td id="top">
        <button id="goback" onclick="goBack()"><-- Go Back</button>
        <!-- <img src="../../../../images/Screen.jpg" /> -->
        <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['j']->value;?>

        <?php } ?>
        
        
        </td><td align="center" style="display: inline-block;
    vertical-align: top;">

        <?php echo $_smarty_tpl->tpl_vars['html']->value->table;?>

        <?php if ($_smarty_tpl->tpl_vars['percentage']->value==0) {?>
        <?php echo $_smarty_tpl->tpl_vars['html']->value->z;?>

        <?php } elseif ($_smarty_tpl->tpl_vars['percentage']->value>0&&$_smarty_tpl->tpl_vars['percentage']->value<25) {?>
        <?php echo $_smarty_tpl->tpl_vars['html']->value->zz;?>

        <?php } elseif ($_smarty_tpl->tpl_vars['percentage']->value>=25&&$_smarty_tpl->tpl_vars['percentage']->value<50) {?>
        <?php echo $_smarty_tpl->tpl_vars['html']->value->t;?>

        <?php } elseif ($_smarty_tpl->tpl_vars['percentage']->value>=50&&$_smarty_tpl->tpl_vars['percentage']->value<75) {?>
        <?php echo $_smarty_tpl->tpl_vars['html']->value->f;?>

        <?php } elseif ($_smarty_tpl->tpl_vars['percentage']->value>=75&&$_smarty_tpl->tpl_vars['percentage']->value<100) {?>
        <?php echo $_smarty_tpl->tpl_vars['html']->value->s;?>

        <?php } elseif ($_smarty_tpl->tpl_vars['percentage']->value>=100) {?>
        <?php echo $_smarty_tpl->tpl_vars['html']->value->o;?>

        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['html']->value->tablend;?>

        
        <div class="merged" id="pie">
  		<input type="range" class="money" max="100" min="0" step="1" 
     	id="fundedrange" value="<?php echo $_smarty_tpl->tpl_vars['percentage']->value;?>
" readonly />
		</div>

        
        <table id="table" style="margin-bottom: -15px;"><tr><td id="top">
        <?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['k']->key => $_smarty_tpl->tpl_vars['k']->value) {
$_smarty_tpl->tpl_vars['k']->_loop = true;
?>
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==$_smarty_tpl->tpl_vars['array']->value[4]) {?>
        <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php echo $_smarty_tpl->tpl_vars['html']->value->rowend;?>

        <?php } else {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2==$_smarty_tpl->tpl_vars['array']->value[9]) {?>
        <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php echo $_smarty_tpl->tpl_vars['html']->value->rowend;?>

        <?php } else {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3==$_smarty_tpl->tpl_vars['array']->value[14]) {?>
		<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php echo $_smarty_tpl->tpl_vars['html']->value->rowend;?>

        <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['k']->value;?>

        <?php }}}?>
        <?php } ?>
        </td></tr></table>
        
        
        <?php if ($_smarty_tpl->tpl_vars['pledgeview']->value[0]==true&&$_smarty_tpl->tpl_vars['pledgeview']->value[1]==true&&$_smarty_tpl->tpl_vars['pledgeview']->value[2]==true) {?>
        
  		<?php echo $_smarty_tpl->tpl_vars['html']->value->div;?>
<?php echo $_smarty_tpl->tpl_vars['ids']->value->div1;?>

        <?php echo $_smarty_tpl->tpl_vars['html']->value->div;?>
<?php echo $_smarty_tpl->tpl_vars['ids']->value->div2;?>

      <h1 class="nudge" align="center">Pledge</h1>
	  </div>
      <form method="post" action="pledge.php">
      <!-- beginning of the button table -->
	  <?php echo $_smarty_tpl->tpl_vars['html']->value->table;?>

	  <?php echo $_smarty_tpl->tpl_vars['html']->value->table;?>

			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pledge']->value->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
         		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4=='30') {?>
   		 			<?php echo $_smarty_tpl->tpl_vars['pledge']->value->radio[0];?>
<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"/>
        			<?php echo $_smarty_tpl->tpl_vars['pledge']->value->radio[1];?>
"<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
         			<?php echo $_smarty_tpl->tpl_vars['html']->value->span;?>
<?php echo $_smarty_tpl->tpl_vars['html']->value->label;?>

                    <?php echo $_smarty_tpl->tpl_vars['html']->value->rowend;?>

         		<?php } else {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5=='150') {?>
          			<?php echo $_smarty_tpl->tpl_vars['pledge']->value->radio[0];?>
<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"/>
          			<?php echo $_smarty_tpl->tpl_vars['pledge']->value->radio[1];?>
"<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
          			<?php echo $_smarty_tpl->tpl_vars['html']->value->span;?>
<?php echo $_smarty_tpl->tpl_vars['html']->value->label;?>

		  			<?php echo $_smarty_tpl->tpl_vars['html']->value->rowend;?>

         		<?php } else { ?>
    				<?php echo $_smarty_tpl->tpl_vars['pledge']->value->radio[0];?>
<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"/>
         			<?php echo $_smarty_tpl->tpl_vars['pledge']->value->radio[1];?>
"<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
         			<?php echo $_smarty_tpl->tpl_vars['html']->value->span;?>
<?php echo $_smarty_tpl->tpl_vars['html']->value->label;?>

		 		<?php }}?>
			<?php } ?>
        <?php echo $_smarty_tpl->tpl_vars['html']->value->tablend;?>

      	<?php echo $_smarty_tpl->tpl_vars['html']->value->td;?>

        
        
        
        <?php echo $_smarty_tpl->tpl_vars['html']->value->div;?>
<?php echo $_smarty_tpl->tpl_vars['ids']->value->div3;?>

            <input type="text" name="pledge" id="totalnumber" readonly placeholder="$0" />
            </div>
            <?php echo $_smarty_tpl->tpl_vars['html']->value->tablend;?>

            
            <?php echo $_smarty_tpl->tpl_vars['html']->value->table;?>

            <div id="slider" align="center">
			<input class="bar" type="range" max="40" min="0" step="0" id="rangeinput" value="20" onChange="rangevalue.value=value"/>
			<span class="highlight"></span>
			</div>
            <?php echo $_smarty_tpl->tpl_vars['html']->value->rowend;?>

            <button id="submit" type="submit" onClick=""></button>
            </form>
            <!-- End of The Master Table -->
        <?php echo $_smarty_tpl->tpl_vars['html']->value->tablend;?>

        <?php echo $_smarty_tpl->tpl_vars['pledge']->value->script;?>

        </div>
        
        <?php } elseif ($_smarty_tpl->tpl_vars['pledgeview']->value[0]==false) {?>
         <?php echo $_smarty_tpl->tpl_vars['html']->value->login;?>

        
        <?php } elseif ($_smarty_tpl->tpl_vars['pledgeview']->value[1]==false) {?>
         <?php echo $_smarty_tpl->tpl_vars['html']->value->loc;?>

         
         <?php } elseif ($_smarty_tpl->tpl_vars['pledgeview']->value[2]==false) {?>
         <?php echo $_smarty_tpl->tpl_vars['html']->value->thankyou;?>

         
        <?php }?>
        
        
       <!-- End of the super table -->
       <?php echo $_smarty_tpl->tpl_vars['html']->value->tablend;?>

       <?php echo $_smarty_tpl->tpl_vars['pledge']->value->script2;?>
                
  </body>
</html><?php }} ?>
