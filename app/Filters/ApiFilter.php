<?php


namespace App\Filters;


use Illuminate\Http\Request;

class ApiFilter
{
    protected $safeParams = [];

    protected $columnMap = [];

    protected $operatorMap = [];

    public function transform(Request $request) {
        $eloQuery = [];

        foreach ($this->safeParams as $pam => $operators) {
            $query = $request->query($pam);

            if (!isset($query)) {
                continue;
            }

            $column = $this->columnMap[$pam] ?? $pam;

            foreach ($operators as $operator) {
                if (isset($query[$operator])) {
                    $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }

        return $eloQuery;
    }

}
