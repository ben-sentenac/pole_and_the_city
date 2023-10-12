<?php

namespace App\QueryFilters;

use Illuminate\Http\Request;

class APIQueryFilter
{
    /**
     * Allowed params in the query
     */
    protected $allowedParams = [];

    protected $mapParams = [];

    protected $mapColumns = [];

    /**
     * Transform the query parameters from the request into an array suitable for database queries.
     * ex: /api/v1/anyquery?param[lte]=value
     * @return array [['column','operator','value']]
     */
    public function transformQuery(Request $request): array
    {
        $dbQuery = [];

        foreach ($this->allowedParams as $param => $operators) {

            $query = $request->query($param);

            if (! isset($query)) {
                continue;
            }

            $column = $this->mapColumns[$param] ?? $param;

            foreach ($operators as $operator) {
                if (isset($query[$operator])) {
                    $dbQuery[] = [$column, $this->mapParams[$operator], $query[$operator]];
                }
            }

        }

        return $dbQuery;
    }
}
