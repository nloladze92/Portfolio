{config_load file="../configs/scripts.conf"}
<html>
<head>
 <title>
 </title>
 {#css#}
  </head>
  <body>
  
        {$pledge->buttons}
        
		{foreach $pledge->value as $color}
         {if $color eq '30'}
         
   		 {$pledge->radio}{$color}"/>
         <label for="p1"><span></span></label>
         </td></tr><tr><td>
         
         {elseif $color eq '150'}
         
          {$pledge->radio}{$color}"/>
          <label for="p1"><span></span></label>
         </td></tr><tr><td>

         {else}
    	 {$pledge->radio}{$color}"/>
         <label for="p1"><span></span></label>
		 {/if}
		{/foreach}
     	{$pledge->slider}
        </div>
        </div>
        
        {$pledge->scripts}
            
  </body>
</html>