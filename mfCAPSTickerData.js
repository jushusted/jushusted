// action that occurs when the 'getQuote' button is pressed

function appendItem(j,v,e) {
  
}


$("#getQuote").bind("click", function () {
  //clear old data
     $('#result').html("");
  // Get the value of the ticker field
    var ticker = $("#ticker").val();
     ticker = ticker.replace(/,/g , "%2C");
    // Construct the URL for the Yahoo Pipe for CAPS ticker query
    var url = "http://pipes.yahoo.com/pipes/pipe.run?_id=62ec2aea2f792b4432405ad7310cea4d&_render=json&ticker=" + ticker;

    // Get the JSON result
    $.getJSON(url, function (data) {
var i = 0;      
var tickerCount = data.value.items.length;
      for(i;i < tickerCount;i++){
        var tickerObject = data.value.items[i];
        var newList = $("<ul>" +
                        tickerObject.title +
                        "</ul>");
        $('#result').append(newList);

        for(var j in tickerObject){    
          //Append each result
          $(newList).append('<li>' + j + ": " + tickerObject[j] + '</li>');
        }
      }     
    });
});
