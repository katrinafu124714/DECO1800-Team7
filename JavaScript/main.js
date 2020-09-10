$.getJSON('https://apps.des.qld.gov.au/species/?op=getclassnames&kingdom=animals', function(data) {
    var data = $(data.Family)
        
    var text = `Date: ${JSON.stringify(data.Family)}<br>
                Time: ${data.time}<br>
                Unix time: ${data.milliseconds_since_epoch}`
                
    
    $(".mypanel").html(text);
    console.log(data)
});