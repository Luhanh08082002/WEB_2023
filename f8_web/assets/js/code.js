// const header = document.querySelector('.header')
// const footer = document.querySelector('.footer')
// fetch('/Resources/layouts/header.html')
// .then(res=>res.text())
// .then(data=>{
// 	header.innerHTML= data
	
// })
// fetch('/Resources/layouts/footer.html')
// .then(res=>res.text())
// .then(dat=>{
// 	footer.innerHTML= dat
	
// })


const quanticy_input = document.getElementById("quanticy__input")
qty__minus = document.getElementById('qty__minus'),
qty__plus = document.getElementById('qty__plus');
let a = 1;
qty__minus.addEventListener('click' , ()=>{
	if(a > 1){
		a--;	
	  quanticy_input.innerText = a;
	}

})
qty__plus.addEventListener('click' , ()=>{
	if(a <100){
		a++;
	quanticy_input.innerText = a;
	}
	
})


// end

const modal_close = document.querySelector('.modal-icon-close');
const modal = document.querySelector('.modal');
const modal_contact = document.querySelector('.js__modal-contact');
const js__modal_container = document.querySelector('.js__modal-container');

function showmodal() {
	modal.classList.add('js__open')
	
}

function hidden_modal() {
	modal.classList.remove('js__open')
}

modal_contact.addEventListener('click', showmodal)
modal_close.addEventListener('click', hidden_modal)
modal.addEventListener('click', hidden_modal)
js__modal_container.addEventListener('click', function (e) {
	e.stopPropagation();
})


// quanticy 

