<?php

namespace QuasaR\Navbar;

class Navbar implements \Anax\Common\AppInjectableInterface, \Anax\Common\ConfigureInterface
{
    use \Anax\Common\AppInjectableTrait;
    use \Anax\Common\ConfigureTrait;

    public function getHtml()
    {
        $items = $this->config;
        $html = "<ul class='navbar'>";
        foreach ($items as $key => $value) {
            $active = $this->app->request->getRoute() == $value ? "active" : "";
            $url = $this->app->url->create($value);
            $html .= "<li><a class='$active' href='$url'>$key</a></li>";
        }
        $html .= "</ul>";

        return $html;
    }
}
