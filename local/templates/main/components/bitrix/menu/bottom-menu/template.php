<?php
global $arParams;
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
global $APPLICATION;
?>

<?php if (!empty($arResult)): ?>
    <nav class="footer-nav">
        <ul class="nav__list">

            <?php foreach ($arResult as $arItem): ?>
                <?php if ($arItem["SELECTED"]): ?>
                    <li class="nav__item">
                        <a href="<?= $arItem["LINK"] ?>" class="nav__link"><?= $arItem["TEXT"] ?></a>
                    </li>
                <?php else: ?>
                    <li class="nav__item">
                        <a href="<?= $arItem["LINK"] ?>" class="nav__link"><?= $arItem["TEXT"] ?></a>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </nav>
<?php endif; ?>
