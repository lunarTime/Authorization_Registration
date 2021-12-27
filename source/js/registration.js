const checkPas = () => {
    let pas1 = document.getElementById('psw').value;
    let pas2 = document.getElementById('psw2').value;
    let msg = document.getElementById('message');

    msg.style.color = pas1 === pas2 ? 'green' : 'red';
    msg.textContent = pas1 === pas2 ? 'Пароли совпадают' : 'Пароли не совпадают';
    return pas1 === pas2;
}