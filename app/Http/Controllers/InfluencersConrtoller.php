<?php

namespace App\Http\Controllers;

use App\Http\Resources\InflucnerResource;
use App\Models\Influencers;
use Illuminate\Http\Request;
use Throwable;

class InfluencersConrtoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $influencers = Influencers::with('Gallaries')->get();
            if($influencers != null){
                return response()->json([
                    'influencers'=>$influencers,
                    'ststus'=>2
                ]);
            }
        }catch(Throwable $thr){
            
        }
          
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Influencers  $influcencer
     * @return \Illuminate\Http\Response
     */
    public function show($influcencer)
    {
        return new InflucnerResource($influcencer); 
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
