{config_load file="../configs/css.conf"}

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>

{#css#}

   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   
</head>

<body bgcolor="#E2E2E2">
<table align="center">
<tr>
<td id="topbackground" align="center">
<div id='cssmenu'>
<ul>
   <li class='has-sub'><a href='#'><span>Date</span></a>
      <ul>
         <li><a href='#'><span>People</span></a></li>
         <li><a href='#'><span>&#8593; Price</span></a></li>
         <li class='last'><a href='#'><span>Backing</span></a></li>
      </ul>
   </li>
</ul>
</div>
<br />
<font color="#999999" style="margin-bottom: 15px;">
Here you can browse various plans made by users. You'll be able to pledge on plans if they are in your city <br/>
and you are registered and browsing from there. If you have a proxy, please disable it to be able to pledge.
</font>
</td>
</tr>

<tr>
<td>
<p align="center"><font id='sorry'>{$text}</font></p>
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
</td>
</tr>
</table>

</body>
</html>
