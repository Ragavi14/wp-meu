<?php

function setup_industries() {
    register_post_type("Industries Section", [
        "label" => "Industries Section",
        "labels" => [
            "name" => "Industries Page",
            "singular_name" => "Industries Section",
            "add_new_item" => "Add new Industries Section",
            "edit_item" => "Edit Industries Section",
            "view_item" => "View Industries Section",
            "view_items" => "View Industries Section",
            "search_items" => "Search Industries Section",
            "not_found" => "No Industries found",
            "all_items" => "All Industries Section",
            "archives" => "Industries Section archives"
        ],
        "description" => "Industries Section provided by Netiapps",
        "public" => true,
        'has_archive' => true,
        "show_in_rest" => true,
        "industries_icon" => "dashicons-twitch",
        "rewrite" => [
            "slug" => "industries-section"
        ],
        "supports" => [
            "title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
        ]
       

    ]);

   
}

add_action("init", "setup_industries");

?>