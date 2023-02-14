<?php

namespace Notification;

final class UserBirthdayMessage implements NotificationMessageInterface
{
    private int $userUid;

    public function __construct(int $userUid)
    {
        $this->userUid = $userUid;
    }

    /** Получатель письма
     *
     * @return string
     */
    public function getRecipient(): string
    {
        return $this->userUid;
    }

    /**
     * Тема письма
     *
     * @return string
     */
    public function getSubject(): string
    {
        return 'С днем рождения!';
    }

    /**
     * Текст сообщения
     *
     * @return string
     */
    public function getMessageText(): string
    {
        $messageData = $this->getMessageData();

        return $messageData['name'] . ' поздравляем с днем рождения';
    }

    private function getMessageData(): array
    {
        //Тут залезем в сервисы и получим данные по юзеру
        return [];
    }
}