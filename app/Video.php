<?php
class Video {
    public static function getAllVideos($dir, $videoExts) {
        $videos = [];
        $items = scandir($dir);
        foreach($items as $item){
            if($item==='.' || $item==='..') continue;
            $fullPath = $dir.DIRECTORY_SEPARATOR.$item;
            if(is_dir($fullPath)){
                $videos = array_merge($videos, self::getAllVideos($fullPath,$videoExts));
            } else {
                $ext = strtolower(pathinfo($fullPath,PATHINFO_EXTENSION));
                if(in_array($ext,$videoExts)){
                    // 中文/空格文件名转码
                    $relativePath = str_replace($_SERVER['DOCUMENT_ROOT'],'',$fullPath);
                    $parts = explode('/', $relativePath);
                    $relativeUrl = implode('/', array_map('rawurlencode',$parts));
                    $videos[] = [
                        'path'=>$relativeUrl,
                        'mtime'=>filemtime($fullPath),
                        'title'=>pathinfo($item,PATHINFO_FILENAME)
                    ];
                }
            }
        }
        return $videos;
    }
}
