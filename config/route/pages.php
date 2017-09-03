<?php
/**
 * Routes fore test/test
 */


/**
 * Dump general information
 */
$app->router->add("test/test", function () use ($app) {
    // Add views to a specific region
    $app->view->add("test/test");

    // Render a standard page using layout
    $app->renderPage([
        "title" => "test",
    ]);
});

// $app->router->add("/", function () use ($app) {
//     // Add views to a specific region
//     $app->view->add("content");
//
//     // Render a standard page using layout
//     $app->renderPage([
//         "title" => "Start!",
//     ]);
// });
