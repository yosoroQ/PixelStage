# PHP 视频展示插件

轻量级 PHP 插件，在网页中以网格布局展示视频，支持搜索、分类过滤、分页和移动端自适应。

## 项目预览链接
http://mxzfun.com/videoAll/public/index.php
### PC端

![image-20251108214952846](http://qny.expressisland.cn/2025/image-20251108214952846.png)

## 项目文档
http://mxzfun.xyz/index.php/archives/935/

## 功能

- 扫描 `uploads/` 文件夹及子目录视频（支持 mp4、webm、mov）  
- 分类按钮自动生成，可排除特定目录  
- 根据文件名搜索视频（支持中文和空格）  
- 分页显示，每页 18 个视频  
- 网格布局统一比例，悬停自动播放，响应式设计  

## 使用

* 分类按钮：根据子目录筛选
* 分页显示视频
* 鼠标悬停播放预览
* 页面顶部搜索框：根据文件名筛选（或许以后会加）

## 项目目录结构

```php
videoALL/
│
├─ public/           # 网站公开访问目录
│   ├─ index.php     # 入口文件，路由和模板调用
│   └─ assets/       # 静态资源：CSS、JS
    	├─ script.js
    	└─ style.css
│
├─ app/              # 核心应用逻辑
│   ├─ Video.php     # 视频扫描、过滤、排序、分页
│   └─ Category.php  # 分类目录扫描、按钮生成
│
├─ templates/        # HTML 模板
│   ├─ header.php    # 公共头部
│   ├─ footer.php    # 公共底部
│   └─ video_grid.php# 视频网格渲染
│
├─ config/           # 配置文件
│   └─ config.php    # 上传目录、排除目录、分页数量、支持格式
```
