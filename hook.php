<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = '691753749:AAHgK5LXfKB-cqGDB5xf4RdGIiZufy-qjAM';
$bot_username = 'iZZiBoT_PHP_Bot';

$commands_paths = [
    __DIR__ . '/Commands',
];

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram( $bot_api_key, $bot_username );
    // Add commands paths containing your custom commands
    $telegram->addCommandsPaths( $commands_paths );
    // Handle telegram webhook request
    $telegram->handle();
}
catch( Longman\TelegramBot\Exception\TelegramException $e ) {
    // Silence is golden!
    //echo $e;
    // Log telegram errors
    Longman\TelegramBot\TelegramLog::error( $e );
}
catch( Longman\TelegramBot\Exception\TelegramLogException $e ) {
    // Silence is golden!
    // Uncomment this to catch log initialisation errors
    //echo $e;
}