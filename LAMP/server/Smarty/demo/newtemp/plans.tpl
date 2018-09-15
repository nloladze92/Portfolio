{config_load file="../configs/css.conf"}

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
<table align="center">
<tr>
<td>
<div id="topofbrowseplans">
<table align="center">
<tr>
<td>
  <a href="../../../../index.php"><img src="../../../../images/goback.png" width="157px" height="40px" style="margin-left: -220px; margin-right: 150px;"/></a>
  
  {$username}
  
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
{if $dnst != true}
<table align="center" bgcolor="#FFFFFF" border="5" bordercolor="#666666">
<tr>
{foreach from = $length item = j key = k}
{if $k % 5 != 0}

<td width="175" height="305" align="center" class="z" style="vertical-align: top;">
<a href="smarty3.php?plan_id={$j[7]}" class="test"></a>
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

{elseif ($k % 5 == 0)}
{$tr}

<td width="175" height="305" align="center" class="z" style="vertical-align: top;">
<a href="smarty3.php?plan_id={$j[7]}" class="test"></a>
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

{/if}
{/foreach}
</tr>
</table>


</td>
</tr>
</table>

{/if}
<div align="center"><font class="sorry">{$text}</font></div>

</body>
</html>
