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

            "report" => [
                "text"  => t("Report"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Reports from kmom assignments"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("About"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],

            "typography" => [
                "text"  => t("typography"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("Typographic")
            ],

            "analysis" => [
                "text"  => t("analysis"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("analysis")
            ],
            "grid" => [
                "text"  => t("grid"),
                "url"   => $this->di->get("url")->create("grid"),
                "title" => t("grid")
            ],
            "theme" => [
                "text"  => t("theme"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("theme")
            ],
            "images" => [
                "text"  => t("images"),
                "url"   => $this->di->get("url")->create("images"),
                "title" => t("images")
            ],
            "blog" => [
                "text"  => t("blog"),
                "url"   => $this->di->get("url")->create("blog"),
                "title" => t("blog")
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

            "report" => [
                "text"  => t("Report"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Reports from kmom assignments"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("About"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],

            "AnotherOne" => [
                "text"  => t("AnotherOne"),
                "url"   => $this->di->get("url")->create("AnotherOne"),
                "title" => t("Just a test!")
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
