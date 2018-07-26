{config_load file="../configs/scripts.conf"}
<html>
<head>
 <title>
 </title>
 {#css#}
  </head>
  <body>
  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  {$plan_id}
  
  		{* $html->table *}
        <table><tr><td id="top">
        <img src="../../../../images/Screen.jpg" />
        {foreach from = $plan item = j}
        {$j}
        {/foreach}
        
        
        </td><td align="center" style="display: inline-block;
    vertical-align: top;">

        {$html->table}
        {if $percentage eq 0}
        {$html->z}
        {elseif $percentage > 0 && $percentage < 25}
        {$html->zz}
        {elseif $percentage >= 25 && $percentage < 50}
        {$html->t}
        {elseif $percentage >= 50  && $percentage < 75}
        {$html->f}
        {elseif $percentage >= 75  && $percentage < 100}
        {$html->s}
        {elseif $percentage >= 100}
        {$html->o}
        {/if}
        {$html->tablend}
        
        <div class="merged" id="pie">
  		<input type="range" class="money" max="100" min="0" step="1" 
     	id="fundedrange" value="{$percentage}" readonly />
		</div>

        
        <table id="table" style="margin-bottom: -15px;"><tr><td id="top">
        {foreach from = $array item = k}
        {if {$k} eq $array[4]}
        {$k}{$html->rowend}
        {elseif {$k} eq $array[9]}
        {$k}{$html->rowend}
        {elseif {$k} eq $array[14]}
		{$k}{$html->rowend}
        {else}
        {$k}
        {/if}
        {/foreach}
        </td></tr></table>
        
        
        {if $pledgeview[0] eq true && $pledgeview[1] eq true && $pledgeview[2] eq true && $pledgeview[3] eq true}
        
  		{$html->div}{$ids->div1}
        {$html->div}{$ids->div2}
      <h1 class="nudge" align="center">Pledge</h1>
	  </div>
      <form method="post" action="pledge.php">
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
            <input type="text" name="pledge" id="totalnumber" readonly placeholder="$0" />
            </div>
            {$html->tablend}
            
            {$html->table}
            <div id="slider" align="center">
			<input class="bar" type="range" max="40" min="0" step="0" id="rangeinput" value="20" onChange="rangevalue.value=value"/>
			<span class="highlight"></span>
			</div>
            {$html->rowend}
            <button id="submit" type="submit" onClick=""></button>
            </form>
            <!-- End of The Master Table -->
        {$html->tablend}
        {$pledge->script}
        </div>
        
        {elseif $pledgeview[0] eq false}
         {$html -> login}
        
        {elseif $pledgeview[1] eq false}
         {$html -> loc}
         
         {elseif $pledgeview[2] eq false}
         {$html -> loc2}
         
         {elseif $pledgeview[3] eq false}
         {$html -> thankyou}
         
        {/if}
        
        
       <!-- End of the super table -->
       {$html->tablend}
       {$pledge->script2}                
  </body>
</html>