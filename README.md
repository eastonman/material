# New Material 

New Material 是一款遵循 Material Design 的 Typecho 主题

![https://travis-ci.org/manyang901/material](https://img.shields.io/travis/manyang901/material.svg)
![https://github.com/manyang901/material/releases](https://img.shields.io/github/downloads/manyang901/material/total.svg)
![](https://img.shields.io/github/license/manyang901/material.svg)
![](https://img.shields.io/badge/PR-welcome-blue.svg)

![](https://ww2.sinaimg.cn/large/a15b4afegy1fof5zmd07rj20uk0i20zl.jpg)

## Contents 目录

<!-- MarkdownTOC -->

- [General 概括](#general-概括)
- [Feature 特性](#feature-特性)
- [Demo 演示](#demo-演示)
- [Install 安装](#install-安装)
- [Configure 配置](#configure-配置)
	- [Function Switch 功能开关](#function-switch-功能开关)
		- [ViewCount 无插件访客统计](#viewcount-无插件访客统计)
	- [IconURL Icon地址](#iconurl-icon地址)
- [Preview 预览](#preview-预览)
- [Contributing 贡献](#contributing-贡献)
- [License 许可证](#license-许可证)

<!-- /MarkdownTOC -->

## General 概括

- Author 作者：Manyang901
- Original Author 原作者：Viosey
- Version 版本：2.3.0
- Compatibility 兼容：PHP 5.4+, MySQL, Typecho 1.0、1.1（其余数据库未测试）
- Browser Compatibility 浏览器兼容性: Google Chrome 56+ , Firefox latest , Opera latest ,Internet explorer 11(部分图片会有格式问题), Microsoft Edge 14+(Lazyload不支持IE和edge)
- [![Gitter](https://img.shields.io/gitter/room/material-theme/typecho.svg?style=flat-square)](https://gitter.im/material-theme/typecho?utm_source=share-link&utm_medium=link&utm_campaign=share-link)

## Feature 特性

- 遵循Google Material Design标准
- 响应式设计，根据访问设备分辨率的不同显示不同的样式
- Vanilla-Lazyload 首页缩略图“懒加载”
- 非插件实现访客数量统计，使用cookies验证，使用自定义字段储存计数器，不修改数据库，高解耦。
- Webp图片优化，根据访问设备是否支持Webp格式的图片返回自适应的图片，节省70%的流量(需要在网站根目录下放置serviceworker.js，详见Install-安装部分)
- ServiceWorker 缓存控制
- PWA 支持(需自行添加manifest.json到网站根目录)
- Update Checker 更新检查(实验性功能，谨慎使用，使用前请慎重考虑！)
- 友链模板


## Demo 演示

[PolyQY Blog](https://kucloud.win)

## Install 安装

- 在[Github Release](https://github.com/manyang901/material/releases)页面，点击"material.tar.gz"下载，解压后将文件夹改名为 "Material"(或其他) 后上传到 `/usr/themes`，并启用主题。2.1.0版本引入Travis CI自动压缩css后，不建议直接clone项目，推荐在release界面下载。
- 下载最新文件 然后覆盖原文件即可更新主题, 部分新增加的功能需要到后台开启才会生效 (建议更新后先切换为其他主题, 再切换回该主题)。否则有可能会导致莫名其妙的 bug...
- 在 "设置外观" 中打造一个属于你自己的博客，部分配置项参考[配置](#configure-配置)
- 首页文章概览默认最大输出80个字符, 可手动添加截断符 `<!-- more -->` 控制输出。
- 若要使用Webp自适应图片，需要将解压出文件中serviceworker.js复制到网站的根目录(这是由于serviceworker作用范围的限制和typecho主题结构的特殊性)，不使用则所有设备全部返回png格式的图片，注意，现有策略是全部替换请求中的.png为.webp，这意味着若png图没有对应的webp图像则会返回404
- 若需使用PWA，请自行在网站根目录加入manifest.json文件，也可以在线生成
- 请确保已经安装php-curl扩展，否则可能出错或无法收集错误信息，更新检测功能也不能使用(可能会导致严重问题)，通常可以使用apt install php-curl等安装扩展
- 可以在php交互模式下输入curl_init();以查看是否安装php-curl扩展
- 更新检测并未加入任何容错和环境检查，请谨慎使用！
- 友链模板需在管理独立页面中自定义字段设置


## Configure 配置

### Function Switch 功能开关

- Lazyload 
- 首页两个欢迎图
- 无插件访客统计

#### ViewCount 无插件访客统计
勾选此选项即可开始使用，注意此选项关闭时不统计数据。
此访客统计不会影响数据库结构，Typecho原生备份可以正常使用。

### IconURL Icon地址
此项用于设置站点的图标，包括favicon、ios和windows桌面图标。
默认情况下主题会加载位于img/icon下的图标，设置该项后加载所设url内的/img/icon下的图标，例如:
- 此项填入`https://www.google.com`
- 主题将会加载`https://www.google.com/img/icon/`下的图标
注意！图标文件名必须与默认图标的文件名相同,否则不能加载。

### Template-Links 友链模板
需要在管理->独立页面中设置自定义字段，分为links, avatar和name
三者可以有共同后缀
比如
- links_hhh => https://php.net
- avatar_hhh => somewhere
- name_hhh => PHP is great
必须有links和avatar, name可没有

## Preview 预览

<img style="float: left;" width="50%" src="https://i.loli.net/2018/05/16/5afbf7736c26f.png" alt="screenshot_1526462277.png" title="screenshot_1526462277.png" /><img style="float: right;" width="50%" src="https://i.loli.net/2018/05/16/5afbaa4204c6b.png">

![](https://i.loli.net/2018/05/16/5afbaa439d35f.jpg)

## Contributing 贡献

All kinds of contributions (enhancements, new features, documentation & code improvements, issues & bugs reporting) are welcome.Looking forward to you `Pull Request`

Formatted code is required , code with comments is strongly recommended. Commit Message is required to be formatted as Angular .

欢迎各种形式的贡献，包括但不限于优化，添加功能，文档 & 代码的改进，问题和 bugs 的报告。期待您的 `Pull Request`。

对代码要求格式化，新增代码块要有注释。commit message要求按照Angular.js项目的格式填写。


## License 许可证

Open sourced under the GPL-3.0 license.

根据 GPL-3.0 许可证开源。
