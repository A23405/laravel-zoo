<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\areaService;

class areasController extends Controller
{
    protected $area;

    public function __construct(areaService $areaService)
    {
        $this->area = $areaService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json([
            'dd' => 'dd HI',
            'areas' => $this->area->getAllarea(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $file = $request->file('img');
        $result = $this->area->createarea($request, $file);
        return response()->json([
            'dd' => 'dd HI Store',
            'status' => '新增成功',
            'req' => $result,
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $result = $this->area->getOne($id);
        return response()->json([
            'dd' => 'dd HI Show',
            'status' => '成功',
            'req' => $result,
        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $file = $request->file('img');
        $createarea = $this->area->updatearea($request, $id , $file);
        if (!$createarea) {
            return response()->json(['status' => "修改失敗"], 400);
        }
        return response()->json([
            'dd' => 'dd HI Store',
            'status' => '修改成功',
            'req' => $createarea,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $deletearea = $this->area->deletearea($id);
        if (!$deletearea) {
            return response()->json(['status' => "刪除失敗"], 400);
        }
        return response()->json([
            'dd' => 'dd HI Store',
            'status' => '刪除成功',
            'req' => $deletearea,
        ], 200);
    }
}
