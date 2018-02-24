# New Material 

New Material 是一款 Typecho 的主题

![](https://ww2.sinaimg.cn/large/a15b4afegy1fof5zmd07rj20uk0i20zl.jpg)

## Contents 目录

- [General 概括](#general-概括)
- [Feature 特性](#feature-特性)
- [Demo 演示](#demo-演示)
- [Install 安装](#install-安装)
- [Configure 配置](#configure-配置)
- [Preview 预览](#preview-预览)
- [Contributing 贡献](#contributing-贡献)
- [License 许可证](#license-许可证)


## General 概括

- Author 作者：Manyang901
- Original Author 原作者：Viosey
- Version 版本：2.0.0
- Compatibility 兼容：PHP 5.4+, MySQL, Typecho 1.0、1.1（其余数据库未测试）
- Browser Compatibility 浏览器兼容性: Google Chrome 56+ , Firefox latest , Opera latest ,Internet explorer 11(部分图片会有格式问题), Microsoft Edge 14+(Lazyload不支持IE和edge)
- [![Gitter](https://img.shields.io/gitter/room/material-theme/typecho.svg?style=flat-square)](https://gitter.im/material-theme/typecho?utm_source=share-link&utm_medium=link&utm_campaign=share-link)

## Feature 特性

- 遵循Google Material Design标准
- 响应式设计，根据访问设备分辨率的不同显示不同的样式
- Vanilla-Lazyload 首页缩略图“懒加载”
- Webp图片优化，根据访问设备是否支持Webp格式的图片返回自适应的图片，节省70%的流量(需要在网站根目录下放置serviceworker.js，详见Setup-设置部分)
- ServiceWorker 缓存控制
- PWA 支持(需自行添加manifest.json到网站根目录)


项目重构中，特性正不断添加

## Demo 演示

[Manyang901's Blog](https://blog.kucloud.win)

## Install 安装

- 在[Github Release](https://github.com/manyang901/material/releases)页面，点击"Download ZIP"下载，解压后将文件夹改名为 "Material"(或其他) 后上传到 `/usr/themes`，并启用主题。
- 下载最新文件 然后覆盖原文件即可更新主题, 部分新增加的功能需要到后台开启才会生效 (建议更新后先切换为其他主题, 再切换回该主题)。否则有可能会导致莫名其妙的 bug...
- 在 "设置外观" 中打造一个属于你自己的博客
- 首页文章概览默认最大输出80个字符, 可手动添加截断符 `<!-- more -->` 控制输出。
- 若要使用Webp自适应图片，需要将解压出文件中serviceworker.js复制到网站的根目录(这是由于serviceworker作用范围的限制和typecho主题结构的特殊性)，不使用则所有设备全部返回png格式的图片，注意，现有策略是全部替换请求中的.png为.webp，这意味着若png图没有对应的webp图像则会返回404
- 若需使用PWA，请自行在网站根目录加入manifest.json文件，也可以在线生成

## Configure 配置

### IconURL Icon地址
此项用于设置站点的图标，包括favicon、ios和windows桌面图标。
默认情况下主题会加载位于img/icon下的图标，设置该项后加载所设url内的/img/icon下的图标，例如:
- 此项填入`https://www.google.com`
- 主题将会加载`https://www.google.com/img/icon/`下的图标
注意！图标文件名必须与默认图标的文件名相同,否则不能加载。


## Preview 预览

![](https://ww2.sinaimg.cn/large/a15b4afegy1fof6j1mfrgj20xe0otdiu.jpg)

## Contributing 贡献

All kinds of contributions (enhancements, new features, documentation & code improvements, issues & bugs reporting) are welcome.Looking forward to you `Pull Request`

Formatted code is required , code with comments is strongly recommended. Commit Message is required to be formatted as Angular .

欢迎各种形式的贡献，包括但不限于优化，添加功能，文档 & 代码的改进，问题和 bugs 的报告。期待您的 `Pull Request`。

对代码要求格式化，新增代码块要有注释。commit message要求按照Angular.js项目的格式填写。


## License 许可证

Open sourced under the GPL v3.0 license.

根据 GPL V3.0 许可证开源。
