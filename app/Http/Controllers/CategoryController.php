<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Category;
use App\Project;
use App\User;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
    $this->middleware('auth');
    }
    
    public function approval(){
    return view('approval');
    }

    public function dindex(){
    return view('dindex');
    }


    public function logout(Request $request){
    Auth::logout();
    return redirect('/login');
    }


    public function usert(){
    return view('usertrack');
    }

    public function index(){
    if (Auth::check()) {
        $category=new Category();
        $pros=$category->all();
        return view('category.index',compact('pros'));
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
        return view("category.add");
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

    $this->validatedata($request);
    if (Auth::check()) {
        $data =["name"=>$request->name,];
        $category=new Category($data);
        $category->save();
        return redirect('category')->withMessage('Project added successfully');
    }else{
        echo "you are logged out";
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    if (Auth::check()) {
        $projects=Category::Findorfail($id)->projects;
         // $project= new Project();
         // $sproject=$project->where(['catagory_id'=>$id])->get();
         $category=Category::Findorfail($id);
    return view("category.show",compact('projects','category'));
    }else{
        echo "you are logged out";
    }
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
       $category=Category::findOrFail($id);
      return view("category.edit",compact('category'));
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
    $this->validatedata($request);
    if (Auth::check()) {
        $data =["name"=>$request->name,];
        $category=Category::Findorfail($id);
        $category->update($data);
        return redirect('category')->withMessage('Project edited successfully');
    }else{
        echo "you are logged out";
    }
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
       $category=Category::Findorfail($id);
       $category->delete();
       return redirect('category')->withMessage('Project deleted successfully');;
     }else{
        echo "you are logged out";
    }
    }

     private function validatedata($data)
    {
        $data->validate([
        'name' => 'required',
        ]);
    }
}
