console.log('Подключение скриптов, проверка на работоспособность!!!');

const linkRequest = document.querySelector('.header-feedback__link--request');
const linkSendResume = document.querySelector('.header-feedback__link--resume');
const modalRequest = document.querySelector('.header-feedback__modal--request');
const modalResume = document.querySelector('.header-feedback__modal--resume');

function hideModal() {
    modalRequest.classList.add('hidden');
    modalResume.classList.add('hidden');
    linkRequest.classList.remove('header-feedback__link--active');
    linkSendResume.classList.remove('header-feedback__link--active');
}

linkRequest.addEventListener('click', () => {
    modalRequest.classList.toggle('hidden');
    modalResume.classList.add('hidden');
    linkRequest.classList.toggle('header-feedback__link--active');
});

linkSendResume.addEventListener('click', () => {
    modalResume.classList.toggle('hidden');
    linkSendResume.classList.toggle('header-feedback__link--active');
});

//Нажатие на Tab или Escape.Закрыть модалку
document.addEventListener('keydown', function (e) {
    if (e.key === 'Tab' || e.key === 'Escape') {
        hideModal();
    }
});

// Клик снаружи модалки. Закрыть модалку
document.addEventListener('click', function (e) {
    if (e.target !== linkRequest && e.target !== linkSendResume && !modalRequest.contains(e.target) && !modalResume.contains(e.target)) {
        hideModal();
    }
});

// Логика кастомных селектов в модалках
document.querySelectorAll('.dropdown').forEach(function (dropDownWrapper) {
    const dropDownBtn = dropDownWrapper.querySelector('.dropdown__button');
    const dropDownList = dropDownWrapper.querySelector('.dropdown__list');
    const dropDownListItems = dropDownList.querySelectorAll('.dropdown__list-item');
    const dropDownInput = dropDownWrapper.querySelector('.dropdown__input-hidden');

    // Клик по кнопке. Открыть/Закрыть select
    dropDownBtn.addEventListener('click', function (e) {
        dropDownList.classList.toggle('dropdown__list--visible');
        this.classList.add('dropdown__button--active');
    });

    // Выбор элемента списка. Запомнить выбранное значение. Закрыть дропдаун
    dropDownListItems.forEach(function (listItem) {
        listItem.addEventListener('click', function (e) {
            e.stopPropagation();
            dropDownBtn.innerText = this.innerText;
            dropDownBtn.focus();
            dropDownInput.value = this.dataset.value;
            dropDownList.classList.remove('dropdown__list--visible');
        });
    });

    // Клик снаружи дропдауна. Закрыть дропдаун
    document.addEventListener('click', function (e) {
        if (e.target !== dropDownBtn) {
            dropDownBtn.classList.remove('dropdown__button--active');
            dropDownList.classList.remove('dropdown__list--visible');
        }
    });

    // Нажатие на Tab или Escape. Закрыть дропдаун
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Tab' || e.key === 'Escape') {
            dropDownBtn.classList.remove('dropdown__button--active');
            dropDownList.classList.remove('dropdown__list--visible');
        }
    });
});
