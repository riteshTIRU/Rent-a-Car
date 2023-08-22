let menu= document.querySelector('#menu-btn');
let navbar= document.querySelector('.navbar');

menu.onclick = () =>{

	menu.classList.toggle('fa-times');
}
document.querySelector("#login-btn").onclick = () => {
	document.querySelector('.login-form-container').classList.toggle('active');
	document.querySelector('.reg-form-container').classList.remove('active');
}

document.querySelector("#reg-btn").onclick = () => {
	document.querySelector('.reg-form-container').classList.toggle('active');
	document.querySelector('.login-form-container').classList.remove('active');
}

document.querySelector("#close-reg-form").onclick = () => {
	document.querySelector('.reg-form-container').classList.remove('active');
}
document.querySelector("#close-login-form").onclick = () => {
	document.querySelector('.login-form-container').classList.remove('active');
}

