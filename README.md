# Dcat Amis Extensions

> Dcat Admin 的 amis组件扩展, 可以在 dcat 中轻松使用 amis 组件, 让你开发自定义页面变得更简单 <br>
> 给 dcat 扩展了 120余个组件 (Doge) 🤣

## Dcat Admin

`Dcat Admin` 基于laravel-admin二开的, 超好用的高颜值后台框架

- [官方网站](http://www.dcatadmin.com/)
- [中文文档](https://learnku.com/docs/dcat-admin/2.x)

## Amis

百度开源的一个低代码前端框架，它使用 JSON 配置来生成页面，可以减少页面开发工作量，极大提升效率。

- [官方文档](https://aisuda.bce.baidu.com/amis/zh-CN/docs/index)

## 安装

#### 获取 composer 包

```shell
composer require slowlyo/dcat-amis
```

#### 发布静态资源

```shell
php artisan vendor:publish --provider="Slowlyo\DcatAmis\DcatAmisServiceProvider" --force
```

#### 配置

在 `app/Admin/bootstrap.php` 中添加 (加载 amis 静态资源)

```php
\Slowlyo\DcatAmis\DcatAmis::requireAssets();
```

#### 使用

推荐用来构建完整页面

```php
public function index(Content $content){
    $page = \Slowlyo\DcatAmis\Renderers\Page::make()->body(
        \Slowlyo\DcatAmis\Renderers\Button::make()->label('Button')
    );
    
    // 所有组件都可使用render()方法, 可自行灵活搭配
    return $content->body($page->render());
}
```
