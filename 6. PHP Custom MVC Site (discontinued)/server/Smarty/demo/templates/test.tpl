{config_load file="../configs/setting.conf"}
<html>
  <head>
    <title>{#pageTitle#}</title>
  </head>
  <body bgcolor="{#bodyColor#}">
    id : {$contact->id} <br>
    name : {$contact->name} <br>    
    email : {$contact->email} <br>    
    phone : {$contact->phone} <br>    
  </body>
</html>