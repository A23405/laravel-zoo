<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\speciesarchivesService;
use Illuminate\Support\Facades\DB;

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
    //前台首頁用
    public function index()
    {
        // return response()->json([
        //     'dd' => 'dd HI',
        //     'speciesarchives' => $this->speciesarchives->getAllspeciesarchives(),
        // ]);
        return view('dashboard', [
            'dd' => 'dd HI',
            'speciesarchives' => $this->speciesarchives->getAllspeciesarchives(),
            'areas' => DB::select("select * from areas"),
        ]);
    }
    public function search(Request $request)
    {
        // return response()->json([
        //     'dd' => 'dd HI search',
        //     'search' => $this->speciesarchives->getsearch(),
        // ]);
        return view('dashboardSearch', [
            'dd' => 'dd HI',
            'speciesarchives' => $this->speciesarchives->getsearch($request),
        ]);
    }
    //後台首頁用
    public function backindex()
    {
        // return response()->json([
        //     'dd' => 'dd HI search',
        //     'speciesarchives' => $this->speciesarchives->getall(),
        // ]);
        return view('back_main', [
            'dd' => 'dd HI back',
            'speciesarchives' => $this->speciesarchives->getall(),
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
        // return response()->json([
        //     'dd' => 'dd HI Store',
        //     'status' => '新增成功',
        //     'req' => $result,
        // ], 200);
        // return redirect('back_main', [
        //     'dd' => 'dd HI Store',
        //     'status' => '新增成功',
        //     'req' => $result,
        // ], 200)->with('statusbb', '成功');
        return redirect()->route('back_main')->with('status', '成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $idS
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $result = $this->speciesarchives->getOne($id);

        return view('animal_file', [
            'dd' => 'dd HI Show',
            'status' => '成功',
            'req' => $result,
            'animals' => DB::select('select a.id,b.name,b.img
            FROM speciesarchives as a
            INNER JOIN animalfiles as b on a.species_ = b.species_
            where id = ?', [$id]),
        ]);
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
        $result = $this->speciesarchives->updatespeciesarchives($request, $id, $file);
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
