const mailClick = document.querySelector('.ContactMail'),
    copyMsg = document.querySelector('.CopyMessage'),
    mailContact = 'almadyne.music@gmail.com';
let showTimer,
    fadeOutTimer,
    timeStart,
    timeEnd,
    timeCycleDiff = Date.now();

mailClick.addEventListener('click', () => {
    navigator.clipboard.writeText(mailContact) /* Копирование в буфер (возвращает промис) */
        .then(() => {
            timeStart = Date.now();
            timeCycleDiff = timeStart - timeCycleDiff;
            console.log('Прошло времени с последнего клика: ' + timeCycleDiff);
            timeCycleDiff = timeStart;

            clearTimeout(showTimer);
            clearTimeout(fadeOutTimer);
            copyMsg.classList.remove('FadeIn');
            copyMsg.classList.remove('FadeOut');
            copyMsg.innerHTML = 'E-mail скопирован';
            copyMsg.style.display = 'inline-block';

            return new Promise(resolve => setTimeout(() => {
                resolve(copyMsg.classList.add('FadeIn'))
            }, 20)); // Задержка для срабатывания анимации класса FadeIn
        })
        .finally(() => {
            showTimer = setTimeout(function() {
                copyMsg.classList.remove('FadeIn');
                copyMsg.classList.add('FadeOut');

                fadeOutTimer = setTimeout(function() {
                    copyMsg.style.display = 'none';

                    timeEnd = Date.now() - timeStart;
                    console.log('Длительность показа сообщения: ' + timeEnd);
                }, 500);
            }, 2000);
        })
        .catch(error => {
            console.log('Something went wrong...\n', error);
        });
});
