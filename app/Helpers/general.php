<?php
function getCssFile() {
    return app() ->getLocale() === 'ar' ? 'css-rtl' :'css';
}
