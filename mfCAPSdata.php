<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<meta charset=utf-8 />
<title>CAPS info from API</title>
<script>
// action that occurs when the 'getQuote' button is pressed
$("#getQuote").bind("click", function () {
  //clear old data
     $('#result').html("");
  // Get the value of the ticker field
    var ticker = $("#ticker").val();
    // Construct the URL for the Yahoo Pipe for CAPS ticker query
    var url = "http://pipes.yahoo.com/pipes/pipe.run?_id=62ec2aea2f792b4432405ad7310cea4d&_render=json&ticker=" + ticker;

    // Get the JSON result
    $.getJSON(url, function (data) {
var i = 0;      
var listLength = data.value.items.length;
      
      for(i;listLength;i++){
        var entry = "listItem" + i;
        $('#result').append('<ul id="' + entry + '">' +i+ '</ul>');
        $.each(data.value.items[i], function (index, item) {        
          //Append each result        
          $("#" + entry).append('<li>' + index + ': ' + item + '</li>');                      
      
        });         
      }     
    });
});
</script>
</head>
<body>
    <div>
    Ticker Symbol:
    <input type="text" name="ticker" id="ticker">
    <button id="getQuote">Click</button>
  </div>
    <div >
        <div id='result'></div>
    </div>
</body>
</html>
  
