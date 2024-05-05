<?php

namespace App\Livewire;

use Livewire\Component;
//use MalteKuhr\LaravelGPT\Facades\OpenAI;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;


class ChatGptComp extends Component
{
    public $prompt;
    public $response;

    public function render()
    {
        return view('livewire.chat-gpt', [
//            'message' => $this->message,
//            'articles' => $this->articles,
        ])->extends("layouts.master")
            ->section("content");
    }


    public function sendRequest(Request $request)
    {
        $client = new Client([
            'verify' => false,
            // L'URI de base est utilisé avec les requêtes relatives
            'base_uri' => 'https://api.openai.com',
            // Vous pouvez définir n'importe quel nombre d'options de requête par défaut.
            'timeout'   =>  2.0 ,
        ]);

        $response = $client->post('/v1/completions', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer your_api_key',
            ],
            'json' => [
                'model' => 'gpt-3.5-turbo-instruct',
                'prompt' => $request->input('prompt'),
                'max_tokens' => 256,
                'n' => 1,
                'stop' => "\n",
            ],
        ]);

        $responseData = json_decode($response->getBody(), true);
        $this->response = $responseData['choices'][0]['text'];
        dd($responseData);
        return response()->json([
            'data' => [
                'response' => $responseData['choices'][0]['text'],
            ],
        ]);
    }

}

