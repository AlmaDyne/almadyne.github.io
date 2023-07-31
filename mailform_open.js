const formTrigger = document.querySelector('.FormTrigger'),
    mailForm = document.querySelector('#MailFormObject'),
    arrowTopPage = document.querySelector('.ArrowTopPage');

formTrigger.addEventListener('click', () => {
    mailForm.classList.add('Open');
    arrowTopPage.classList.remove('Closed');
    arrowTopPage.classList.add('Open');
    
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
});
