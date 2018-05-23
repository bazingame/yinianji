<?php

namespace App\Http\Controllers;

use App\Model\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function getAllWork(Request $request)
    {
        $orderBy = $request->order;
        if (in_array($orderBy, array('time', 'like', 'view', 'master'))) {
            self::response(3, null);
        }

        if ($work = Work::all()->orderBy($orderBy, 'desc')) {
            self::response(0, $work);
        } else {
            self::response(4, null);
        }
    }

    public function getWorkById(Request $request)
    {
        $id = $request->id;
        if ($work = Work::where('id', '=', $id)->first()) {
            self::response(0, $work);
        } else {
            self::response(4, null);
        }
    }


    public function getWorkByServiceId(Request $request)
    {
        $id = $request->id;
        if ($work = Work::where('service_id', '=', $id)->get()) {
            self::response(0, $work);
        } else {
            self::response(4, null);
        }
    }

    public function getWorkByServiceDetailId(Request $request)
    {
        $id = $request->id;
        if ($work = Work::where('service_detail_id', '=', $id)->get()) {
            self::response(0, $work);
        } else {
            self::response(4, null);
        }
    }

    public function getWorkBySearch(Request $request)
    {
        $param = $request->param;
        if ($work = Work::where('name', 'like', '%'.$param.'%')->orWhere('description','like','%'.$param.'%')->get()) {
            self::response(0, $work);
        } else {
            self::response(4, null);
        }
    }
}
