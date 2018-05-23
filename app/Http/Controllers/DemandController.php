<?php

namespace App\Http\Controllers;

use App\Demand;
use Illuminate\Http\Request;

class DemandController extends Controller
{
    public function getAllDemand(Request $request)
    {
        $orderBy = $request->order;
        if (in_array($orderBy, array('money', 'public_time', 'status'))) {
            self::response(3, null);
        }

        if ($demand = Demand::all()->orderBy($orderBy, 'desc')) {
            self::response(0, $demand);
        } else {
            self::response(5, null);
        }
    }

    public function getDemandById(Request $request)
    {
        $id = $request->id;
        if ($demand = Demand::where('id', '=', $id)->first()) {
            self::response(0, $demand);
        } else {
            self::response(5, null);
        }
    }

    public function getDemandByDesignerId(Request $request)
    {
        $id = $request->id;
        if ($demand = Demand::where('designer_id', '=', $id)->get()) {
            self::response(0, $demand);
        } else {
            self::response(5, null);
        }
    }

    public function getDemandByServiceId(Request $request)
    {
        $id = $request->id;
        if ($demand = Demand::where('service_id', '=', $id)->get()) {
            self::response(0, $demand);
        } else {
            self::response(5, null);
        }
    }

    public function getDemandByServiceDetailId(Request $request)
    {
        $id = $request->id;
        if ($demand = Demand::where('service_detail_id', '=', $id)->get()) {
            self::response(0, $demand);
        } else {
            self::response(5, null);
        }
    }

    public function getDemandBySearch(Request $request)
    {
        $param = $request->param;
        if ($demand = Demand::where('name', 'like', '%'.$param.'%')->orWhere('description','like','%'.$param.'%')->get()) {
            self::response(0, $demand);
        } else {
            self::response(5, null);
        }
    }

    public function getDemandByStatus(Request $request){
        $status = $request->status;
        if($demand = Demand::where('status', '=', $status)->get()){
            self::response(0, $demand);
        } else {
            self::response(5, null);
        }
    }
}
