<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Pagination\LengthAwarePaginator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function message(string $type, string $message) 
    {
        Session::flash('message', $message);
        Session::flash('message_type', $type);
    }

    public function getBaseTableContextData(LengthAwarePaginator $data, array $title, array $fields,
                                            string $path, bool $hasDetail = false) 
    {
        return [
            "title" => $title,
            "fields" => $fields,
            "data" => $data,
            "path" => $path,
            "hasDetail" => $hasDetail,
            "hasEdit" => true,
            "hasDelete" => true,
        ];
    }
}
