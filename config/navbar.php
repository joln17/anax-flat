<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",
     
        // Here comes the menu structure
        "items" => [
            /*
            "index" => [
                "text"  => t("Hem"),
                "url"   => $this->di->get("url")->create("index"),
                "title" => t("En Me-sida i kursen Design"),
            ],
            */
            "report" => [
                "text"  => t("Redovisning"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisning för kmom 01-10"),
                "mark-if-parent" => true,
                "submenu" => [
                    "items" => [
                        "kmom01" => [
                            "text"  => t("Kmom01"),
                            "url"   => $this->di->get("url")->create("report/kmom01"),
                            "title" => t("Kmom01"),
                        ],
                        "kmom02" => [
                            "text"  => t("Kmom02"),
                            "url"   => $this->di->get("url")->create("report/kmom02"),
                            "title" => t("Kmom02"),
                        ],
                        "kmom03" => [
                            "text"  => t("Kmom03"),
                            "url"   => $this->di->get("url")->create("report/kmom03"),
                            "title" => t("Kmom03"),
                        ],
                        "kmom04" => [
                            "text"  => t("Kmom04"),
                            "url"   => $this->di->get("url")->create("report/kmom04"),
                            "title" => t("Kmom04"),
                        ],
                        "kmom05" => [
                            "text"  => t("Kmom05"),
                            "url"   => $this->di->get("url")->create("report/kmom05"),
                            "title" => t("Kmom05"),
                        ],
                        /*"kmom06" => [
                            "text"  => t("Kmom06"),
                            "url"   => $this->di->get("url")->create("report/kmom06"),
                            "title" => t("Kmom06"),
                        ],
                        "kmom10" => [
                            "text"  => t("Kmom10"),
                            "url"   => $this->di->get("url")->create("report/kmom10"),
                            "title" => t("Kmom10"),
                        ],*/
                    ],
                ],
            ],

            "analysis" => [
                "text"  => t("Analys"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analys"),
                "mark-if-parent" => true,
                "submenu" => [
                    "items" => [
                        "colorscheme" => [
                            "text"  => t("Färgschema"),
                            "url"   => $this->di->get("url")->create("analysis/colorscheme"),
                            "title" => t("Färgschema"),
                        ],
                        "typography" => [
                            "text"  => t("Laddningstid"),
                            "url"   => $this->di->get("url")->create("analysis/speed-and-usability"),
                            "title" => t("Laddningstid"),
                        ],
                    ],
                ],
            ],

            "theme" => [
                "text"  => t("Teman"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Teman"),
                "submenu" => [
                    "items" => [
                        "theme-selector" => [
                            "text"  => t("Temaväljaren"),
                            "url"   => $this->di->get("url")->create("theme-selector"),
                            "title" => t("Temaväljaren"),
                        ],
                    ],
                ],
            ],

            "test" => [
                "text"  => t("Testsidor"),
                "url"   => $this->di->get("url")->create("test"),
                "title" => t("Testsidor"),
                "submenu" => [
                    "items" => [
                        "grid" => [
                            "text"  => t("Grid"),
                            "url"   => $this->di->get("url")->create("grid"),
                            "title" => t("Grid"),
                        ],
                        "typography" => [
                            "text"  => t("Typografi"),
                            "url"   => $this->di->get("url")->create("typography"),
                            "title" => t("Typografi"),
                        ],
                        "images" => [
                            "text"  => t("Bilder"),
                            "url"   => $this->di->get("url")->create("images"),
                            "title" => t("Bilder"),
                        ],
                    ],
                ],
            ],

            "blogg" => [
                "text"  => t("Blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("Blogg"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om webbplatsen"),
            ],
        ],
    ],




    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",
     
        // Here comes the menu structure
        "items" => [

            "Hem" => [
                "text"  => t("Hem"),
                "url"   => $this->di->get("url")->create("index"),
                "title" => t("En Me-sida i kursen Design"),
            ],

            "report" => [
                "text"  => t("Redovisning"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisning för kmom 01-10"),
                "mark-if-parent" => true,
                "submenu" => [
                    "items" => [
                        "kmom01" => [
                            "text"  => t("Kmom01"),
                            "url"   => $this->di->get("url")->create("report/kmom01"),
                            "title" => t("Kmom01"),
                        ],
                        "kmom02" => [
                            "text"  => t("Kmom02"),
                            "url"   => $this->di->get("url")->create("report/kmom02"),
                            "title" => t("Kmom02"),
                        ],
                        "kmom03" => [
                            "text"  => t("Kmom03"),
                            "url"   => $this->di->get("url")->create("report/kmom03"),
                            "title" => t("Kmom03"),
                        ],
                        "kmom04" => [
                            "text"  => t("Kmom04"),
                            "url"   => $this->di->get("url")->create("report/kmom04"),
                            "title" => t("Kmom04"),
                        ],
                        "kmom05" => [
                            "text"  => t("Kmom05"),
                            "url"   => $this->di->get("url")->create("report/kmom05"),
                            "title" => t("Kmom05"),
                        ],
                        /*"kmom06" => [
                            "text"  => t("Kmom06"),
                            "url"   => $this->di->get("url")->create("report/kmom06"),
                            "title" => t("Kmom06"),
                        ],
                        "kmom10" => [
                            "text"  => t("Kmom10"),
                            "url"   => $this->di->get("url")->create("report/kmom10"),
                            "title" => t("Kmom10"),
                        ],*/
                    ],
                ],
            ],

            "analysis" => [
                "text"  => t("Analys"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analys"),
                "mark-if-parent" => true,
                "submenu" => [
                    "items" => [
                        "colorscheme" => [
                            "text"  => t("Färgschema"),
                            "url"   => $this->di->get("url")->create("analysis/colorscheme"),
                            "title" => t("Färgschema"),
                        ],
                        "typography" => [
                            "text"  => t("Laddningstid"),
                            "url"   => $this->di->get("url")->create("analysis/speed-and-usability"),
                            "title" => t("Laddningstid"),
                        ],
                    ],
                ],
            ],

            "theme" => [
                "text"  => t("Teman"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Teman"),
                "submenu" => [
                    "items" => [
                        "theme-selector" => [
                            "text"  => t("Temaväljaren"),
                            "url"   => $this->di->get("url")->create("theme-selector"),
                            "title" => t("Temaväljaren"),
                        ],
                    ],
                ],
            ],

            "test" => [
                "text"  => t("Testsidor"),
                "url"   => $this->di->get("url")->create("test"),
                "title" => t("Testsidor"),
                "submenu" => [
                    "items" => [
                        "grid" => [
                            "text"  => t("Grid"),
                            "url"   => $this->di->get("url")->create("grid"),
                            "title" => t("Grid"),
                        ],
                        "typography" => [
                            "text"  => t("Typografi"),
                            "url"   => $this->di->get("url")->create("typography"),
                            "title" => t("Typografi"),
                        ],
                        "images" => [
                            "text"  => t("Bilder"),
                            "url"   => $this->di->get("url")->create("images"),
                            "title" => t("Bilder"),
                        ],
                    ],
                ],
            ],

            "blogg" => [
                "text"  => t("Blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("Blogg"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om webbplatsen"),
            ],
        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
