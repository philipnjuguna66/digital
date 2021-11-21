<?php

function setting($key , $default)
{
    if (Cache::has("setting_$key")){
        return Cache::get("setting_$key");
    }
    return  Cache::rememberForever("setting_$key", function () use ($default){
        return $default;
    });
}
