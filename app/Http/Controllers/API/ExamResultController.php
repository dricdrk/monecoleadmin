<?php

namespace App\Http\Controllers\API;
use App\ExamResult;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $examresult = ExamResult::all();
        return response()->json([
            "examresult" => $examresult
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
   { 
            $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'number_of_people' => 'string|max:255',
            'number_of_people_received' => 'string|max:255',
            'categories'  => 'string|max:255',
            'institution_id' => 'string|max:255',
        ]);
        $examresult = ExamResult::create([
            'name' => $validatedData['name'],
            'number_of_people' => $validatedData['number_of_people'],
            'number_of_people_received' => $validatedData['number_of_people_received'],
            'institution_id'  => $validatedData['institution_id' ],
            'categories'  => $validatedData['categories' ],
            
        ]);
        if(!is_null($examresult)) {
            return response()->json([
                "status" => "success",
                "message" => "examresult data have been create",
                "data you create" => $examresult
            ]);
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
        if($examresult = ExamResult::find($id)){
            return response()->json([
                "ExamResult" => $examresult
            ]);
            }else{
                return response()->json([
                    "Error" => "this examresult you want get doesn't exist"
                ]);
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
        $examresult = ExamResult::find($id);
        if($examresult->update($request->all())){
            $examresult->save();
            return response()->json([
            'success'=> 'your update has done',
            "Data"=> $examresult
            ]);
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
        $examresult = ExamResult::find($id);
        if($examresult->delete()){
            return response()->json([
            'success'=> 'Exam result has been delete succefully'
        ], 204);
        }
    }
}
