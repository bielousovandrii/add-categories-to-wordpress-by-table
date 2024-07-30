<?php
// Get the product ID. Here it is assumed that the product ID is available in the $product_id variable.
global $post;
$product_id = $post->ID;

// Get all product categories
$product_categories = wp_get_post_terms($product_id, 'product_cat');

// Determine if there are child categories
$has_child_categories = false;
$parent_categories = [];

foreach ($product_categories as $category) {
    if ($category->parent) {
        $has_child_categories = true;
        $parent_categories[$category->parent][] = $category;
    }
}

// If there are child categories, output the table
if ($has_child_categories) {
    echo '<table border="1" cellpadding="10">';
    echo '<tr><th>Родительская категория</th><th>Дочерняя категория</th></tr>';

    foreach ($parent_categories as $parent_id => $child_categories) {
        $parent_category = get_term($parent_id, 'product_cat');
        if ($parent_category) {
            foreach ($child_categories as $child) {
                echo '<tr>';
                echo '<td>' . $parent_category->name . '</td>';
                echo '<td>' . $child->name . '</td>';
                echo '</tr>';
            }
        }
    }

    echo '</table>';
} else {
    echo 'There are no child categories for this product.';
}
?>