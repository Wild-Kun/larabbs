<?php

// 将路由名称转换为 CSS 类名
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}