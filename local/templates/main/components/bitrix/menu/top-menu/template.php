<?php
global $arParams;
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<?php if (!empty($arResult)): ?>
    <nav class="menu">
        <ul class="menu__list">
            <?php foreach ($arResult as $arItem): ?>
                <?php if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) continue; ?>
                <li class="menu__list-item">
                    <a class="menu__link" href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                    <?php if (!empty($arItem['subitems'])): ?>
                        <ul class="submenu__list">
                            <?php foreach ($arItem['subitems'] as $subitem): ?>
                                <li class="submenu__list-item">
                                    <a class="submenu__link"
                                       href="<?= $subitem['LINK'] ?>"><?= $subitem['TEXT'] ?? '' ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
<?php endif; ?>