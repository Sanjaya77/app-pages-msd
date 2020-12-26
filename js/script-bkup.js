const toggle = document.getElementById('toggle');

// Toggle nav
toggle.addEventListener('click', () =>
  document.body.classList.toggle('show-nav')
);

//Dashboard Nav Dropdown

const className = document.getElementsByClassName('drop-btn');
const dropList = document.querySelector('.dropdown');
const triangle = document.querySelector('.triangle');


let dropDown = function() {
   dropList.classList.toggle('show');
   triangle.classList.toggle('rotate');
};

for (var i = 0; i < className.length; i++) {
  className[i].addEventListener('click', dropDown, false);
}

// //Client View Tabs
// const classTab = document.getElementsByClassName('tablinks');
// const classView = document.getElementsById('client-info');
// let openTab = function(){

//   classView.classList.toggle('show-flex');

// }
// for (var i = 0; i < classTab.length; i++) {
//   classTab[i].addEventListener('click', openTab, false);
// }

