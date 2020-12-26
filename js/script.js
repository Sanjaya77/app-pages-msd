const toggle = document.getElementById('toggle');

// Toggle nav
toggle.addEventListener('click', () =>
  document.body.classList.toggle('show-nav')
);

//Dashboard Nav Dropdown

const dropBtn1 = document.getElementById('drop-btn-1');
const dropBtn2 = document.getElementById('drop-btn-2');



dropBtn1.addEventListener('click', function () {
  this.nextElementSibling.classList.toggle('show');
  this.lastElementChild.childNodes[1].classList.toggle('rotate');
});



dropBtn2.addEventListener('click', function () {
  this.nextElementSibling.classList.toggle('show');
  this.lastElementChild.childNodes[1].classList.toggle('rotate');

});


//JOB DUE DATES

let dueAlert = document.getElementById('due-alert');
let jobDueDate = document.getElementById('due-date').innerText;


let dPatern = /(\d{2})\/(\d{2})\/(\d{4})/;

let dueDate = new Date(jobDueDate.replace(dPatern, '$3-$2-$1'));

dueDate = new Date(dueDate.getTime() + dueDate.getTimezoneOffset() * 60000);

let toDay = new Date();

let timeDif = dueDate.getTime() - toDay.getTime();
let noOfDays = Math.trunc(timeDif / (1000 * 3600 * 24));

if (noOfDays == 0) {

  dueAlert.innerHTML = `<span style="color:blue;">Due Today</span>`;

} else if (noOfDays > 0) {

  dueAlert.innerHTML = `<span style="color:green;"> Due in ${noOfDays} Days </span>`;

} else {
  dueAlert.innerHTML = `<span style="color:red;"> Overdue by ${Math.abs(noOfDays)} Days </span>`;
}