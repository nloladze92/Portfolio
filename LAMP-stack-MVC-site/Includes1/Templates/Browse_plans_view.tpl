{config_load file="../../Config/Browse_plan_css.conf"}

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Browse Local Plans</title>

{#css#}

   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   
</head>

<body bgcolor="#E2E2E2">
<table align="center" bgcolor="#FFFFFF" border="5" bordercolor="#666666">
<tr>
{foreach from = $length item = j key = k}
<td width="175" height="305" align="center" class="z" style="vertical-align: top;">
<a href="smarty1.php?plan_id={$j[7]}" class="test"></a>
<input class="title" type="text" value="{$j[1]}" readonly="readonly" /></input>
<br />
{$j[0]}
<font class="display">{$j[2]}</font>

<br />

<div class="align">
<font class="details">
{$j[4]}
<br />
{$j[5]} </font>
<br />
</div>

<div class="box" />
<font class="price">
${$j[3]}
</font>
</div>

<div class="bottom">
<font class="date">
{$j[6]}
</font>
</div>
</td>
{if $k == 0}
{elseif $k % 4 == 0}
{$tr}
{/if}
{/foreach}
</tr>
</table>
</body>
</html>
