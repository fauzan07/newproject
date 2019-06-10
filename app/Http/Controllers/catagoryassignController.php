<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Catagoryassign;
use App\Category;
use App\Project;
use App\User;

class catagoryassignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         if (Auth::check()) {
         $catagoryassign=new Catagoryassign();
        $pros=Catagoryassign::all();
        return view('catagoryassign.index',compact('pros'));
    }else{
        echo "you are logged out";
    }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         if (Auth::check()) {

        $category=new Category();
        $pros1=$category->all();

        $user=new User();
        $pros=$user->where('user_type', '=', 'user')->whereNotNull('approved_at')->get();
        return view("catagoryassign.add",compact('pros','pros1'));
        }else{
        echo "you are logged out";
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

       $user = User::findOrFail($request->rbi);


         $user->category()->sync($request->rb);
        return redirect('catagoryassign')->withMessage('catagory assigned successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::check()) {
       $catagoryassign=Catagoryassign::findOrFail($id);
        $pros1=Category::all();
        $pros=User::all();
      return view("catagoryassign.edit",compact('catagoryassign','pros1','pros'));
      }else{
        echo "you are logged out";
    } 
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

         $user = User::findOrFail($request->rbi);
         $user->category()->sync($request->rb);
        return redirect('catagoryassign');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          if (Auth::check()) {
     $catagoryassign=Catagoryassign::Findorfail($id);
        $catagoryassign->delete($catagoryassign);
        return redirect('catagoryassign');
     }else{
        echo "you are logged out";
    }
    }
}
