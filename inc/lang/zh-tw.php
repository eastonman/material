<?php 

/**
 * i18n file for zh-tw
 */
class LangDict
{
    Private $dict = array(
        'Continue Reading' => '繼續閱讀',
        'Profile' => '使用者概要',
        'Settings' => '設置',
        'Exit' => '退出',
        'Submit' => '提交評論',
        'Join the discussion' => '加入討論吧',
        'Website' => '網站',
        'Email' => '郵箱',
        'Name' => '稱謂',
        'Logged in as' => '登錄用戶',
        'Login' => '登入',
        'Logout' => '登出',
        
    );
    function get($key) {
        if (isset($this->dict[$key])) {
            return $this->dict[$key];
        } else {
            return $key;
        }
    }
}

//$MultiLang = new LangDict();



