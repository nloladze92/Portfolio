<!DOCTYPE html>
<html>
    <head>
        <title>{$title}</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
    
    <link rel="stylesheet" type="text/css" href="../../../styles_styles/stylesheets/sliderstyle.css" />
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">


    
    </head>
    
    <body>
  

        <div id="show">
            <h1>Easy CSS3 Checkboxes and Radio Buttons</h1>
            
            {$table}
            
            <form class="form-horizontal form-pricing" role="form" action="../pledge.php">
            <!-- The Master Table -->
            <table cellspacing="10px">
            <tr>
            <td>
            
            <table>
            <tr>
            <td>
            <input type="radio" id="p1" name="rr" value="10" class="p10" />
            <label for="p1"><span></span></label>
            <input type="radio" id="p2" name="rr" value="15" class="p15" />
            <label for="p2"><span></span></label>
            <input type="radio" id="p3" name="rr" value="30" class="p30" />
            <label for="p3"><span></span></label>
            </td>
            </tr>
            <tr>
            <td>
            <input type="radio" id="p4" name="rr" value="50" class="p50" />
            <label for="p4"><span></span></label>
	        <input type="radio" id="p5" name="rr" value="100" class="p100" />
            <label for="p5"><span></span></label>
            <input type="radio" id="p6" name="rr" value="150" class="p150" />
            <label for="p6"><span></span></label>
            </td>
            </tr>
            <tr>
            <td>
            <input type="radio" id="p7" name="rr" value="200" class="p200" />
            <label for="p7"><span></span></label>
            <input type="radio" id="p8" name="rr" value="300" class="p300" />
            <label for="p8"><span></span></label>
            <input type="radio" id="p9" name="rr" value="500" class="p500" />
            <label for="p9"><span></span></label>
            </td>
            </tr>
            
            <tr>
            <td>
            
            
            <div class="price-slider">
            <h4 class="great">Duration</h4>
            <font class="numberfont">Minimum of One Month Required</font>
            <div class="col-sm-12">
              <div id="slider2"></div>
            </div>
          </div>
          
            
            </td>
            </tr>
            </table>
          
          	</td>
            <!-- End of The First Table -->
            
            <!-- Start of The Second Table -->
            <td> 
            <div class="price-form">
      		<div class="form-group">
            <label for="total" class="col-sm-6 control-label"><strong>Total: </strong></label>
            <input type="hidden" id="total" class="form-control">
            <div class="col-sm-6">
            <p class="price lead" id="total-label"></p>
            </div>
            </div>
            </div>
            <div align="center">
            <button type="submit" value="submit">submit</button>
            </div>
            </td>
            </tr>
            </table>
            <!-- End of The Master Table -->
            
            </form>
        </div>
        
        
 
        
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

        <script>
      $(document).ready(function() {
		  
		  $("input:radio[name=rr]").click(function() {
    	  var $pledge = $('input[name="rr"]:checked').val();
		  update();
		  });

          $("#slider2").slider({
              range: "min",
              animate: true,
              value:1,
              min: 1,
              max: 36,
              step: 1,
              slide: function(event, ui) {
                update(2,ui.value); //changed
              }
          });

          //Added, set initial value.
          $("#duration").val(1);
          $("#duration-label").text(1);
		  
		  $("#total").val(10);
          $("#total-label").text(10);
		  

          update();
      });

      //changed. now with parameter
      function update(slider,val, pledge) {
        //changed. Now, directly take value from ui.value. if not set (initial, will use current value.)
	    var $duration = slider == 2?val:$("#duration").val();
		
			
        $duration = $("#slider2").slider("value");
		
		var $pledge = $('input[name="rr"]:checked').val();
		
		var total = $pledge == null?val:$pledge * $duration;
		
		$.post('demo1.php',
		{total: total}
		 );
		
		 
         $("#duration").val($duration);
         $("#duration-label").text($duration);
		 
		 $("#total").val(total);
		 $("#total-label").text(total);
		 
		// $( "#total" ).val($total);
        // $( "#total-label" ).text($total);
         $('#slider2 a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$duration+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
      }
	  
    </script>

        
    </body>
</html>
