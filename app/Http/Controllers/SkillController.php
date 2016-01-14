<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;
use Auth;
use App\Skills;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $json= json_decode(Storage::get('Categories.json'),true);   
        return view('addskills',$json);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $user= Auth::user();        
        $category= $request->input('SeCategory');
        if(!empty($request->input('Category')))
        {
            $category= $request->input('Category');
            $category= htmlspecialchars($category);
            $json= json_decode(Storage::get('Categories.json'),true);
            $json['Section'][$category]= $category;
            Storage::put(
                'categories.json',
                json_encode($json)
            );
        }
        $skill= htmlspecialchars($category);
        $description= htmlspecialchars($request->input('Description'));
        $email= $user->email;
        $newskill= new Skills;
        $newskill->email= $email;
        $newskill->Skill= $skill;
        $newskill->Description= $description;
        $newskill->save();
        return view('addskills',['status'=>'Posted']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        $user= Auth::user();
        $email= $user->email;
        $array['index']= Skills::where('email',$email)->get();
        return view('skills',$array);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
