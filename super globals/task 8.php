<?php
$cookie_name = "unique_visitor";
$cookie_value = "visited";
$cookie_expiration = time() + (86400 * 30);
$file = 'visitor_count.txt';

if (!isset($_COOKIE[$cookie_name])) {
    setcookie($cookie_name, $cookie_value, $cookie_expiration, "/");
    if (!file_exists($file)) {
        file_put_contents($file, '0');
    }
    $count = (int)file_get_contents($file);
    $count++;
    file_put_contents($file, $count);
} else {
    $count = (int)file_get_contents($file);
}

echo "Unique Visitors: " . $count;
?>
