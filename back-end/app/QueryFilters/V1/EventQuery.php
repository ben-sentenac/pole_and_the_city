<?php

namespace App\QueryFilters\V1;

use App\QueryFilters\APIQueryFilter;

class EventQuery extends APIQueryFilter
{
    /**
     * Allowed params in the query with allowed operator
     * ex: /api/v1/anyquery?param[lte]=value
     */
    protected $allowedParams = [
        'location' => ['eq'],
        'date' => ['eq', 'gte', 'lte', 'gt', 'lt'],
        'time' => ['eq', 'gte', 'lte', 'gt', 'lt'],
        'ticketPrice' => ['eq', 'gte', 'lte', 'gt', 'lt'],
        'maxAttendees' => ['eq', 'gte', 'lte', 'gt', 'lt'],
        'registrationDeadline' => ['eq', 'gte', 'lte', 'gt', 'lt'],
    ];

    //mapping operator
    protected $mapParams = [
        'eq' => '=',
        'gte' => '>=',
        'gt' => '>',
        'lte' => '<=',
        'lt' => '<',
    ];

    //column to transform
    protected $mapColumns = [
        'ticketPrice' => 'ticket_price',
        'maxAttendees' => 'max_attendees',
        'registrationDealine' => 'registration_deadline',
    ];
}
