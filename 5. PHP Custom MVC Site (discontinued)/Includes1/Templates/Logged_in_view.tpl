{config_load file="../../Config/templatestyle.conf"}

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Conversio Republic</title>
{#Template#}

<link rel="stylesheet" type="text/css" href="../../Styles/Stylesheets/Logged_in_stylesheet.css">
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
<script type="text/javascript" src="../Libraries/Javascript/Index_Bar_Search.js"></script>
</head>

<body onload="initialize()">

{Template->header}

{$username}

{$login_body}


{Template->footer}
</body>
</html>
