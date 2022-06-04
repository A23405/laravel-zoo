<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\speciesarchivesService;

class speciesarchivesController extends Controller
{
    protected $speciesarchives;

    public function __construct(speciesarchivesService $speciesarchivesService)
    {
        $this->speciesarchives = $speciesarchivesService;
        
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
            'speciesarchives' => $this->speciesarchives->getAllspeciesarchives(),
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
        $result = $this->speciesarchives->createspeciesarchives($request, $file);
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
        //
        $file = $request->file('img');
        $result = $this->speciesarchives->updatespeciesarchives($request, $id , $file);
        if (!$result) {
            return response()->json(['status' => "修改失敗"], 400);
        }
        return response()->json([
            'dd' => 'dd HI Store',
            'status' => '修改成功',
            'req' => $result,
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
        $result = $this->speciesarchives->deletespeciesarchives($id);
        if (!$result) {
            return response()->json(['status' => "刪除失敗"], 400);
        }
        return response()->json([
            'dd' => 'dd HI Store',
            'status' => '刪除成功',
            'req' => $result,
        ], 200);
    }
}
