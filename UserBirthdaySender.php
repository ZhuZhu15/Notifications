<?php

namespace Notification;

use Main\Client;

final class UserBirthdaySender extends NotificationSender
{
    private int $userUid;

    public function __construct(int $userUid)
    {
        $this->userUid = $userUid;
    }

    public function getNotificationMessage(): NotificationMessageInterface
    {
        return new UserBirthdayMessage($this->userUid);
    }
}