<?php

$path = $_FILES['file']['tmp_name'];

$content = iconv('windows-1256', 'utf-8', file_get_contents($path));

$dir = __DIR__ . '/subtitles/';

do {
    $name = time() . random_int(10000, 99999) . '.srt';
} while (file_exists($dir . $name));

file_put_contents($dir . $name, $content);

header('Location: ' . '/subtitles/' . $name);
