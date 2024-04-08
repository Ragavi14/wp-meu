<?php

function setup_facilities() {
    register_post_type("Facilities Section", [
        "label" => "Facilities Section",
        "labels" => [
            "name" => "Facilities Page",
            "singular_name" => "Facilities Section",
            "add_new_item" => "Add new Facilities Section",
            "edit_item" => "Edit Facilities Section",
            "view_item" => "View Facilities Section",
            "view_items" => "View Facilities Section",
            "search_items" => "Search Facilities Section",
            "not_found" => "No Facilities found",
            "all_items" => "All Facilities Section",
            "archives" => "Facilities Section archives"
        ],
        "description" => "Facilities Section provided by Netiapps",
        "public" => true,
        'has_archive' => true,
        "show_in_rest" => true,
        "facilities_icon" => "dashicons-twitch",
        "rewrite" => [
            "slug" => "facilities-section"
        ],
        "supports" => [
            "title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
        ]
       

    ]);

   
}

add_action("init", "setup_facilities");

?>