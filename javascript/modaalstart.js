var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn");
var spans = document.querySelectorAll(".close");
var buttons = document.querySelectorAll('.toggleModalButton');
var modals = document.querySelectorAll('.myModal');
var btntest = {};
var modaltest = {};
var spantest = {};
var i = 0;
var ii = 0;
var iii = 0;

buttons.forEach(function(button){
  i = i + 1;
  button.id = `btn-${i}`;
  btntest[i] = document.getElementById(`btn-${i}`);
});

modals.forEach(function(modal){
  ii = ii + 1;
  modal.id = `myModal-${ii}`;
  modaltest[ii] = document.getElementById(`myModal-${ii}`);
});

spans.forEach(function(span){
  iii = iii + 1;
  span.id = `span-${iii}`;
  spantest[iii] = document.getElementById(`span-${iii}`);
});

function openModal(key){
  // console.log(key);
  modaltest[key].style.display = "block";
};

function closeModal(key){
  modaltest[key].style.display = "none";
 modaltest[key].window.onclick = function() {
      if (event.target == modaltest[key]) {
          modal.style.display = "none";
      }
}
}
Object
  .keys(btntest)
  .map(function(key){
    // console.log(btntest[key]);
    btntest[key].addEventListener('click', function(){
      openModal(key);
    });
  });

Object
  .keys(spantest)
  .map(function(key){
    spantest[key].addEventListener('click', function(){
      closeModal(key);
    });
  });

// span.addEventListener('click', closeModal);

// btn.onclick = function() {
//     modal.style.display = "block";
// }

// span.onclick = function() {
//     modal.style.display = "none";
//
// }
