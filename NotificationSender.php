<?php

namespace Notification;

abstract class NotificationSender
{
    abstract public function getNotificationMessage(): NotificationMessageInterface;

    public function sendMessage(): void
    {
        $notificationMessage = $this->getNotificationMessage();
        mail(
            $notificationMessage->getRecipient(),
            $notificationMessage->getSubject(),
            $notificationMessage->getMessageText()
        );
    }
}