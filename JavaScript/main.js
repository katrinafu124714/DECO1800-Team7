// $.getJSON('https://apps.des.qld.gov.au/species/?op=getclassnames&kingdom=animals', function(data) {
//     var data = $(data.Family)
        
//     var text = `Date: ${JSON.stringify(data.Family)}<br>
//                 Time: ${data.time}<br>
//                 Unix time: ${data.milliseconds_since_epoch}`
                
    
//     $(".mypanel").html(text);
//     console.log(data)
// });

// automatic slideshow
// This code is inspired by an example found at https://www.w3schools.com/howto/howto_js_slideshow.as

var index = 0;
autoSlider();

function autoSlider() {
  var i;
  var slides = document.getElementsByClassName("autoslider");
  var time = 4500;

  // iterate the length of slide and display as none
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  index++;

  // when the index of slide larger than the total number slides set the index as 1 which equal to 
  // the first slide
  if (index > slides.length) {
    index = 1
  }

  // show the silde 
  slides[index-1].style.display = "block";

  setTimeout(autoSlider, time); // duration of slide change
}

new Splide( '.splide', {
	type: 'loop',
	perPage: 3,
	perMove: 1,
} ).mount();
