<?php


namespace App\Filters\V1;


use App\Filters\ApiFilter;

class InvoiceFilter extends ApiFilter
{
//$table->integer('customer_id');
//$table->integer('amount');
//$table->string('status'); // Billed, Paid, Void
//$table->dateTime('billed_date');
//$table->dateTime('paid_date')->nullable();

    protected $safeParams = [
        'customer_id' => ['eq'],
        'amount' => ['eq', 'lt', 'gt', 'lte', 'gte'],
        'status' => ['eq', 'ne'],
        'billedDate' => ['eq', 'lt', 'gt', 'lte', 'gte'],
        'paidDate' => ['eq', 'lt', 'gt', 'lte', 'gte'],
    ];

    protected $columnMap = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '<>'
    ];
}
