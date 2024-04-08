<?php

function setup_contact() {
    register_post_type("Contact Section", [
        "label" => "Contact Section",
        "labels" => [
            "name" => "Contact Page",
            "singular_name" => "Contact Section",
            "add_new_item" => "Add new Contact Section",
            "edit_item" => "Edit Contact Section",
            "view_item" => "View Contact Section",
            "view_items" => "View Contact Section",
            "search_items" => "Search Contact Section",
            "not_found" => "No Contact found",
            "all_items" => "All Contact Section",
            "archives" => "Contact Section archives"
        ],
        "description" => "Contact Section provided by Netiapps",
        "public" => true,
        'has_archive' => true,
        "show_in_rest" => true,
        "contact_icon" => "dashicons-twitch",
        "rewrite" => [
            "slug" => "contact-section"
        ],
        "supports" => [
            "title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
        ]
       

    ]);

   
}

add_action("init", "setup_contact");

?>