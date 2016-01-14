<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\porrequests;
use App\pors;

class requestcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user= Auth::user();
        $email= $user->email;
        $array['pors']= por::where('email',$email)->get();
        foreach($array['pors'] as $arr)
        {
            if(($arr['Position'] !='Core') && ($arr['Position'] != 'Panel'))
            {
                unset($arr);       
            }
            else
            {
                $array0['porrequests']= porrequests::where('Department',$arr['Department'])->get();
                foreach($array0['porrequests'] as $arr0)
                {
                    if(($arr['Position']==$arr0['ApproverPosition']) && ($arr['Organisation']==$arr0['Organisation']))
                    {
                        $str= "@$#".$arr['Position']."@$#".$arr['Organisation'];
                        $str1= "@$#".$arr0['id']."@$#".$arr0['RequestEmail']; 
                        $arr1['pors'][$str][$str1]= '1';
                    }
                }
            }
        }
        if(isset($arr1['pors']))
        {
            return view('requests',$arr1);
        }
        else
        {
            $str= "No Core or Panel positions are registered for.";
            $arr['pors'][$str]= "Nil";
            return view('requests'.$arr);
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
