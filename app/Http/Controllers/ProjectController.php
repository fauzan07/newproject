<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Auth::check()) {
        $project=new Project();
        $pros=$project->all();
        return view('project.index',compact("pros"));
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
         if(Auth::check()) {

         $project=new Project();
         $pros1=$project->all();

        $category=new Category();
        $pros=$category->all();
        return view("project.add",compact("pros","pros1"));
    }else{
        echo "YOU ARE LOGGED OUT";
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
          if(Auth::check()) {

        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('public/uploads', $filename);
        }

        $data =["title"=>$request->title,
                 "discription"=>$request->discription,
                 "catagory_id"=>$request->parcat,
                 "relatedproject"=>$request->relatedproject,
                 "price"=>$request->price,
                 "image"=>$filename
                  ];
        $project=new Project($data);
        $project->save();
        $project->related_project()->sync($request->rb);
        return redirect('project')->withMessage('Project added successfully');
         }else{
        echo "YOU ARE LOGGED OUT";
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
     $category=Project::Findorfail($id)->category;
      $project=new Project();
      $pros=$project->where('id',$id)->first();
      $pros1=$pros->related_project;
      return view("project.show",compact('pros','pros1','category'));
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
       $project = Project::Findorfail($id);
       $categories = Category::all();

         $allRelatedproject = Project::where('id', '!=', $id)->get();

        $relatedprojectIds = [];

        foreach ($project->related_project as $rb) {
            array_push($relatedprojectIds, $rb->id);
        }
        return view("project.edit")->with([
            'project' => $project,
            'categories' => $categories,
            'relatedprojectIds' => $relatedprojectIds,
            'allRelatedproject' => $allRelatedproject
        ]);
    
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
       $filename = null;
          if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('public/uploads', $filename);
        }


         
        $data =["title"=>$request->title,
                 "discription"=>$request->discription,
                 "catagory_id"=>$request->parcat,
                 "relatedproject"=>$request->relatedproject,
                 "price"=>$request->price,
                 //"image"=>$filename
                  ];
       $project = Project::Findorfail($id);
        $project->update($data);
        $project->related_project()->sync($request->rb);
        return redirect('project')->withMessage('Project edited successfully');
         }else{
        echo "YOU ARE LOGGED OUT";
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
     $project=Project::Findorfail($id);
     $project->delete();
     return redirect('project')->withMessage('Project deleted successfully');
     }else{
        echo "you are logged out";
    }
    }

 private function validatedata($data)
    {
        $data->validate([
        'title' => 'required',
        'discription' => 'required',
        'price' => 'required|numeric|min:0',
         'image' => 'required',
     ]);
    }
}


