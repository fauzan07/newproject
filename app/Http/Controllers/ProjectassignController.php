<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Projectassign;
use App\project;
use App\User;

class ProjectassignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         if (Auth::check()) {
        $projectassign=new Projectassign();
        $pros=$projectassign->all();
        return view('projectassign.index',compact('pros'));
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

        $project=new Project();
        $pros1=$project->all();

        $user=new User();
         $pros=$user->where('user_type', '=', 'user')->whereNotNull('approved_at')->get();
        return view("projectassign.add",compact('pros','pros1'));
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
         $user->project()->sync($request->rb);
        return redirect('projectassign')->withMessage('project assigned successfully');
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
       $projectassign=Projectassign::findOrFail($id);
        $pros1=Project::all();
        $pros=User::all();
      return view("projectassign.edit",compact('projectassign','pros1','pros'));
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
         $user->project()->sync($request->rb);
        return redirect('projectassign');
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
     $projectassign=Projectassign::Findorfail($id);
        $projectassign->delete($projectassign);
        return redirect('projectassign');
     }else{
        echo "you are logged out";
    }
    }
}
