const deleteBtn = document.querySelector('#btn__delete');
const containerVerif = document.querySelector('#container__verif');
const backBtn = document.querySelector('#verifBtn__back');

const modifBtn = document.querySelector('#btn__modif');
const cancelBtn = document.querySelector('#btn__cancel');
const uptadeBtn = document.querySelector('#btn__uptade');

deleteBtn.addEventListener('click', () => {
    containerVerif.style.display = 'flex';
})
backBtn.addEventListener('click', () => {
    containerVerif.style.display = 'none';
})



modifBtn.addEventListener('click', () => {
    console.log('frfr')
    modifBtn.style.display = 'none';
    cancelBtn.style.display = 'block';
    uptadeBtn.style.display = 'block';
})
cancelBtn.addEventListener('click', () => {
    cancelBtn.style.display = 'none';
    uptadeBtn.style.display = 'none';
    modifBtn.style.display = 'block';
})