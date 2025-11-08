<?php
$config = require __DIR__.'/../config/config.php';
require __DIR__.'/../app/Video.php';
require __DIR__.'/../app/Category.php';

// 参数
$category = $_GET['category'] ?? null;
$page = max(1,intval($_GET['page'] ?? 1));

// 获取分类
$categories = Category::getCategories($config['uploadsDir'], $config['excludeDirs']);

// 确定扫描目录
$scanDir = $category ? $config['uploadsDir'].'/'.$category : $config['uploadsDir'];
$allVideos = Video::getAllVideos($scanDir, $config['videoExts']);

// 最新视频在前
usort($allVideos,function($a,$b){ return $b['mtime'] - $a['mtime']; });

// 分页
$totalVideos = count($allVideos);
$totalPages = ceil($totalVideos / $config['perPage']);
$start = ($page-1)*$config['perPage'];
$videosToShow = array_slice($allVideos, $start, $config['perPage']);

// 渲染模板
include __DIR__.'/../templates/header.php';
include __DIR__.'/../templates/video_grid.php';
include __DIR__.'/../templates/footer.php';
