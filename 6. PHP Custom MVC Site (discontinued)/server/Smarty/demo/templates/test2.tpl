{config_load file="../configs/scripts.conf"}
<html>
<head>
 <title>
 </title>
 {#css#}
  </head>
  <body>
    		
		{foreach $pledge->value as $color}
   		 {$pledge->radio}{$color}"/>
         <label for="p1"><span></span></label>
		{/foreach}
		</ul>
        
        This is a test.
            
            
  </body>
</html>