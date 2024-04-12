<?php

namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class InvoiceFilter extends ApiFilter {
    protected $safeParams = [
        'customerId' => ['eq'],
        'amount' => ['eq','gt','gte','lt','lte'],
        'status' => ['eq','ne'],
        'billedDate' => ['eq','gt','gte','lt','lte'],
        'piadDate' => ['eq','gt','gte','lt','lte']
    ];
    protected $columnMap = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_dated',
        'piadDate' => 'paid_dated'
    ];
    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!='
    ];
}