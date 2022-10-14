var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("slide");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  slides[slideIndex - 1].style.display = "block";
  setTimeout(showSlides, 2000);
}



// let loadMoreBtn = document.querySelector('.packages .load-more .btn');
// let currentItem = 3;

// loadMoreBtn.onclick = () =>{
//    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
//    for (var i = currentItem; i < currentItem + 3; i++){
//       boxes[i].style.display = 'inline-block';
//    };
//    currentItem += 3;
//    if(currentItem >= boxes.length){
//       loadMoreBtn.style.display = 'none';
//  }  }
