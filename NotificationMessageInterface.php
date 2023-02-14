<?php

namespace Notification;

interface NotificationMessageInterface
{
    public function getRecipient(): string;

    public function getSubject(): string;

    public function getMessageText(): string;
}