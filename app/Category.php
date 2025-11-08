<?php
class Category {
    public static function getCategories($uploadsDir, $excludeDirs){
        $dirs = array_filter(glob($uploadsDir.'/*'), 'is_dir');
        $categories = [];
        foreach($dirs as $dir){
            $name = basename($dir);
            if(!in_array($name,$excludeDirs)){
                $categories[] = $name;
            }
        }
        return $categories;
    }
}
