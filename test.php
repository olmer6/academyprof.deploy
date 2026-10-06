<?php
$file = '/var/www/admin_php5/data/www/academyprof.ru/.htpasswd';
echo 'Файл существует: ' . (file_exists($file) ? 'Да' : 'Нет') . '<br>';
echo 'Права доступа: ' . substr(sprintf('%o', fileperms($file)), -4) . '<br>';
echo 'Владелец: ' . function_exists('posix_getpwuid') ? posix_getpwuid(fileowner($file))['name'] : 'не определено';
?>