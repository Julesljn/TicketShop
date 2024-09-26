const containerInput = document.querySelectorAll('.container__input');
const input = document.querySelectorAll('.input');
const btn = document.querySelector('.btn');
const regex = /^(?=.*[a-zA-Z]).{4,}$/;



btn.addEventListener('click', () => {
    for(let i = 0; i < input.length; i++) {
        if(input[i].value == ''|| regex.test(input[3].value)) {
            containerInput[i].style.borderColor = 'red';
        } 
        
        }
})
