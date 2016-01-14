<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;
use Auth;
use App\por;
use App\porrequests;


class PORController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $json= json_decode(Storage::get('Categories.json'),true);
        return view('addPOR',$json);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user= Auth::user();
        $json= json_decode(Storage::get('Categories.json'),true);        
        $position= $request->input('SePosition');
        if(!empty($request->input('Position')))
        {
            $position= $request->input('Position');
            $position= htmlspecialchars($position);
            $json['PORPosition'][$position]= $position;
        }
        $SubDepartment= $request->input('SeSubDepartment');
        if(!empty($request->input('SubDepartment')))
        {
            $SubDepartment= $request->input('SubDepartment');
            $SubDepartment= htmlspecialchars($SubDepartment);
            $json['PORSubDepartment'][$SubDepartment]= $SubDepartment;
        }
        $Department= $request->input('SeDepartment');
        if(!empty($request->input('Department')))
        {
            $Department= $request->input('Department');
            $Department= htmlspecialchars($Department);
            $json['PORDepartment'][$Department]= $Department;
        }
        $Organisation= $request->input('SeOrganisation');
        if(!empty($request->input('Organisation')))
        {
            $Organisation= $request->input('Organisation');
            $Organisation= htmlspecialchars($Organisation);
            $json['Organisation'][$Organisation]= $Organisation;
        }        
        Storage::put(
            'categories.json',
            json_encode($json)
        );
        $email= $user->email;
        $POR= new por;
        $POR->email= $email;
        $POR->Position= $position;
        $POR->SubDepartment= $SubDepartment;
        $POR->Department= $Department;
        $POR->Organisation= $Organisation;
        $POR->Status=0;
        $POR->save();
        $Request= new porrequests;
        $Request->RequestEmail= $email;
        $Request->RequestPosition= $position;
        if($position=='Core')
        {
            $Request->ApproverPosition= 'Panel';
        }
        else
        {
            $Request->ApproverPosition= 'Core';
        }
        $Request->SubDepartment= $SubDepartment;
        $Request->Department= $Department;
        $Request->Organisation= $Organisation;
        $Request->save();
        $Msg['Msg']= "Your request has been sent for approval";
        return view('addPOR',$Msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user= Auth::user();
        $email= $user->email;
        $array['pors']= por::where('email',$email)->get();
        return view('PORs',$array);    
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
