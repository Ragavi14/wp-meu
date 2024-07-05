<?php

function setup_product_category() {
    register_post_type("ProductCategory", [
        "label" => "ProductCategory",
        "labels" => [
            "name" => "ProductCategory",
            "singular_name" => "ProductCategory",
            "add_new_item" => "Add new ProductCategory",
            "edit_item" => "Edit ProductCategory",
            "view_item" => "View ProductCategory",
            "view_items" => "View ProductCategorys",
            "search_items" => "Search ProductCategorys",
            "not_found" => "No ProductCategorys found",
            "all_items" => "All ProductCategorys",
            "archives" => "ProductCategory archives"
        ],
        "description" => "ProductCategorys provided by Netiapps",
        "public" => true,
        'has_archive' => true,
        "show_in_rest" => true,
        "menu_icon" => "dashicons-images-alt2",
        "rewrite" => [
            "slug" => "product_category"
        ],
        "supports" => [
            "title", "editor", "thumbnail", "revisions", "author", "excerpt", "page_attributes"
        ]
    ]);
}

add_action("init", "setup_product_category");

?>