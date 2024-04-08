<?php

function setup_products() {
    register_post_type("Products Section", [
        "label" => "Products Section",
        "labels" => [
            "name" => "Products Page",
            "singular_name" => "Products Section",
            "add_new_item" => "Add new Products Section",
            "edit_item" => "Edit Products Section",
            "view_item" => "View Products Section",
            "view_items" => "View Products Section",
            "search_items" => "Search Products Section",
            "not_found" => "No Products found",
            "all_items" => "All Products Section",
            "archives" => "Products Section archives"
        ],
        "description" => "Products Section provided by Netiapps",
        "public" => true,
        'has_archive' => true,
        "show_in_rest" => true,
        "products_icon" => "dashicons-twitch",
        "rewrite" => [
            "slug" => "products-section"
        ],
        "supports" => [
            "title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
        ]
       

    ]);

   
}

add_action("init", "setup_products");

?>