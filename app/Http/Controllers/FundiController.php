<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Fundi;

class FundiController extends Controller
{
    public function index()
    {
        return view('fundi.fomu_ya_uwanachama');
    }
    
    public function fungua_mafundi()
    {
        return view('fundi.mafundi_wote');
    }

    public function vuta_mafundi()
    {
        $mafundi = Fundi::all();
        return response()->json([
            'mafundi'=>$mafundi,
        ]);
    }

    public function save_form(Request $request){
        $request->validate([
            'jinakwanza'=> 'required',
            'jinakati'=> 'required',
            'jinamwisho'=> 'required',
            'gender'=> 'required',
            'dob'=> 'required',
            'uraia'=> 'required',
            'nida'=> 'required',
            'elimu'=> 'required',
            'uzoefu'=> 'required',
            'mkoa'=> 'required',
            'wilaya'=> 'required',
            'kata'=> 'required',
            'mtaa'=> 'required',
            'mji'=> 'required',
            'phone1'=> 'required',
            'phone2'=> 'required',
            'email'=> 'required',
            'uvtaasisi'=> 'required',
            'jinamdhamini'=> 'required',
            'uhusianomdhamini'=> 'required',
            'nambamdhamini'=> 'required',
        ]);

        Fundi::create($request->all());
        // return response()->json();
        return redirect()->back();
    }
    
    public function edit($id)
    {
        $fundi = Fundi::find($id);
        if($fundi)
        {
            return response()->json([
                'status'=>200,
                'fundi'=> $fundi,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No Fundi Found.'
            ]);
        }

    }

    public function badilisha_taarifa(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            // 'name'=> 'required|max:191',
            // 'course'=>'required|max:191',
            // 'email'=>'required|email|max:191',
            // 'phone'=>'required|max:10|min:10',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }
        else
        {
            $fundi = Fundi::find($id);
            if($fundi)
            {
                $fundi->name = $request->input('name');
                $fundi->course = $request->input('course');
                $fundi->email = $request->input('email');
                $fundi->phone = $request->input('phone');
                $fundi->update();
                return response()->json([
                    'status'=>200,
                    'message'=>'Fundi Updated Successfully.'
                ]);
            }
            else
            {
                return response()->json([
                    'status'=>404,
                    'message'=>'No Fundi Found.'
                ]);
            }

        }
    }

    public function destroy($id)
    {
        $fundi = Fundi::find($id);
        if($fundi)
        {
            $fundi->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Fundi Deleted Successfully.'
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No Fundi Found.'
            ]);
        }
    }
}
