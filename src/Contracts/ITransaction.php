<?php

namespace PostMix\LaravelBitaps\Contracts;

use Illuminate\Support\Collection;
use PostMix\LaravelBitaps\Models\Transaction;

interface ITransaction
{
    /**
     * @param Transaction $transaction
     * @param $data
     * @return Transaction
     */
    public function makeTransaction(Transaction $transaction, $data): Transaction;

    /**
     * @param $currency
     * @return int
     */
    public function getCurrencyId($currency): int;

    /**
     * @param $address
     * @return string
     */
    public function getUserByAddress($address): string;
}