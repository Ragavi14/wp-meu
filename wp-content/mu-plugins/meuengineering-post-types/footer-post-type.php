<?php

function setup_footer() {
    register_post_type("Footer", [
        "label" => "Footer",
        "labels" => [
            "name" => "Footer",
            "singular_name" => "Footer",
            "add_new_item" => "Add new Footer",
            "edit_item" => "Edit Footer",
            "view_item" => "View Footer",
            "view_items" => "View Footer",
            "search_items" => "Search Footer",
            "not_found" => "No Footer found",
            "all_items" => "All Footer",
            "archives" => "Footer archives"
        ],
        "description" => "Footer provided by Netiapps",
        "public" => true,
        'has_archive' => true,
        "show_in_rest" => true,
        "footer_icon" => "dashicons-twitch",
        "rewrite" => [
            "slug" => "footer"
        ],
        "supports" => [
            "title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
        ]
       

    ]);

   
}

add_action("init", "setup_footer");

?>