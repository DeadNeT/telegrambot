<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = '691753749:AAHgK5LXfKB-cqGDB5xf4RdGIiZufy-qjAM';
$bot_username = 'iZZiBoT_PHP_Bot';

$commands_paths = [
    __DIR__ . '/Commands',
];

try {
    $telegram->addCommandsPaths( $commands_paths );
}
catch( Longman\TelegramBot\Exception\TelegramException $e ) {
    // Silence is golden!
    // log telegram errors
    // echo $e->getMessage();
}

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Handle telegram webhook request
    $telegram->handle();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // Silence is golden!
    // log telegram errors
    // echo $e->getMessage();
}