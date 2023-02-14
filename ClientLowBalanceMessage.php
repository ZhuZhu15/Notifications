<?php

namespace Notification;

use Main\Client;

/**
 * Класс для формирования письма о низком балансе клиента в системе
 *
 * Class ClientLowBalanceMessage
 * @package Notification
 */
final class ClientLowBalanceMessage implements NotificationMessageInterface
{
    /**
     * @var Client
     */
    private Client $client;

    /**
     * ClientLowBalanceMessage constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /** Получатель письма
     *
     * @return string
     */
    public function getRecipient(): string
    {
        return $this->client->getEmail();
    }

    /**
     * Тема письма
     *
     * @return string
     */
    public function getSubject(): string
    {
        return 'Низкий баланс в системе';
    }

    /**
     * Текст сообщения
     *
     * @return string
     */
    public function getMessageText(): string
    {
        //Вообще тут возвращается View с html разметкой, если это что-то серьезное
        return $this->client->getName() . ', добрый день! Необходимо пополнить баланс в системе';
    }
}