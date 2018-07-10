<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TextEdit;
use DB;


class TextController extends Controller
{
    
    //view
     public function index()
    {
        $projects = TextEdit::all();
        
            return view('datatabletext', compact('projects')); //table
    }

    public function view(){

        $projects = TextEdit::get();

        return view('textview', compact('projects'));
    }

//add new text

    public function store(Request $request)
    {

      $validator = \Validator::make($request->all(), [
        'project_name' => 'required', 
        'project_code' => 'required|unique:text_edits,project_code',
        'project_text' => 'required'
           
        ]);

        if ($validator->fails()) {
            return redirect ('/addtext')
            ->withInput()
            ->withErrors($validator->errors());
        }

        //create new text
        $projects = new TextEdit; 
        $projects->project_name = $request->project_name;
        $projects->project_code = $request->project_code;
        $projects->project_text = $request->project_text;
        $projects->save();


        return redirect('datatabletext')->with('info','NewText saved!');
    }

//edit text 

     public function edit($id)
    {
        $projects = TextEdit::find($id);
        
        return view('textedit', compact('projects'));
    }

//update text

    public function update(Request $request, $id){

        $project = TextEdit::find($id);
        $project->project_name = $request->get('project_name');
        $project->project_code = $request->get('project_code');
        $project->project_text = $request->get('project_text');
        $project->update();
        return redirect('datatabletext')->with('Text updated !');
    }

public function getHistoryText(request $request){

  $projects = TaxReceipt::filterByIc('ic', $request['ic'])->first();

  if($projects != null){

    $project_text = TerProjectText::find($projects->code);

    $history = new TerHistoryProjectText;
    $history->id = $project_text->id;
    $history->project_code = $project_text->project_code;
    $history->text = $project_text->text;
    $history->save();

    $msg = 'New text is updated in DB';

  }else{

    $error = 1;
    $msg = 'Error adding new text in DB';
    return Redirect::back()->withErrors(['msg', 'The Message']);
  }
}
}
