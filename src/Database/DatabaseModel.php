<?php

namespace daBack\Database;

use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;

/**
 * A controller for the REM Server.
 *
 * @SuppressWarnings(PHPMD.ExitExpression)
 */
class DatabaseModel implements InjectionAwareInterface
{
    // use AppInjectableTrait;
    use InjectionAwareTrait;

    public function renderEntries()
    {
        $entries = $this->di->get("database")->executeFetchAll("SELECT * FROM BlogEntry");
        // Render a standard page using layout
        $this->di->get("view")->add("blog/index", [
            "content" => $entries
        ]);
        $this->di->get("pageRender")->renderPage();
    }
}
