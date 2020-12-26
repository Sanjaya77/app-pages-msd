

let addClientItem = document.getElementById('add-cl-item');
let orderSupItem = document.getElementById('add-sup-product');
let addExItem = document.getElementById('ad-ex-product');
let clientItem = document.getElementById('cl-item-info');
let supItem = document.getElementById('sup-item-info');
let exItem = document.getElementById('ex-item-info');
let closeItem = document.getElementById('close-item');
let closeSup = document.getElementById('close-sup');
let closeEx = document.getElementById('close-ex');




addClientItem.checked = false;
orderSupItem.checked = false;
addExItem.checked = false;


addClientItem.addEventListener('change', function () {
    if (addClientItem.checked == true) {
        clientItem.classList.add('show');
    } else {
        addClientItem.checked = false;
        clientItem.classList.remove('show');
    }
});

closeItem.addEventListener('click', () => {
    // clientItem.classList.remove('show');
    setTimeout(function () { clientItem.classList.remove('show');; }, 100);
    addClientItem.checked = false;
});

orderSupItem.addEventListener('change', function () {
    if (orderSupItem.checked == true) {
        supItem.classList.add('show');
    } else {
        addClientItem.checked = false;
        supItem.classList.remove('show');
    }
});

closeSup.addEventListener('click', () => {
    // clientItem.classList.remove('show');
    setTimeout(function () { supItem.classList.remove('show');; }, 100);
    orderSupItem.checked = false;
});


addExItem.addEventListener('change', function () {
    if (addExItem.checked == true) {
        exItem.classList.add('show');
    } else {
        addClientItem.checked = false;
        exItem.classList.remove('show');
    }
});

closeEx.addEventListener('click', () => {
    // clientItem.classList.remove('show');
    setTimeout(function () { exItem.classList.remove('show');; }, 100);
    addExItem.checked = false;
});




// let clientItem = document.getElementById('client-item');

// clientItem.checked =false;

// clientItem.addEventListener('change',function(){

//     if(clientItem.checked == true){
//         this.parentElement.nextElementSibling.classList.add('show');
//     }else{
//         this.parentElement.nextElementSibling.classList.remove('show');
//     }
//         // this.parentElement.nextElementSibling.classList.toggle('show');



// });

// let addExistProduct = document.getElementById('existing-product');
// let addExistProductInput = document.getElementById('ex-product-id');

// addExistProduct.checked =false;

// addExistProduct.addEventListener('change',function(){

//     if(addExistProduct.checked == true){
//         addExistProductInput.disable = false;
//     }else{
//         addExistProductInput.disable = true;
//     }
//     return addExistProductInput;
//         // this.parentElement.nextElementSibling.classList.toggle('show');



// });