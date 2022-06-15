<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\AnimalfileService;
use Illuminate\Support\Facades\DB;

class AnimalfilesController extends Controller
{
    protected $Animalfile;

    public function __construct(AnimalfileService $AnimalfileService)
    {
        $this->Animalfile = $AnimalfileService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back_individualanimal', [
            'dd' => 'dd HI',
            'Animalfile' => $this->Animalfile->getAll(),
            'species' => DB::select('select species_
            FROM speciesarchives'),
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
        $file = $request->file('img');
        dd($file,$request);
        $x = DB::select('select x.species_,x.id,x.name,x.pid,x.total
        from(select a.species_,a.id,b.name,b.pid,count(c.species_) as total
        FROM speciesarchives as a
        INNER JOIN areas as b on a.area = b.name
        INNER JOIN animalfiles as c on a.species_ = c.species_
        GROUP by c.species_) as x
        where x.species_ = ?',[$request->species]);
        $aid = $x[0]->pid.$x[0]->id.sprintf("%03d",$x[0]->total+1);
        $result = $this->Animalfile->creatanimal($request,$aid,$file);
        return redirect()->route('back_individualanimal');
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
    }
}
