<?php

function ifNotPost($app, $posted, $route)
{
    if (!$posted) {
        $app->redirect($route);
    }
}

function ifNotLoggedIn($app, $route)
{
    if (!$app->session->has("name")) {
        $app->redirect($route);
    }
}

function ifNotAdmin($app, $route)
{
    if ($app->session->get("role") != "admin") {
        $app->redirect($route);
    }
}

function orderby($column, $route)
{
    return <<<EOD
<span class='orderby'>
<a href="{$route}?orderby={$column}&order=asc">&darr;</a>
<a href="{$route}?orderby={$column}&order=desc">&uarr;</a>
</span>
EOD;
}

function mergeQueryString($options, $prepend = "?")
{
    $query = [];
    parse_str($_SERVER["QUERY_STRING"], $query);

    $query = array_merge($query, $options);

    return $prepend . http_build_query($query);
}

function slugify($str)
{
    $str = mb_strtolower(trim($str));
    $str = str_replace(array('å','ä','ö'), array('a','a','o'), $str);
    $str = preg_replace('/[^a-z0-9-]/', '-', $str);
    $str = trim(preg_replace('/-+/', '-', $str), '-');
    return $str;
}
