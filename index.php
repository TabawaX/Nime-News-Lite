<?php

// Mode maintenance (ubah ke true untuk mengaktifkan)
$maintenance_mode = true;

if ($maintenance_mode) {
    header('Location: /maintenance.php');
    exit();
}

// Definisikan route
$routes = [
    '/' => 'home',
    '/about' => 'about',
    '/contact' => 'contact',
    // Tambahkan route lainnya di sini
];

// Dapatkan path dari URL
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Cari route yang sesuai
if (array_key_exists($path, $routes)) {
    // Panggil fungsi yang sesuai
    $function_name = $routes[$path];
    if (function_exists($function_name)) {
        $function_name();
    } else {
        header("HTTP/1.0 404 Not Found");
        echo '404 Not Found';
    }
} else {
    header("HTTP/1.0 404 Not Found");
    echo '404 Not Found';
}

// Definisi fungsi handler untuk setiap route
function home() {
    echo '<h1>Home Page</h1><p>Welcome to the home page!</p>';
}

function about() {
    echo '<h1>About Page</h1><p>This is the about page.</p>';
}

function contact() {
    echo '<h1>Contact Page</h1><p>Get in touch with us!</p>';
}
?>