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
    "Index" => [
        "text"  => t("Hem"),
        "url"   => $this->di->get("url")->create("index"),
        "title" => t("Hem"),
        "mark-if-parent" => true,
    ],

    "About" => [
        "text"  => t("Om sidan"),
        "url"   => $this->di->get("url")->create("about"),
        "title" => t("Om sidan"),
    ],

            "Arbeten" => [
               "text"  =>"Arbeten",
               "url"   => $this->di->get("url")->create("#"),
               "title" => "Arbeten",
               "submenu" => [
                   "items" => [
                       "analyser" => [
                           "text"  =>"Analyser",
                           "url"   => $this->di->get("url")->create("analysis"),
                           "title" => "Analyser"
                       ],
                       "Report" => [
                           "text"  => t("Rapporter"),
                           "url"   => $this->di->get("url")->create("report"),
                           "title" => t("Rapporter"),
                       ],
                   ],
               ],
            ],
            "Blogg" => [
            "text"  => t("Blogg"),
            "url"   => $this->di->get("url")->create("blogg"),
            "title" => t("Blogg"),
            "mark-if-parent" => true,
            ],

            "Bilder" => [
            "text"  => t("Bilder"),
            "url"   => $this->di->get("url")->create("images"),
            "title" => t("Bilder")
            ],



            "Teman" => [
               "text"  =>"Teman",
               "url"   => $this->di->get("url")->create("#"),
               "title" => "Assignements",
               "submenu" => [
                   "items" => [
                       "Theme-selector" => [
                           "text"  => t("Temaväljare"),
                           "url"   => $this->di->get("url")->create("theme-selector"),
                           "title" => t("theme-selector"),
                       ],

                       "Grid" => [
                           "text"  => t("Grid"),
                           "url"   => $this->di->get("url")->create("grid"),
                           "title" => t("Grid"),
                       ],

                       "Typography" => [
                           "text"  => t("Typography"),
                           "url"   => $this->di->get("url")->create("typography"),
                           "title" => t("Typography"),
                       ],
                   ],
               ],
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
            "Index" => [
                "text"  => t("Hem"),
                "url"   => $this->di->get("url")->create("index"),
                "title" => t("Hem"),
                "mark-if-parent" => true,
            ],

            "About" => [
                "text"  => t("Om sidan"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om sidan"),
            ],

                    "Arbeten" => [
                       "text"  =>"Arbeten",
                       "url"   => $this->di->get("url")->create("#"),
                       "title" => "Arbeten",
                       "submenu" => [
                           "items" => [
                               "analyser" => [
                                   "text"  =>"Analyser",
                                   "url"   => $this->di->get("url")->create("analysis"),
                                   "title" => "Analyser"
                               ],
                               "Report" => [
                                   "text"  => t("Rapporter"),
                                   "url"   => $this->di->get("url")->create("report"),
                                   "title" => t("Rapporter"),
                               ],
                           ],
                       ],
                    ],
                    "Blogg" => [
                    "text"  => t("Blogg"),
                    "url"   => $this->di->get("url")->create("blogg"),
                    "title" => t("Blogg"),
                    "mark-if-parent" => true,
                    ],

                    "Bilder" => [
                    "text"  => t("Bilder"),
                    "url"   => $this->di->get("url")->create("images"),
                    "title" => t("Bilder")
                    ],



                    "Teman" => [
                       "text"  =>"Teman",
                       "url"   => $this->di->get("url")->create("#"),
                       "title" => "Assignements",
                       "submenu" => [
                           "items" => [
                               "Theme-selector" => [
                                   "text"  => t("Temaväljare"),
                                   "url"   => $this->di->get("url")->create("theme-selector"),
                                   "title" => t("theme-selector"),
                               ],

                               "Grid" => [
                                   "text"  => t("Grid"),
                                   "url"   => $this->di->get("url")->create("grid"),
                                   "title" => t("Grid"),
                               ],

                               "Typography" => [
                                   "text"  => t("Typography"),
                                   "url"   => $this->di->get("url")->create("typography"),
                                   "title" => t("Typography"),
                               ],
                           ],
                       ],
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
