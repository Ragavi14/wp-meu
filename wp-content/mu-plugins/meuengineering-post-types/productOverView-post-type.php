<?php

function setup_product_over_view() {
    register_post_type("ProductOverView", [
        "label" => "ProductOverView",
        "labels" => [
            "name" => "ProductOverViews",
            "singular_name" => "ProductOverView",
            "add_new_item" => "Add new ProductOverView",
            "edit_item" => "Edit ProductOverView",
            "view_item" => "View ProductOverView",
            "view_items" => "View ProductOverViews",
            "search_items" => "Search ProductOverViews",
            "not_found" => "No ProductOverViews found",
            "all_items" => "All ProductOverViews",
            "archives" => "ProductOverView archives"
        ],
        "description" => "ProductOverViews provided by Netiapps",
        "public" => true,
        'has_archive' => true,
        "show_in_rest" => true,
        "menu_icon" => "dashicons-images-alt2",
        "rewrite" => [
            "slug" => "product_over_view"
        ],
        "supports" => [
            "title", "editor", "thumbnail", "revisions", "author", "excerpt", "page_attributes"
        ]
    ]);
}

add_action("init", "setup_product_over_view");

?>