<?php 

/**
 * i18n file for zh-cn
 */
class LangDict
{
    Private $dict = array(
        'Continue Reading' => '继续阅读',
        'Profile' => '用户概要',
        'Settings' => '设置',
        'Exit' => '退出',
        'Submit' => '提交评论',
        'Join the discussion' => '加入讨论吧',
        'Website' => '网站',
        'Email' => '邮箱',
        'Name' => '昵称',
        'Logged in as' => '登录用户',
        'Login' => '登录',
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



