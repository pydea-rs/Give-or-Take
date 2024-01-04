<?php

defined('DB_HOST') or define('DB_HOST', 'localhost');
defined('DB_USERNAME') or define('DB_USERNAME', 'root');
defined('DB_PASSWORD') or define('DB_PASSWORD', '');
defined('DB_NAME') or define('DB_NAME','feelondb');

defined('DIR_INCLUDES') or define('DIR_INCLUDES', 'includes');
defined('DIR_PICTURES') or define('DIR_PICTURES', 'pictures');

defined('TABLE_CATEGORIES') or define('TABLE_CATEGORIES', 'categories');
defined('CATEGORY_NAME') or define('CATEGORY_NAME', 'name');
defined('CATEGORY_ID') or define('CATEGORY_ID', 'id');
defined('TABLE_PRODUCTS') or define('TABLE_PRODUCTS', 'products');
defined('PRODUCT_ID') or define('PRODUCT_ID', 'pid');
defined('PRODUCT_NAME') or define('PRODUCT_NAME', 'pname');
defined('PRODUCT_IMAGE') or define('PRODUCT_IMAGE', 'pimage');
defined('PRODUCT_DESCRIPTION') or define('PRODUCT_DESCRIPTION', 'pdescription');
defined('PRODUCT_CATEGORY_ID') or define('PRODUCT_CATEGORY_ID', 'p_cid');
defined('PRODUCT_PRICE') or define('PRODUCT_PRICE', 'pprice');

$connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);