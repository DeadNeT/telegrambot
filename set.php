<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$bot_api_key = '691753749:AAHgK5LXfKB-cqGDB5xf4RdGIiZufy-qjAM';
$bot_username = 'iZZiBoT_PHP_Bot';
$hook_url = 'https://195.201.41.70/var/www/html/telegrambot/hook.php';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram( $bot_api_key, $bot_username );

    // Set webhook
    $result = $telegram->setWebhook( $hook_url );
    if( $result->isOk() ) {
        echo $result->getDescription();
    }
}
catch( Longman\TelegramBot\Exception\TelegramException $e ) {
    // log telegram errors
    // echo $e->getMessage();
}