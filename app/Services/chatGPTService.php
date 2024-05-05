<?php

namespace App\Services;

use GuzzleHttp\Client;

class ChatGPTService
{
    protected $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function sendMessage($message)
    {
        $client = new Client();

        $response = $client->post('https://api.openai.com/v1/engines/davinci-codex/completions', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'prompt' => $message,
                'max_tokens' => 256,
            ],
        ]);

        return json_decode($response->getBody(), true);
    }
}
