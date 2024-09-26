const deleteBtn = document.querySelector('#btn__delete');
const containerVerif = document.querySelector('#container__verif');
const backBtn = document.querySelector('#verifBtn__back');

deleteBtn.addEventListener('click', () => {
    console.log('fefef')
    containerVerif.style.display = 'flex';
})
backBtn.addEventListener('click', () => {
    containerVerif.style.display = 'none';
})