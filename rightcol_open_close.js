const RightCol = document.querySelector('.RightColumn'),
    RightColButton1 = document.querySelector('.RightColumnButton1'),
    RightColButton2 = document.querySelector('.RightColumnButton2');
let i = 0;

setTimeout(function() {
    RightCol.style.display = 'block';
    RightCol.classList.add('FadeIn');
}, 5000);

RightColButton1.onclick = function() {
    RightCol.classList.remove('FadeIn');
    RightCol.classList.add('FadeOut');

    i = i + 1;
    console.log('Хрень закрыта '+ i + ' раз(а).');

    setTimeout(() => RightCol.style.display = 'none', 500);

    setTimeout(function() {
        RightCol.classList.remove('FadeOut');
        RightCol.style.display = 'block';
        RightCol.classList.add('FadeIn');

        if (i >= 2) RightColButton2.style.display = 'block';
    }, 60000);
};

RightColButton2.onclick = function() {
    RightCol.classList.remove('FadeIn');
    RightCol.classList.add('FadeOut');
    console.log('Хрень закрыта навсегда на ' + (i + 1) + '-й раз!');
    
    setTimeout(() => RightCol.style.display = 'none', 500);
};
