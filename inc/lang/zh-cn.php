<?php 

/**
 * i18n file for zh-cn
 */
class LangDict
{
    Private $dict = array(
        'Continue Reading' => '继续阅读',
        'Profile' => '用户概要',
        'Setting' => '设置',
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



