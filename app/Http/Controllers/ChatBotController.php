<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Support\Facades\Log; 


class ChatBotController extends Controller
{
    //
    public function sendChat(Request $request)
    {
        \Log::info('Request input: ' . $request->input);
    
        try {
            $result = OpenAI::completions()->create([
                'max_tokens' => 100,
                'model' => 'gpt-3.5-turbo', // Updated model
                'prompt' => $request->input
            ]);
    
            $response = array_reduce(
                $result->toArray()['choices'],
                fn(string $result, array $choice) => $result . $choice['text'],
                ""
            );
    
            \Log::info('Response: ' . $response);
            return response()->json($response);
        } catch (\Exception $e) {
            \Log::error('Error: ' . $e->getMessage());
            return response()->json(['error' => 'Server error occurred'], 500);
        }
    }
    
}
