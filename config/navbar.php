<?php

// return [
//         "../htdocs" => "Home",
//         "about" => "About",
//         "report" => "Reports",
//         "remserver" => "Remserver",
//         "blog/entries" => "Blog"
// ];

return [
    "config" => [
        "navbar-class" => "navbar"
    ],
    "items" => [
        "hem" => [
            "text" => "Home",
            "route" => "",
        ],
        "om" => [
            "text" => "About",
            "route" => "about",
        ],
        "rapport" => [
            "text" => "Report",
            "route" => "report",
        ],
        "remserver" => [
            "text" => "Remserver",
            "route" => "remserver",
        ],
        "blog" => [
            "text" => "Blog",
            "route" => "blog/entries",
        ],
    ]
];
