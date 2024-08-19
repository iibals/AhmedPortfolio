$(document).ready(function () {
    "use strict";
    $(".image-big-Square").height($("#sliderImg").height());
    $(".Slider-Container").height($("#sliderImg").height());
});

// Make variable
var sliderImages    = Array.from($(".Slider-Container img")),
    slidersCount    = sliderImages.length,
    currentSlide    = 1,
    slidersNumber   = $(".image-slidersCount"),
    nextButton      = document.getElementById("nextButton"),
    prevButton      = document.getElementById("prevButton"),
    slidersNumberElement = document.getElementById("slidersNumberElement") ;

//----------------------------------------

// Handle CLick next an prev
$(nextButton).click(nextSlide);
$(prevButton).click(prevSlide);
var paginationParent = document.createElement("div"); // Create the parent 

    paginationParent.setAttribute("id","paginationParent"); // for make it unique
    paginationParent.setAttribute("class","container-MultipleImages"); // set class in parent for styles
    

for (var i = 1; i <= slidersCount; i++) {

  var paginationSiblings = document.createElement("div"); // create the box of elements 
    
    paginationSiblings.setAttribute("class","container-MultipleImages-parent");
    paginationSiblings.setAttribute("data-index",i);
//  ---------------------------------------------------------------------------------
// add images here
  var paginationImagesSrc = sliderImages[i - 1].getAttribute("src"), // for get all srcs imgs
      paginationImages = document.createElement("img");
    
      paginationImages.setAttribute("src",paginationImagesSrc)
        
//  --------------------------------------------------------------------------------- 
// add the shadow on hover
  var paginationShadow = document.createElement("div"); // the shadow in hover 
    
    paginationShadow.setAttribute("class","img-Shadow-projects-page"); // set class in the main of shadow
    
  var paginationShadowText = document.createElement("div"); // the text of shadow main
    
    paginationShadowText.setAttribute("class","Text-Shadow p-0 pb-1"); // the parent in text of shadow
    
  var paginationShadowTextDiv = document.createElement("div"); //  create the text div
    
    paginationShadowTextDiv.setAttribute("class","Real-Text-projects-page text-center"); // the text div 
    
  var paginationShadowTextDivSpan = document.createElement("span") // create the span in div 
  
    paginationShadowTextDivSpan.setAttribute("class","img-Text-projects-page"); // set class in span
    
    paginationShadowTextDivSpan.appendChild(document.createTextNode("it's WORKS!")); // set Text in our span
 // add all of them together 
    paginationShadowTextDiv.appendChild(paginationShadowTextDivSpan); // bottom to top
    paginationShadowText.appendChild(paginationShadowTextDiv);
    paginationShadow.appendChild(paginationShadowText);
// GREAT YOU DID IT <3
    
//  ---------------------------------------------------------------------------------
// add the counter here    
  var paginationSiblingsCounter = document.createElement("div"); // create the counter of Siblings

    paginationSiblingsCounter.setAttribute("class", "container-MultipleImages-parent-slider-count"); // set class in counter


    paginationSiblingsCounter.appendChild(document.createTextNode("#" + i)); // add indxed for choose it
//  ---------------------------------------------------------------------------------
// add it together to the parent
// HERE YOU HAVE TO ADD THE IMAEGS TO THE BOX **
    
    paginationSiblings.appendChild(paginationImages);
    paginationSiblings.appendChild(paginationShadow); // add the shadow to the box
    paginationSiblings.appendChild(paginationSiblingsCounter); // add the counter to the box 
    
    paginationParent.appendChild(paginationSiblings); // add the box to the parent of elements
    
};

$(".MultipleImages").append(paginationParent);

// create the box of pagination 
var paginationBox = document.getElementById("paginationParent"),
    paginationBullets = Array.from(document.querySelectorAll(".container-MultipleImages .container-MultipleImages-parent"));


// trigget function
theChecker();
// Make nextSlide Function
// for go to index with bullets 
for (var i = 0; i < paginationBullets.length; i++) {
    
    paginationBullets[i].onclick = function () {
        
        currentSlide = parseInt(this.getAttribute("data-index"));
        
        theChecker();
    }
}
function nextSlide() {
    
    "use strict";
    
    if (nextButton.classList.contains("disabledButton")) {
        // do nothing
        return false;
    } else {
        currentSlide++;
        
        theChecker();
    }
}
// Make prevtSlide Function

function prevSlide() {
    "use strict";
    if (prevButton.classList.contains("disabledButton")) {
        // do nothing
        return false;
        
    } else {
        currentSlide--;
        
        theChecker();
    }
}
function removeAllAcitve() {
    "use strict"
    // loop Through imgs 
    sliderImages.forEach(function(img) {
        img.classList.remove("active")
    })
}
// TheChecker function 
function theChecker() {
    
    "use strict";
    // Set the slider number
    slidersNumberElement.textContent = (currentSlide) + "/" + (slidersCount);
    
    // Remove all active classes
    
    removeAllAcitve()
    
    // set active class on current slide
    sliderImages[currentSlide - 1].classList.add("active");
    
    // set active class on current pagination
    paginationBox.children[currentSlide - 1].classList.add("active");
    
    // Check if current  slide is the first
    if (currentSlide === 1) {
        
        // add Disabled class to prevButton 
        
        prevButton.classList.add("disabledButton");
        
    } else {
        prevButton.classList.remove("disabledButton");
    }
    if (currentSlide === slidersCount) {
        
        // add Disabled class to nextButton
        nextButton.classList.add("disabledButton");
        
    } else {
        // remove it if we are not in the last 
        nextButton.classList.remove("disabledButton")
    }
}
// Remove all active classes from imgs and pagination
function removeAllAcitve() {
    "use strict"
    // loop Through imgs 
    
    sliderImages.forEach(function (img) {
        
        img.classList.remove("active");
        
    })
    paginationBullets.forEach(function (Bullets) {
        Bullets.classList.remove("active");
    })
}