<?php
/**
 * Configuration file for DI container.
 */
return [

    // Services to add to the container.
    "services" => [
        "request" => [
            "shared" => true,
            "callback" => function () {
                $request = new \Anax\Request\Request();
                $request->init();
                return $request;
            }
        ],
        "response" => [
            "shared" => true,
            "callback" => "\Anax\Response\Response",
        ],
        "url" => [
            "shared" => true,
            "callback" => function () {
                $url = new \Anax\Url\Url();
                $request = $this->get("request");
                $url->setSiteUrl($request->getSiteUrl());
                $url->setBaseUrl($request->getBaseUrl());
                $url->setStaticSiteUrl($request->getSiteUrl());
                $url->setStaticBaseUrl($request->getBaseUrl());
                $url->setScriptName($request->getScriptName());
                $url->configure("url.php");
                $url->setDefaultsFromConfiguration();
                return $url;
            }
        ],
        "router" => [
            "shared" => true,
            "callback" => function () {
                $router = new \Anax\Route\Router();
                $router->setDI($this);
                $router->configure("route2.php");
                return $router;
            }
        ],
        "view" => [
            "shared" => true,
            "callback" => function () {
                $view = new \Anax\View\ViewCollection();
                $view->setDI($this);
                $view->configure("view.php");
                return $view;
            }
        ],
        "viewRenderFile" => [
            "shared" => true,
            "callback" => function () {
                $viewRender = new \Anax\View\ViewRenderFile2();
                $viewRender->setDI($this);
                return $viewRender;
            }
        ],
        "session" => [
            "shared" => true,
            "callback" => function () {
                $session = new \Anax\Session\SessionConfigurable();
                $session->configure("session.php");
                return $session;
            }
        ],
        "navbar" => [
            "shared" => true,
            "callback" => function () {
                $navbar = new \Anax\Navbar\Navbar();
                $navbar->setDI($this);
                $navbar->configure("navbar.php");
                return $navbar;
            }
        ],
        "textfilter" => [
            "shared" => true,
            "callback" => "\Anax\TextFilter\TextFilter",
        ],
        "rem" => [
            "shared" => true,
            "callback" => function () {
                $rem = new \Anax\RemServer\RemServer();
                $rem->configure("remserver.php");
                $rem->injectSession($this->get("session"));
                return $rem;
            }
        ],
        "remController" => [
            "shared" => false,
            "callback" => function () {
                $rem = new \Anax\RemServer\RemServerController();
                $rem->setDI($this);
                return $rem;
            }
        ],
        "database" => [
            "shared" => false,
            "callback" => function () {
                $database = new \Anax\Database\DatabaseConfigure();
                // $database->setDI($this);
                $database->configure("database.php");
                $database->connect();
                return $database;
            }
        ],
        "DatabaseController" => [
            "shared" => false,
            "callback" => function () {
                $DatabaseController = new \daBack\Database\DatabaseController();
                $DatabaseController->setDI($this);
                return $DatabaseController;
            }
        ],
        "DatabaseModel" => [
            "shared" => false,
            "callback" => function () {
                $DatabaseModel = new \daBack\Database\DatabaseModel();
                $DatabaseModel->setDI($this);
                return $DatabaseModel;
            }
        ],
        "errorController" => [
            "shared" => true,
            "callback" => function () {
                $obj = new \Anax\Page\ErrorController();
                $obj->setDI($this);
                return $obj;
            }
        ],
        "debugController" => [
            "shared" => true,
            "callback" => function () {
                $obj = new \Anax\Page\DebugController();
                $obj->setDI($this);
                return $obj;
            }
        ],
        "flatFileContentController" => [
            "shared" => true,
            "callback" => function () {
                $obj = new \Anax\Page\FlatFileContentController();
                $obj->setDI($this);
                return $obj;
            }
        ],
        "pageRender" => [
            "shared" => true,
            "callback" => function () {
                $obj = new \Anax\Page\PageRender();
                $obj->setDI($this);
                return $obj;
            }
        ],
    ],
];
