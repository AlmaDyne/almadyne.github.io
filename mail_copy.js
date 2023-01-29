let mailClick = document.querySelector('.ContactMail'),
    copyMsg = document.querySelector('.CopyMessage'),
    mailContact = 'almadyne.music@gmail.com';
var fTimer = dTimer = t1 = t2 = tD = null;

mailClick.addEventListener('click', () => {
    navigator.clipboard.writeText(mailContact) /* Команда копирования в буфер */
    .then(() => {
        clearTimeout(fTimer);
        clearTimeout(dTimer);
        t1 = Date.now();
        console.log('Начало: ' + (t1 - Date.now()));
        copyMsg.classList.remove('FadeOut');
        copyMsg.innerHTML = 'E-mail скопирован, хо!';
        copyMsg.style.display = 'inline-block';
        copyMsg.classList.add('FadeIn');
        fTimer = setTimeout(function() {
            copyMsg.classList.remove('FadeIn');
            copyMsg.classList.add('FadeOut');
            dTimer = setTimeout(function() {
                copyMsg.style.display = 'none';
                t2 = Date.now();
                tD = t2 - t1;
                console.log('Разница: ' + tD);
            }, 500);
        }, 3000);
    })
    .catch(error => {
        console.log('Something went wrong...', error);
    });
});
