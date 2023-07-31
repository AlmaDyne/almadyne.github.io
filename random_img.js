'use strict';

imgArrangement({
    'Acoustic Guitar': 'img/sideset/AcousticGuitar.png',
    'Bassoon': 'img/sideset/Bassoon.png',
    'Cello': 'img/sideset/Cello.png',
    'Drums': 'img/sideset/Drums.png',
    'Electric Bass': 'img/sideset/ElectricBass.png',
    'Electric Guitar': 'img/sideset/ElectricGuitar.png',
    'Fiddle': 'img/sideset/Fiddle.png',
    'Horn': 'img/sideset/Horn.png',
    'Piano': 'img/sideset/Piano.png',
    'Synthesizer': 'img/sideset/Synthesizer.png',
    'Trumpet': 'img/sideset/Trumpet.png'
});

function imgArrangement(imgSideSet) {
    function randomMixImg(obj) {
        return Object.fromEntries(
            Object.entries(obj)
            .map(([item0, item1]) => [item0, item1, Math.random()])
            .sort((a, b) => a[2] - b[2])
        );
    }

    const mixedImgSideSet = randomMixImg(imgSideSet);

    console.log('\nПеремешанный сет картинок:');
    for (let keys in mixedImgSideSet) {
        console.log(keys);
    }

    const imgSideL = document.getElementsByTagName('aside')[0];
    const imgSideR = document.querySelector('.RightSection');
    const mainHeight = parseFloat(getComputedStyle(document.querySelector('.MainArticle')).height);
    const imgContainer = getComputedStyle(document.querySelector('.AsideContainer'));
    const imgContainerHeight = parseInt(imgContainer.height) + parseInt(imgContainer.marginTop) +
        parseInt(imgContainer.marginBottom);
    let imgQuantity = Math.floor(mainHeight / imgContainerHeight) * 2;

    console.log('\nВысота контейнера картинки с отступами: ' + imgContainerHeight);
    console.log('Высота главного блока: ' + mainHeight);
    console.log('Количество картинок на странице: ' + imgQuantity);

    // Изменение отображения картинок по вертикали, если их больше 2-х
    if (imgQuantity > 2) {
        imgSideL.style.justifyContent = imgSideR.style.justifyContent = 'space-between';
    }
    
    // Очистка боковых сторон перед их заполнением
    imgSideL.innerHTML = imgSideR.innerHTML = '';

    // Циклически возобновляемый перебор свойств со значениями в объекте, если их количество
    // требуется больше, чем есть в объекте
    for (let i = 0; i < imgQuantity; i += 2) {
        if (i > Object.entries(mixedImgSideSet).length - 1) {
            i = -2;
            imgQuantity -= Object.entries(mixedImgSideSet).length;
            continue;
        }

        const imgContainerL = document.createElement('div');
        const imgSrcL = Object.values(mixedImgSideSet)[i];
        const imgAltL = Object.keys(mixedImgSideSet)[i];
        imgContainerL.className = 'AsideContainer';
        imgContainerL.innerHTML = `<img class="AsideImg" src=${imgSrcL} alt=${imgAltL}>`;
        imgSideL.append(imgContainerL);

        console.log('\n');
        console.log(Object.keys(mixedImgSideSet)[i]);
        
        if (!Object.entries(mixedImgSideSet)[i + 1]) {
            i = -1;
            imgQuantity -= Object.entries(mixedImgSideSet).length;
        }
        
        const imgContainerR = document.createElement('div');
        const imgSrcR = Object.values(mixedImgSideSet)[i + 1];
        const imgAltR = Object.keys(mixedImgSideSet)[i + 1];
        imgContainerR.className = 'RightImgContainer';
        imgContainerR.innerHTML = `<img class="RightImg" src=${imgSrcR} alt=${imgAltR}>`;
        imgSideR.append(imgContainerR);
        
        console.log(Object.keys(mixedImgSideSet)[i + 1]);
    }
}

