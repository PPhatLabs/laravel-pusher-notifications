<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pusher\PushNotifications\PushNotifications;

class PusherNoitication extends Controller
{
    public function sendNotification()
    {
        $client = new PushNotifications(config('services.pusher'));
        $response = $client->publishToInterests(
            ['hello', 'world',  'laravel'],
            [
                'web' => [
                    'notification' => [
                        'title' => 'Hello',
                        'body' => 'Hello, world!',
                        'deep_link' => 'https://laravel.com',
                    ],
                ],
                'android' => [
                    'notification' => [
                        'title' => 'Hello',
                        'body' => 'Hello, world!',
                        'deep_link' => 'https://laravel.com',
                    ],
                ],
                'ios' => [
                    'notification' => [
                        'title' => 'Hello',
                        'body' => 'Hello, world!',
                        'deep_link' => 'https://laravel.com',
                    ],
                ],
            ]
        );

        return $response;
    }
}
