<?php

namespace Notification;

use Main\Client;

final class ClientLowBalanceSender extends NotificationSender
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getNotificationMessage(): NotificationMessageInterface
    {
        return new ClientLowBalanceMessage($this->client);
    }
}