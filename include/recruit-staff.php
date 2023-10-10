<div class="recruit-staff__inner">
    <img class="recruit-staff__img--right" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/orn-r.png" alt="">
    <img class="recruit-staff__img--left" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/orn-l.png" alt="">
    <form action="#" method="post">
        <div class="staff-select-group">
            <label for="select-category">Показать только</label>
            <div class="dropdown">
                <button class="dropdown__button dropdown__button--show-only">Няня</button>
                <ul class="dropdown__list dropdown__list--show-only">
                    <li class="dropdown__list-item dropdown__list-item--show-only" data-value="nanny">Няня
                    </li>
                    <li class="dropdown__list-item dropdown__list-item--show-only" data-value="governess">
                        Гувернантка
                    </li>
                    <li class="dropdown__list-item dropdown__list-item--show-only"
                        data-value="street-cleaner">Дворник
                    </li>
                    <li class="dropdown__list-item dropdown__list-item--show-only" data-value="driver">
                        Водитель
                    </li>
                    <li class="dropdown__list-item dropdown__list-item--show-only" data-value="gardener">
                        Садовник
                    </li>
                </ul>
                <input class="dropdown__input-hidden" type="text" name="select-category"
                       value="" required>
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/select-arrow.png" alt="стрелка выбора опций">
            </div>
        </div>
        <div class="selected-property__wrapper">
            <div class="selected-property__row">
                <label for="experience">Стаж от</label>
                <input type="number" name="experience" placeholder="1" required>
                <span>до</span>
                <input type="number" name="experience" placeholder="30" required>
                <span>лет</span>
            </div>
            <div class="selected-property__row">
                <label for="age">Возраст от</label>
                <input type="number" name="age" placeholder="25" required>
                <span>до</span>
                <input type="number" name="age" placeholder="65" required>
                <span>лет</span>
            </div>
        </div>
        <button class="button recruit-staff__btn" type="submit">подобрать</button>
    </form>
</div>
