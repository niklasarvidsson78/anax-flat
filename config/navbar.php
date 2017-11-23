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
                "title" => t("Om sidan")
            ],
            "Report" => [
                "text"  => t("Rapporter"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Rapporter"),
                "mark-if-parent" => true,
            ],
            "Grid" => [
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid"),
                "title" => t("Grid"),
                "mark-if-parent" => true,
            ],
            "Typography" => [
                "text"  => t("Typography"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("Typography"),
                "mark-if-parent" => true,
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
                "title" => t("Reports from kmom assignments"),
                "mark-if-parent" => true,
            ],

            "About" => [
                "text"  => t("Om sidan"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],

            "Report" => [
                "text"  => t("Rapporter"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("About this website")
            ],
            "Grid" => [
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid"),
                "title" => t("Grid"),
                "mark-if-parent" => true,
            ],
            "Typography" => [
                "text"  => t("Typography"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("Typography"),
                "mark-if-parent" => true,
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
