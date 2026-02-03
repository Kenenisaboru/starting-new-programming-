<?php
// Cookies examples in PHP

// Favorite food
setcookie("fav_food", "pizza", time() + (86400 * 7), "/");

// User’s theme preference
setcookie("theme", "dark", time() + (86400 * 30), "/");

// Language preference
setcookie("language", "en", time() + (86400 * 30), "/");

// User’s login status
setcookie("is_logged_in", "true", time() + (86400 * 1), "/");

// Last visited page
setcookie("last_page", "/dashboard", time() + (86400 * 1), "/");

// User’s font size preference
setcookie("font_size", "medium", time() + (86400 * 30), "/");

// User’s preferred layout
setcookie("layout", "grid", time() + (86400 * 30), "/");

// Items in cart (example value)
setcookie("cart_items", json_encode(["item1","item2","item3"]), time() + (86400 * 1), "/");

// Tracking referral source
setcookie("ref_source", "facebook_ad", time() + (86400 * 7), "/");

// Non-sensitive session identifier
setcookie("session_id", "ABC123XYZ", time() + (86400 * 1), "/");

// User’s timezone
setcookie("timezone", "Africa/Addis_Ababa", time() + (86400 * 30), "/");

// Browser width for responsive layout
setcookie("browser_width", "1280", time() + (86400 * 1), "/");

// Preferred color
setcookie("fav_color", "blue", time() + (86400 * 30), "/");

// Example of secure cookie (only sent on HTTPS)
// setcookie("secure_token", "SECURE123", time() + (86400 * 1), "/", "", true, true);

echo "Cookies have been set!";
?>
