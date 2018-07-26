// JavaScript Document

var imported = document.createElement('script');
imported.src = 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js';
document.head.appendChild(imported);


 $(document).ready(function() {
		  
		  $("input:radio[name=rr]").click(function() {
    	  var $pledge = $('input[name="rr"]:checked').val();
		  update();
		  });

          $("#slider").click(function() {
          var $slider = $("#rangeinput").val();
                update();
          });
      });

      //changed. now with parameter
      function update(val, pledge) {
        //changed. Now, directly take value from ui.value. if not set (initial, will use current value.)
        $slider = $("#rangeinput").val();
		var $pledge = $('input[name="rr"]:checked').val();
		var total = $pledge * $slider;
		var check = total.toString();
		
		if (check.length == 4) {
			var number = "$" + splitValue(check, 1)
		} else if (check.length == 5) {
			var number = "$" + splitValue(check, 2)
		} else {
			var number = "$" + total;
		}
		
		function splitValue(value, index) {
    	return value.substring(0, index) + "," + value.substring(index);
		}
		
		$.post('demo1.php',
		{total: total}
		 );
	
		 $("#totalnumber").val(number);
		 $("#totalnumber-label").text(number);
      }
	  