<?php

namespace App\Traits;

/**
 * Filter API response by paramentars alloved in Model.
 *
 * @todo write documentation
 *
 */
trait FilterableTrait
{

    protected $validFilterableFields = [];

    // Permited operators
    protected $operators = ['=', '<', '>', '<=', '>=', '<>', '!=', 'like', 'not like', 'between', 'ilike'];

    public function buildFilter($input)
    {
        $filter = [];

        foreach ($input as $key => $value) {
            if(!in_array($key, $this->filterable)) {
                continue;
            }

            // Process input values
            // if '|' detected, an operator value is added
            if (strpos($value, '|') !== false) {
                $valueComp = explode('|', $value);

                if ( strpos($value, '|') > 0 && in_array($valueComp[0], $this->operators) ) {
                    array_push($filter,[$key,$valueComp[0],$valueComp[1]]);
                } else {
                    array_push($filter,[$key,$valueComp[1]]);
                }
            } else {
                array_push($filter,[$key,$value]);
            }
        }

        return $filter;
    }
}
