<?php

function setup_productsDetails() {
    register_post_type("ProductsDetails", [
        "label" => "ProductsDetails",
        "labels" => [
            "name" => "ProductsDetails Page",
            "singular_name" => "ProductsDetails",
            "add_new_item" => "Add new ProductsDetails",
            "edit_item" => "Edit ProductsDetails",
            "view_item" => "View ProductsDetails",
            "view_items" => "View ProductsDetails",
            "search_items" => "Search ProductsDetails",
            "not_found" => "No ProductsDetails found",
            "all_items" => "All ProductsDetails",
            "archives" => "ProductsDetails archives"
        ],
        "description" => "ProductsDetails provided by Netiapps",
        "public" => true,
        'has_archive' => true,
        "show_in_rest" => true,
        "productsDetails_icon" => "dashicons-twitch",
        "rewrite" => [
            "slug" => "productsDetails"
        ],
        "supports" => [
            "title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
        ]
       

    ]);

   
}

add_action("init", "setup_productsDetails");

?>