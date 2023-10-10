<?php
global $APPLICATION;
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use Bitrix\Main\Page\Asset;

//$blsMainPage = $APPLICATION->GetCurPage(false) == SITE DIR;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php $APPLICATION->ShowTitle(); ?></title>


    <?php
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/main.css');

    Asset::getInstance()->addString('<link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />');
    Asset::getInstance()->addString('<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>');

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/top-slider.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/modal-window.js');
    ?>

    <?php $APPLICATION->ShowHead(); ?>
</head>

<body>
<div id="panel">
    <?php $APPLICATION->ShowPanel(); ?>
</div>
<header class="header">
    <div class="container">
        <div class="header__inner">
            <?php $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/phone-number.php"
                )
            ); ?>

            <h1 class="header__title visibility-hidden"><?php $APPLICATION->ShowTitle(false); ?></h1>

            <?php $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/logo.php"
                )
            ); ?>

            <div class="header-feedback">
                <a class="header-feedback__link header-feedback__link--request" href="#">оставить заявку</a>
                <a class="header-feedback__link header-feedback__link--resume" href="#">отправить резюме</a>

                <div class="header-feedback__modal header-feedback__modal--request hidden">
                    <div class="header-feedback__modal-content">
                        <form class="header-feedback__form">

                            <input type="text" id="full-name" name="full-name" placeholder="ФИО" required>
                            <input type="tel" id="phone" name="phone" placeholder="Телефон" required>

                            <div class="staff-select-group">
                                <div class="dropdown">
                                    <button class="dropdown__button">Няня</button>
                                    <ul class="dropdown__list">
                                        <li class="dropdown__list-item" data-value="tutor">Репетитор</li>
                                        <li class="dropdown__list-item" data-value="governess">Гувернантка</li>
                                        <li class="dropdown__list-item" data-value="nanny">Няня</li>
                                        <li class="dropdown__list-item" data-value="driver">Водитель</li>
                                        <li class="dropdown__list-item" data-value="gardener">Садовник</li>
                                    </ul>
                                    <input class="dropdown__input-hidden" type="text" name="select-category"
                                           value="" required>
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/select-arrow.png"
                                         alt="стрелка выбора опций">
                                </div>
                            </div>

                            <div class="staff-select-group">
                                <div class="dropdown">
                                    <button class="dropdown__button">График работы</button>
                                    <ul class="dropdown__list">
                                        <li class="dropdown__list-item" data-value="tutor">Полный день</li>
                                        <li class="dropdown__list-item" data-value="governess">Пол дня</li>
                                        <li class="dropdown__list-item" data-value="nanny">График работы</li>
                                        <li class="dropdown__list-item" data-value="driver">несколько часов</li>
                                        <li class="dropdown__list-item" data-value="gardener">Круглосуточно</li>
                                    </ul>
                                    <input class="dropdown__input-hidden" type="text" name="select-category"
                                           value="" required>
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/select-arrow.png"
                                         alt="стрелка выбора опций">
                                </div>
                            </div>

                            <textarea id="message" name="message"
                                      placeholder="Дополнительная информация"></textarea>

                            <button type="submit" class="header-feedback__submit-button">Отправить</button>
                        </form>
                    </div>
                </div>
                <div class="header-feedback__modal header-feedback__modal--resume hidden">
                    <div class="header-feedback__modal-content">
                        <form class="header-feedback__form">

                            <input type="text" id="full-name" name="full-name" placeholder="ФИО" required>
                            <input type="tel" id="phone" name="phone" placeholder="Телефон" required>

                            <div class="staff-select-group">
                                <div class="dropdown">
                                    <button class="dropdown__button">Должность</button>
                                    <ul class="dropdown__list">
                                        <li class="dropdown__list-item" data-value="tutor">Репетитор</li>
                                        <li class="dropdown__list-item" data-value="governess">Гувернантка</li>
                                        <li class="dropdown__list-item" data-value="nanny">Няня</li>
                                        <li class="dropdown__list-item" data-value="driver">Водитель</li>
                                        <li class="dropdown__list-item" data-value="gardener">Садовник</li>
                                    </ul>
                                    <input class="dropdown__input-hidden" type="text" name="select-category"
                                           value="" required>
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/select-arrow.png"
                                         alt="стрелка выбора опций">
                                </div>
                            </div>

                            <input type="text" id="education" name="education" placeholder="Образование" required>
                            <!-- <input type="file" id="attach-resume" name="attach-resume" placeholder="Прикрепить резюме" required> -->
                            <input type="file" id="fileInput" class="custom-file-input">
                            <label for="fileInput" class="custom-file-label">Выберите файл</label>

                            <button type="submit" class="header-feedback__submit-button">Отправить</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php $APPLICATION->IncludeComponent(
        "bitrix:menu",
        "top_menu",
        array(
            "ALLOW_MULTI_SELECT"    => "N",
            "CHILD_MENU_TYPE"       => "subtop",
            "DELAY"                 => "N",
            "MAX_LEVEL"             => "2",
            "MENU_CACHE_GET_VARS"   => array(""),
            "MENU_CACHE_TIME"       => "3600",
            "MENU_CACHE_TYPE"       => "N",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE"        => "top",
            "USE_EXT"               => "N",
            "COMPONENT_TEMPLATE"    => "top_menu",
        )
    ); ?>

</header>