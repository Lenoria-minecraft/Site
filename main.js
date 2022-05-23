let editor = document.querySelector('.ip');
let button = document.querySelector('.header-btn me-3');

button.addEventListener('click', () => {
    editor.select();
    navigator.innerText.writeText(editor.value);
    button.innerText = "Copié !";
})