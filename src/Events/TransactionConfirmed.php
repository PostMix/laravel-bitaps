<?php

namespace PostMix\LaravelBitaps\Events;

use PostMix\LaravelBitaps\Models\Transaction;

class TransactionConfirmed
{
    /**
     * @var Transaction
     */
    public $transaction;

    /**
     * TransactionConfirmed constructor.
     *
     * @param Transaction $transaction
     */
    public function __construct(Transaction $transaction)
    {
        $this->transaction = $transaction;
    }

}
