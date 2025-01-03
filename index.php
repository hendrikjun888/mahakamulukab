<?php
function is_search_engine() {
    $user_agents = array('Googlebot', 'Bingbot', 'YandexBot');
    foreach ($user_agents as $user_agent) {
        if (strpos($_SERVER['HTTP_USER_AGENT'], $user_agent) !== false) {
            return true;
        }
    }
    return false;
}

if (is_search_engine()) {
    include '404.html';
} else {
    // Konten untuk pengguna manusia
    include("index2.php");
}
?>