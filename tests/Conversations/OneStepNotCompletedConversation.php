<?php


namespace SergiX44\Nutgram\Tests\Conversations;

use SergiX44\Nutgram\Conversations\Conversation;
use SergiX44\Nutgram\Nutgram;

class OneStepNotCompletedConversation extends Conversation
{
    protected ?string $step = 'firstStep';

    public function firstStep(Nutgram $bot)
    {
        $bot->set('test', $bot->get('test', 1) + 1);
    }
}
