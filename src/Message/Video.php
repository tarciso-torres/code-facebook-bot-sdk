<?php
/**
 * Created by PhpStorm.
 * User: tarciso
 * Date: 8/15/17
 * Time: 5:59 PM
 */

namespace CodeBot\Message;


class Video implements Message
{
    private $recipientId;

    public function __construct(string $recipientId)
    {
        $this->recipientId = $recipientId;
    }

    public function message(string $messageText) :array
    {
        return [
            'recipient' => [
                'id'=>$this->recipientId
            ],
            'message'=>[
                'attachment' => [
                    'type' => 'video',
                    'payload' => [
                        'url' => $messageText
                    ]
                ]
            ]
        ];
    }
}