<?php

function setup_aboutPage() {
    register_post_type("AboutPage Section", [
        "label" => "AboutPage Section",
        "labels" => [
            "name" => "About Page",
            "singular_name" => "AboutPage Section",
            "add_new_item" => "Add new AboutPage Section",
            "edit_item" => "Edit AboutPage Section",
            "view_item" => "View AboutPage Section",
            "view_items" => "View AboutPage Section",
            "search_items" => "Search AboutPage Section",
            "not_found" => "No AboutPage found",
            "all_items" => "All AboutPage Section",
            "archives" => "AboutPage Section archives"
        ],
        "description" => "AboutPage Section provided by Netiapps",
        "public" => true,
        'has_archive' => true,
        "show_in_rest" => true,
        "aboutPage_icon" => "dashicons-twitch",
        "rewrite" => [
            "slug" => "aboutPage-section"
        ],
        "supports" => [
            "title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
        ]
       

    ]);

   
}

add_action("init", "setup_aboutPage");

?>