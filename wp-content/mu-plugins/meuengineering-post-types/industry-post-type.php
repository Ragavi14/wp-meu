<?php

function setup_industry() {
    register_post_type("Industry Section", [
        "label" => "Industry Section",
        "labels" => [
            "name" => "Industry Section",
            "singular_name" => "Industry Section",
            "add_new_item" => "Add new Industry Section",
            "edit_item" => "Edit Industry Section",
            "view_item" => "View Industry Section",
            "view_items" => "View Industry Section",
            "search_items" => "Search Industry Section",
            "not_found" => "No Industry found",
            "all_items" => "All Industry Section",
            "archives" => "Industry Section archives"
        ],
        "description" => "Industry Section provided by Netiapps",
        "public" => true,
        'has_archive' => true,
        "show_in_rest" => true,
        "industry_icon" => "dashicons-twitch",
        "rewrite" => [
            "slug" => "industry-section"
        ],
        "supports" => [
            "title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
        ]
       

    ]);

   
}

add_action("init", "setup_industry");

?>