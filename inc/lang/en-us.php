<?php 

/**
 * i18n file for en-us
 */
class LangDict
{
    Private $dict = array();
    function get($key) {
        if (isset($this->dict[$key])) {
            return $this->dict[$key];
        } else {
            return $key;
        }
    }
}

//$MultiLang = new LangDict();



