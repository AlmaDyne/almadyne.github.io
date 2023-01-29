let FormTrigger = document.querySelector('.FormTrigger'),
    MailForm = document.querySelector('#MailFormObject'),
    ArrowWrapper = document.querySelector('.ArrowTopPageWrapper'),
    HidMedForm = document.querySelectorAll('.HiddenMediaForm');

FormTrigger.addEventListener('click', () => {
    MailForm.classList.add('Open');
    ArrowWrapper.classList.add('Open');
    HidMedForm.forEach(element => {
      element.style.display = 'flex';
    });
});
