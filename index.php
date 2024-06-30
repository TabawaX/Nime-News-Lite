<?php

$maintenance_mode = false

if ($maintenance_mode) {
    header('Location: /maintenance.php')
    exit()
}

$routes = [
    '/' => 'home',
    '/about' => 'about',
    '/contact' => 'contact',
]

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)

if (array_key_exists($path, $routes)) {
    $function_name = $routes[$path]
    if (function_exists($function_name)) {
        $function_name()
    } else {
        header("HTTP/1.0 404 Not Found")
        echo '404 Not Found'
    }
} else {
    header("HTTP/1.0 404 Not Found")
    echo '404 Not Found'
}


function home() {
    echo '<h1>Home Page</h1><p>Welcome to the home page!</p>'
}

function about() {
    echo '<h1>About Page</h1><p>This is the about page.</p>'
}

function contact() {
    echo '<h1>Contact Page</h1><p>Get in touch with us!</p>'
}
?>
