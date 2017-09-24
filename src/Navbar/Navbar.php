<?php

namespace Anax\Navbar;

use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;

/**
 * Navbar to generate HTML för a navbar from a configuration array.
 */
class Navbar implements \Anax\Common\ConfigureInterface, InjectionAwareInterface
{
     use \Anax\Common\ConfigureTrait, InjectionAwareTrait;
    // public function aLoop()
    // {
    //     var_dump($this->config);
    // }

    public function getHTML()
    {
        $nav = "<nav><ul>";
        foreach ($this->config["items"] as $items) {
                $url = $this->di->get("url")->create($items["route"]);
                $nav .= "<li><a class='navA' href='$url'>$items[text]</a></li>";
        }
        $nav .= "</ul></nav>";

        echo $nav;
    }
}
