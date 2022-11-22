<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Throwable;

class CategoryControlller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $categories = Category::with('Sub_categories')->get();
            if($categories !=null){
                return response()->json([
                    'categories'=>$categories,
                    'status'=>2
                ]);
            }else{
                return response()->json([
                    'msg'=>'no data to show',
                    'status'=>3
                ]);
            }
        }catch(Throwable $thr){
            return response()->json([
                'msg'=>'somthing went wrong  Error Message: '.$thr,
                'status'=>4
            ]);
        }
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        try{
            if($category !=null){
                return response()->json([
                    'category'=>$category,
                    'status'=>2
                ]);
            }else{
                return response()->json([
                    'msg'=>'Category doesnt exist',
                    'status'=>3
                ]);
            }
        }catch(Throwable  $thr){
            return response()->json([
                'msg'=>'Somthing went wrong Error message: '.$thr,
                'status'=>4
            ]);
        }
        
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
