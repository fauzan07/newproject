<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\category;
use APP\Categoryassign;
use App\Project;

class ProjectdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::User();
        $category=$user->category;
        $project=$user->project;
         return view('projectdetail.index',compact('category','project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
         $project= new Project();
         $sproject=$project->where(['catagory_id'=>$id])->get();
        
    return view("projectdetail.show",compact('sproject'));   
    }


 public function view($id)
    {
     
         $project= new Project();
         $vproject=$project->where(['id'=>$id])->get();
        
    return view("projectdetail.view",compact('vproject'));   
    }


    public function view2($id)
    {
     
         $project= new Project();
         $vproject=$project->where(['id'=>$id])->get();
        
    return view("projectdetail.view",compact('vproject'));   
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
