# WooCommerce Categories Table Display
## Overview
### This WordPress plugin (or custom code) is designed to display WooCommerce product categories in a table format. It leverages both parent and child categories to create a structured and easy-to-navigate table, making it simpler for users to browse products based on category hierarchy.

## Features
### Hierarchical Category Display: Automatically organizes categories into parent and child categories.
Responsive Table Design: The category table is fully responsive, ensuring it looks great on all devices.
WooCommerce Integration: Seamlessly integrates with WooCommerce to pull product categories directly from your store.
Customizable: Easily adjust the table's appearance and functionality to fit your theme and preferences.
## Installation As a Plugin
Download the Plugin

## Download the repository as a ZIP file and extract it, or clone it using Git:

```
git clone https://github.com/bielousovandrii/add-categories-to-wordpress-by-table.git
```
## Upload to WordPress

* Go to your WordPress admin dashboard.
* Navigate to Plugins > Add New.
* Click Upload Plugin and select the ZIP file you downloaded.
* Click Install Now and then Activate.
## As Custom Code
Add the Code to Your Theme

Copy the code from the functions.php file provided in this repository.
Paste it into your theme's functions.php file, or create a custom plugin for it.
Customize the Display

You may want to customize the table's appearance or functionality. You can do this by editing the CSS and HTML structure within the code.

## Usage
Once installed, the categories table will automatically display on your desired page or post. You can insert the table using a shortcode or by directly embedding the PHP function in your theme files.

## Shortcode Example
To display the categories table on a specific page, use the following shortcode:


```
[woocommerce_categories_table]
```
Template Function Example
Alternatively, you can directly embed the table in your theme template files:

```
<?php echo do_shortcode('[woocommerce_categories_table]'); ?>
```
### Customizing Table Appearance
CSS Styles: Modify the included CSS or add custom styles in your theme to match the table with your website's design.
Table Layout: Adjust the HTML structure in the plugin or custom code to change the table layout or add additional features.
## Contributing
If you'd like to contribute to this project, feel free to fork the repository and submit a pull request. Contributions are welcome and appreciated!
