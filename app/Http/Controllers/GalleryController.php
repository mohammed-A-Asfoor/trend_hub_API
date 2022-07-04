<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Http\Resources\GalleryCollection;
use App\Models\Influencers;
use Throwable;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $galleries = Gallery::all();
            //$galleries = Gallery::all();
            if ($galleries != null) {
                return response()->json([
                    'Galleries' => $galleries,
                    'status' => 2
                ]);
            } else {
                return response()->json([
                    'message' => 'No Data found',
                    'status' => 3
                ]);
            }
        } catch (Throwable $thro) {
            return response()->json([
                'message' => 'Error Message:'.$thro->getMessage(),
                'status' => 4
            ]);
        }
    }

    /**
     * Display a listing of the resource.
     * @param stirng $influnserid
     * @return \Illuminate\Http\Response
     */
    public function filter($influnserid)
    {
        try{
            
        $galaries = Influencers::find($influnserid)->Gallaries;
        if($galaries != null){
            return response()->json([
                'Galeries' => $galaries,
                'status' => 2
            ]);
        }else{
            return response()->json([
                'message' => 'No Data found',
                'status' => 3
            ]);
        }
        
        }catch(Throwable $thr){
            return response()->json([
                'message' => 'Error '.$thr,
                'status' => 3
            ]);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGalleryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGalleryRequest $request)
    {
        try {
            $gallery = Gallery::create($request->all());
            if ($gallery != false) {
                return response()->json([
                    'gallery' => $gallery,
                    'status' =>2
                ]);
            }elseif($gallery = null){
                return response()->json([
                    'message' => 'something went wrong',
                    'status' =>3
                ]);
            } else{
                return response()->json([
                    'message' => 'something went wrong',
                    'status' =>3
                ]);
            }
        } catch (Throwable $thro) {
            return response()->json([
                'message' => 'Error message',
                'status' =>4
            ]);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {

        return response()->json([
            'gallery' => $gallery,
            'status' =>2
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGalleryRequest  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
        try{
            $gallery->update($request->all());
            if($gallery != false){
                return response()->json([
                    'gallery' => $gallery,
                    'status' =>2
                ]);
            }else{
                return response()->json([
                    'msg' => 'someting went wrong',
                    'status' =>3
                ]);
            }
            
        }catch(Throwable $thro){
            return response()->json([
                'msg' => 'Error Message '+$thro,
                'status' =>4
            ]);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        try{
            $gallery->delete();
            if($gallery != false){
                return response()->json([
                    'msg' => 'record has been Deleted',
                    'status' =>2
                ]);
            }else{
                return response()->json([
                    'msg' => 'somthing went wrong ',
                    'status' =>3
                ]);
            }
        }catch(Throwable $thro){
            return response()->json([
                'msg' => 'Error Message '+$thro,
                'status' =>4
            ]);
        }
    }
}
