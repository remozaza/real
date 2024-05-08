<?php

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;

require 'vendor/autoload.php';

$PREFIXES = ['!']; // Define your command prefixes here
$ID_OWNER = getenv("6008343239"); // Fetch owner's ID

$client = new \GuzzleHttp\Client([
    'headers' => [
        'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36',
    ],
    'verify' => false, // Disable SSL verification (only for testing purposes, not recommended in production)
]);

$bot_token = "6853790145:AAGoqOWLaTox6toHNNszOtvHy0ncKWItXrM"; // Replace with your bot's token

// Example usage:
$message = "Your message here";

// You can add more commands if needed
if (isset($_GET['command']) && $_GET['command'] == 'broad') {
    $message_reply = isset($_GET['message_reply']) ? $_GET['message_reply'] : null;
    $msj = $message_reply ? $message_reply : $_GET['text'];

    if (!$msj) {
        exit(json_encode(["error" => "No hay mensaje para enviar"]));
    }

    $chats_ids = get_chats_ids(); // Implement your own logic to fetch chat IDs

    $successful = 0;
    $results = [];

    foreach ($chats_ids as $chat_id) {
        if ($message_reply) {
            $results[] = forward_message($chat_id, $message_reply);
            continue;
        }
        $results[] = send_message($chat_id, $msj);
    }

    foreach ($results as $result) {
        if ($result === true) {
            $successful++;
        } else {
            sleep(2); // Wait for 2 seconds
        }
    }

    exit(json_encode(["success" => "Anuncios enviados exitosamente a $successful chats"]));
}

function send_message($chat_id, $text) {
    global $client, $bot_token;

    $url_base = "https://api.telegram.org/bot$bot_token/";
    $url = $url_base . "sendMessage";

    $data = [
        "chat_id" => $chat_id,
        "text" => $text,
    ];

    $tries = 0;
    while ($tries <= 3) {
        try {
            $response = $client->post($url, ['form_params' => $data]);
            $response_json = json_decode($response->getBody(), true);

            if ($response_json['ok']) {
                return true;
            }

            $description_error = strtolower($response_json['description']);

            if (strpos($description_error, 'forbidden') !== false
                || strpos($description_error, 'blocked') !== false
                || strpos($description_error, 'bad request') !== false) {
                return false;
            }

            $tries++;
            sleep(5);
        } catch (RequestException $e) {
            $tries++;
            sleep(5);
        }
    }

    return false;
}

function forward_message($chat_id, $from_chat_id, $message_id) {
    global $client, $bot_token;

    $url_base = "https://api.telegram.org/bot$bot_token/";
    $url = $url_base . "forwardMessage";

    $data = [
        "chat_id" => $chat_id,
        "from_chat_id" => $from_chat_id,
        "message_id" => $message_id,
    ];

    $tries = 0;
    while ($tries <= 3) {
        try {
            $response = $client->post($url, ['form_params' => $data]);
            $response_json = json_decode($response->getBody(), true);

            if ($response_json['ok']) {
                return true;
            }

            $description_error = strtolower($response_json['description']);

            if (strpos($description_error, 'forbidden') !== false
                || strpos($description_error, 'blocked') !== false
                || strpos($description_error, 'bad request') !== false) {
                return false;
            }

            $tries++;
            sleep(5);
        } catch (RequestException $e) {
            $tries++;
            sleep(5);
        }
    }

    return false;
}

// Implement your own logic to fetch chat IDs
function get_chats_ids() {
    return ['CHAT_ID_1', 'CHAT_ID_2'];
}
