<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>

<style>

.opacity {
	margin: 0px;
    padding: 0px;
    background-color: rgba(0,0,0,0.0);
}

.unselectable {
    /* For Opera and <= IE9, we need to add unselectable="on" attribute onto each element */
    /* Check this site for more details: http://help.dottoro.com/lhwdpnva.php */
    -moz-user-select: none; /* These user-select properties are inheritable, used to prevent text selection */
    -webkit-user-select: none;
    -ms-user-select: none; /* From IE10 only */
    user-select: none; /* Not valid CSS yet, as of July 2012 */

    -webkit-user-drag: none; /* Prevents dragging of images/divs etc */
    user-drag: none;
}

</style>
</head>

<link rel="stylesheet" type="text/css" href="../styles_styles/stylesheets/selectionsideframe.css">

<body class="opacity">

<table align="center">
<tr>
<td align="center">
<img src="../styles_styles/blankprofile.jpg" width="200" height="120" align="texttop" class="unselectable" />
<br />
<font color="#FFFFFF">
<br />
Welcome, <?php echo $_SESSION['user_name']; ?>. 

<br />
<br />


Searching out of: <div id="yourinfo" align="center"></div> 

    <script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAAp04yNttlQq-7b4aZI_jL5hQYPm-xtd00hTQOC0OXpAMO40FHAxQMnH50uBbWoKVHwgpklyirDEregg"></script>
    <script type="text/javascript">
        if(google.loader.ClientLocation)
        {
            visitor_city = google.loader.ClientLocation.address.city;
            visitor_region = google.loader.ClientLocation.address.region;
            
            document.getElementById('yourinfo').innerHTML = visitor_city + ', ' + visitor_region + '';
        }
        else
        {
            document.getElementById('yourinfo').innerHTML = '<p> Proxy </p>';
        }
    </script>
    
    <br />
    <br />
    
    Please measure the square feet of the location you chose to your right. <b>Click</b> around the building and then answer the questions and you will be proceeded to make
    a "Consumer Awareness" Plan for the business.
    
    </font>
    
</td>
</tr>
</table>
</body>
</html>