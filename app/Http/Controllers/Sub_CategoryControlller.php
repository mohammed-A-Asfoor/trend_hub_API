<?php

namespace App\Http\Controllers;

use App\Models\Sub_Category;
use App\Models\Category;
use App\Http\Requests\StoreSub_CategoryRequest;
use App\Http\Requests\UpdateSub_CategoryRequest;
use Throwable;

class Sub_CategoryControlller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $sub_Categories = Sub_Category::all();
            if($sub_Categories !=null){
                return response()->json([
                    'categories'=>$sub_Categories,
                    'status'=>2
                ]);
            }else{
                return response()->json([
                    'msg'=>'No data',
                    'status'=>3
                ]);
            }
        }catch(Throwable $thro){
            return response()->json([
                'msg'=>'somthing went wrong. Error message: '.$thro,
                'status'=>3
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSub_CategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSub_CategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sub_Category  $sub_Category
     * @return \Illuminate\Http\Response
     */
    public function show(Sub_Category $sub_Category)
    {
        try{
            if($sub_Category !=null){
                return response()->json([
                    'sub_category'=>$sub_Category,
                    'status'=>2
                ]);
            }else{
                return response()->json([
                    'msg'=>'Cant Show this Sub category',
                    'status'=>3
                ]);
            }
        }catch(Throwable $thr){
            return response()->json([
                'msg'=>'Somthing went wrong. Error Code: '.$thr,
                'status'=>3
            ]);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    //public function filter($id){
     //   $catego
//}
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSub_CategoryRequest  $request
     * @param  \App\Models\Sub_Category  $sub_Category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSub_CategoryRequest $request, Sub_Category $sub_Category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sub_Category  $sub_Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sub_Category $sub_Category)
    {
        //
    }
}
