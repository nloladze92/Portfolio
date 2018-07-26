{config_load file="../configs/scripts.conf"}
<html>
<head>
 <title>
 </title>
 {#css#}
  </head>
  <body>
  
  		{* $html->table *}
        <table><tr><td id="top">
        {foreach from = $plan item = j}
        {$j}
        {/foreach}
        {$html->td}
        
        <table id="table"><tr><td id="top">
        {foreach from = $array item = k}
        {if {$k} eq $array[4]}
        {$k}{$html->rowend}
        {elseif {$k} eq $array[5]}
        {$k}{$html->rowend}
        {elseif {$k} eq $array[14]}
		{$k}{$html->rowend}
        {else}
        {$k}
        {/if}
        {/foreach}
        </td></tr></table>
        
        
  		{$html->div}{$ids->div1}
        {$html->div}{$ids->div2}
      <h1 class="nudge" align="center">Pledge</h1>
	  </div>
      <!-- beginning of the button table -->
	  {$html->table}
	  {$html->table}
			{foreach from = $pledge->value key = k item = i}
         		{if {$i} eq '30'}
   		 			{$pledge->radio[0]}{$i}" id="{$k}"/>
        			{$pledge->radio[1]}"{$k}">
         			{$html->span}{$html->label}
                    {$html->rowend}
         		{elseif {$i} eq '150'}
          			{$pledge->radio[0]}{$i}" id="{$k}"/>
          			{$pledge->radio[1]}"{$k}">
          			{$html->span}{$html->label}
		  			{$html->rowend}
         		{else}
    				{$pledge->radio[0]}{$i}" id="{$k}"/>
         			{$pledge->radio[1]}"{$k}">
         			{$html->span}{$html->label}
		 		{/if}
			{/foreach}
        {$html->tablend}
      	{$html->td}
        
        
        
        {$html->div}{$ids->div3}
            <input type="text" id="totalnumber" readonly placeholder="$0" />
            </div>
            {$html->tablend}
            
            {$html->table}
            <div id="slider" align="center">
			<input class="bar" type="range" max="40" min="0" step="0" id="rangeinput" value="20" onChange="rangevalue.value=value"/>
			<span class="highlight"></span>
			<output id="rangevalue">20</output>
			</div>
            {$html->rowend}
            <button id="submit" type="submit" onClick=""></button>
            <!-- End of The Master Table -->
        {$html->tablend}
        </div>
       <!-- End of the super table -->
       {$html->tablend}
       {$pledge->scripts}              
  </body>
</html>