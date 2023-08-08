'use strict';

const n = document.querySelectorAll('.MusicAlbum').length; /* Количество альбомов */
var hTimer = null,
    fTimer = null;

for (let i = 1; i <= n; i++) {
    let linkToAnchorMA = document.querySelector('.LinkToAnchorMA' + i),
        PlayMA = document.querySelector('.PlayMA' + i);
//      Player = document.querySelector('.PlayerAlbum' + i);

    linkToAnchorMA.addEventListener('click', () => {
        clearTimeout(fTimer);
        clearTimeout(hTimer);

        PlayMA.classList.remove('FadeOut');
        PlayMA.style.visibility = "visible";
        PlayMA.classList.add('FadeIn');

        console.log('Выбран альбом №' + i);

        for (let k = 1; k <= n; k++) {
            if (k == i) continue;

            let PlayMAHidden = document.querySelector('.PlayMA' + k);
            PlayMAHidden.style.visibility = "hidden";
        };

        fTimer = setTimeout(function() {
            PlayMA.classList.remove('FadeIn');
            PlayMA.classList.add('FadeOut');

            hTimer = setTimeout(function() {
                PlayMA.style.visibility = "hidden";
            }, 500);
        }, 1000);
    });
};
