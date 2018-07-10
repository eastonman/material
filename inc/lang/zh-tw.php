<?php 

/**
 * i18n file for zh-tw
 */
class LangDict
{
    Private $dict = array(
        'Continue Reading' => '繼續閱讀',
        'Profile' => '使用者概要',
        'Setting' => '設置',
    );
    function get($key) {
        if (isset($this->dict[$key])) {
            return $this->dict[$key];
        } else {
            return $key;
        }
    }
}

$MultiLang = new LangDict();



