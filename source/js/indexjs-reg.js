function checkPas(){
    let pas1 = document.getElementById('psw').value;
    let pas2 = document.getElementById('psw2').value;
    let msg = document.getElementById('message');

    if ( pas1 == pas2 ) {
        msg.style.color = 'green';
        msg.textContent = 'Пароли совпадают';
        return true;
    } else {
        msg.style.color = 'red';
        msg.textContent = 'Пароли не совпадают';
        return false;
    }
}