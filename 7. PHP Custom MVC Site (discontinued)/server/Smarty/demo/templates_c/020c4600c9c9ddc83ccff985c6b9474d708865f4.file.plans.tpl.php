<?php /* Smarty version Smarty-3.1.19, created on 2017-02-13 21:48:17
         compiled from "./newtemp/plans.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1071155084589dd0717d9385-03203824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '020c4600c9c9ddc83ccff985c6b9474d708865f4' => 
    array (
      0 => './newtemp/plans.tpl',
      1 => 1487018895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1071155084589dd0717d9385-03203824',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589dd07190dfb2_49172470',
  'variables' => 
  array (
    'username' => 0,
    'dnst' => 0,
    'length' => 0,
    'k' => 0,
    'j' => 0,
    'tr' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589dd07190dfb2_49172470')) {function content_589dd07190dfb2_49172470($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("../configs/css.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Browse Local Plans</title>
	<?php echo $_smarty_tpl->getConfigVariable('css');?>

   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   
</head>

<body bgcolor="#E2E2E2">
<table align="center">
<tr>
<td>
<div id="topofbrowseplans">
<table align="center">
<tr>
<td>
  <a href="../../../../index.php"><img src="../../../../images/goback.png" width="157px" height="40px" style="margin-left: -220px; margin-right: 150px;"/></a>
  
  <?php echo $_smarty_tpl->tpl_vars['username']->value;?>

  
  </td>
  <td>
  <img src="plansimagesboxes/showme.jpg" id="showme" />
  </td>
  <td>
  <form action="planview.php" method="post">
  <select id="selectviewoption" name="select" onchange="this.form.submit()">
  <option></option>
  <option value="area">Plans in your area</option>
  <option value="recent">All plans by most recent</option>
  </select>
  </form>
</td>
</tr>
</table>
<br />
<font id="showexplanation">
This page shows plan made by various users.  <br />
You can sort through plans made specific to your area or sort through all plans. <br />
Proxies will throw the search off and you will not be able to pledge if you are behind a proxy. Your IP will never be saved or shared.
</font>
</div>

<!-- 2/13/17 - Do not show table, is used when there are no plans in the local area that it creates no table with no border -->
<?php if ($_smarty_tpl->tpl_vars['dnst']->value!=true) {?>
<table align="center" bgcolor="#FFFFFF" border="5" bordercolor="#666666">
<tr>
<?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['length']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['j']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['k']->value%5!=0) {?>

<td width="175" height="305" align="center" class="z" style="vertical-align: top;">
<a href="smarty3.php?plan_id=<?php echo $_smarty_tpl->tpl_vars['j']->value[7];?>
" class="test"></a>
<input class="title" type="text" value="<?php echo $_smarty_tpl->tpl_vars['j']->value[1];?>
" readonly="readonly" /></input>
<br />
<?php echo $_smarty_tpl->tpl_vars['j']->value[0];?>

<font class="display"><?php echo $_smarty_tpl->tpl_vars['j']->value[2];?>
</font>

<br />

<div class="align">
<font class="details">
<?php echo $_smarty_tpl->tpl_vars['j']->value[4];?>

<br />
<?php echo $_smarty_tpl->tpl_vars['j']->value[5];?>
 </font>
<br />
</div>

<div class="box" />
<font class="price">
$<?php echo $_smarty_tpl->tpl_vars['j']->value[3];?>

</font>
</div>

<div class="bottom">
<font class="date">
<?php echo $_smarty_tpl->tpl_vars['j']->value[6];?>

</font>
</div>
</td>

<?php } elseif (($_smarty_tpl->tpl_vars['k']->value%5==0)) {?>
<?php echo $_smarty_tpl->tpl_vars['tr']->value;?>


<td width="175" height="305" align="center" class="z" style="vertical-align: top;">
<a href="smarty3.php?plan_id=<?php echo $_smarty_tpl->tpl_vars['j']->value[7];?>
" class="test"></a>
<input class="title" type="text" value="<?php echo $_smarty_tpl->tpl_vars['j']->value[1];?>
" readonly="readonly" /></input>
<br />
<?php echo $_smarty_tpl->tpl_vars['j']->value[0];?>

<font class="display"><?php echo $_smarty_tpl->tpl_vars['j']->value[2];?>
</font>

<br />

<div class="align">
<font class="details">
<?php echo $_smarty_tpl->tpl_vars['j']->value[4];?>

<br />
<?php echo $_smarty_tpl->tpl_vars['j']->value[5];?>
 </font>
<br />
</div>

<div class="box" />
<font class="price">
$<?php echo $_smarty_tpl->tpl_vars['j']->value[3];?>

</font>
</div>

<div class="bottom">
<font class="date">
<?php echo $_smarty_tpl->tpl_vars['j']->value[6];?>

</font>
</div>
</td>

<?php }?>
<?php } ?>
</tr>
</table>


</td>
</tr>
</table>

<?php }?>
<div align="center"><font class="sorry"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</font></div>

</body>
</html>
<?php }} ?>
