<?php
global $APPLICATION;
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>

<footer class="footer">
    <div class="footer-top">

        <?php $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "bottom_menu",
            array(
                "ALLOW_MULTI_SELECT" => "N",
                "DELAY" => "N",
                "MAX_LEVEL" => "1",
                "MENU_CACHE_GET_VARS" => array(""),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "bottom",
                "USE_EXT" => "N",
                "COMPONENT_TEMPLATE" => "bottom_menu",
            )
        ); ?>

    </div>
    <div class="footer-copyright">
        <div class="container">
            <?php $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/phone-number.php"
                )
            );?>

            <div class="footer-copyright__wrapper">
                <p class="footer-copyright-text">Разработка и продвижение сайта компанией «Юни Веб» -</p>
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/footer-copyright.php"
                    )
                );?>
            </div>
        </div>
    </div>
</footer>
</body>
</html>