<?php
function url($path = '') {
    $base_url = '';
    return $base_url . ($path ? '/' . ltrim($path, '/') : '');
}

function asset($path) {
    return '/' . ltrim($path, '/');
}

function obtenerUrlImagen($nombre_imagen) {
    if ($nombre_imagen === 'placeholder.jpg') {
        return asset('img/placeholder.jpg');
    }
    return '/img/' . $nombre_imagen;
}
?>
