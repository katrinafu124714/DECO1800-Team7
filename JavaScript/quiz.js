
// below code are refer to https://codepen.io/Coding_Journey/pen/YzKpLvE

const draggableElements = document.querySelectorAll(".draggable");
const droppableElements = document.querySelectorAll(".droppable");

draggableElements.forEach(elem => {
  elem.addEventListener("dragstart", dragStart); // Fires as soon as the user starts dragging an item - This is where we can define the drag data
});

droppableElements.forEach(elem => {
  elem.addEventListener("dragenter", dragEnter); // Fires when a dragged item enters a valid drop target
  elem.addEventListener("dragover", dragOver); // Fires when a dragged item is being dragged over a valid drop target, repeatedly while the draggable item is within the drop zone
  elem.addEventListener("dragleave", dragLeave); // Fires when a dragged item leaves a valid drop target
  elem.addEventListener("drop", drop); // Fires when an item is dropped on a valid drop target
});

// Drag and Drop Functions

//Events fired on the drag target

function dragStart(event) {
  event.dataTransfer.setData("text", event.target.id); // or "text/plain" but just "text" would also be fine since we are not setting any other type/format for data value
}

//Events fired on the drop target

function dragEnter(event) {
  if(!event.target.classList.contains("dropped")) {
    event.target.classList.add("droppable-hover");
  }
}

function dragOver(event) {
  if(!event.target.classList.contains("dropped")) {
    event.preventDefault(); // Prevent default to allow drop
  }
}

function dragLeave(event) {
  if(!event.target.classList.contains("dropped")) {
    event.target.classList.remove("droppable-hover");
  }
}

function drop(event) {
  event.preventDefault(); // This is in order to prevent the browser default handling of the data
  event.target.classList.remove("droppable-hover");
  const draggableElementData = event.dataTransfer.getData("text"); // Get the dragged data. This method will return any data that was set to the same type in the setData() method
  const droppableElementData = event.target.getAttribute("data-draggable-id");
  const isCorrectMatching = draggableElementData === droppableElementData;
  if(isCorrectMatching) {
    const draggableElement = document.getElementById(draggableElementData);
    event.target.classList.add("dropped");
    event.target.style.backgroundColor = window.getComputedStyle(draggableElement).color;
    draggableElement.classList.add("dragged");
    draggableElement.setAttribute("draggable", "false");
    event.target.insertAdjacentHTML("afterbegin", `<i class="fas fa-${draggableElementData}"></i>`);
  }
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("quiz_content");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";  
}

// below code are refer to https://www.imooc.com/qadetail/218490

window.alert = function(str) 
{ 
var shield = document.createElement("DIV"); 
shield.id = "shield"; 
shield.style.position = "absolute"; 
shield.style.left = "0px"; 
shield.style.top = "0px"; 
shield.style.width = "100%"; 
shield.style.height = document.body.scrollHeight+"px"; 
shield.style.textAlign = "center"; 
shield.style.zIndex = "25"; 
//shield.style.filter = "alpha(opacity=0)"; 
var alertFram = document.createElement("DIV"); 
alertFram.id="alertFram"; 
alertFram.style.position = "absolute"; 
alertFram.style.left = "50%"; 
alertFram.style.top = "95%"; 
alertFram.style.marginLeft = "-225px"; 
alertFram.style.marginTop = "-75px"; 
alertFram.style.width = "450px"; 
alertFram.style.height = "150px"; 
alertFram.style.background = "#ff0000"; 
alertFram.style.textAlign = "center"; 
alertFram.style.lineHeight = "150px"; 
alertFram.style.zIndex = "300"; 
strHtml = "<ul style=\"list-style:none;margin:0px;padding:0px;width:100%\">\n"; 
strHtml += " <li style=\"background:#DD828D;text-align:left;padding-left:20px;font-size:14px;font-weight:bold;height:25px;line-height:25px;border:1px solid #F9CADE;\"> </li>\n"; 
strHtml += " <li style=\"background:#fff;text-align:center;font-size:30px;height:120px;line-height:120px;border-left:1px solid #F9CADE;border-right:1px solid #F9CADE;\">"+str+"</li>\n"; 
strHtml += " <li style=\"background:#FDEEF4;text-align:center;font-weight:bold;height:25px;line-height:25px; border:1px solid #F9CADE;\"><input style=\"font-size:20px;\" type=\"button\" value=\"OK\" onclick=\"doOk()\" /></li>\n"; 
strHtml += "</ul>\n"; 
alertFram.innerHTML = strHtml; 
document.body.appendChild(alertFram); 
document.body.appendChild(shield); 
var ad = setInterval("doAlpha()",5); 
this.doOk = function(){ 
alertFram.style.display = "none"; 
shield.style.display = "none"; 
} 
alertFram.focus(); 
document.body.onselectstart = function(){return false;}; 
}

function notCorrect(){
  alert("The answer is not correct!");
}

function correct(){
  alert("The answer is correct!");
}
