<?php
/**
 * Created by PhpStorm.
 * User: FAOZI
 * Date: 5/12/2017
 * Time: 2:32 PM
 * Email: faozimipa@gmail.com
 */

namespace App\Queries\GridQueries;

use DB;

use App\Queries\GridQueries\Contracts\DataQuery;

class CategoryQuery implements DataQuery
{
    public function data($column, $direction)
    {

        $rows = DB::table('categories')
            ->select('categories.id as Id',
                'categories.name as Name',
                'categories.icon as Icon',
                'categories.draft as Draft',
                'categories.brief as Brief',
                'categories.color as Color',
                'categories.priority as Priority',
                DB::raw('DATE_FORMAT(categories.created_at,
                         "%m-%d-%Y") as Created'))
            ->orderBy($column, $direction)
            ->paginate(10);

        return $rows;

    }

    public function filteredData($column, $direction, $keyword)
    {
        $rows = DB::table('categories')
            ->select('categories.id as Id',
                'categories.name as Name',
                'categories.icon as Icon',
                'categories.draft as Draft',
                'categories.brief as Brief',
                'categories.color as Color',
                'categories.priority as Priority',
                DB::raw('DATE_FORMAT(profiles.created_at,
                         "%m-%d-%Y") as Created'))
            ->where('categories.id', 'like', '%' . $keyword . '%')
            ->orWhere('categories.name', 'like', '%' . $keyword . '%')
            ->orWhere('categories.brief', 'like', '%' . $keyword . '%')
            ->orderBy($column, $direction)
            ->paginate(10);

        return $rows;

    }
}
