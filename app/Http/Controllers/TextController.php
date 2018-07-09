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
        $receipt_texts = TextEdit::all();
        
        return view('/addtext'); //use textedit blade
    }

//add new text

    public function store(Request $request)
    {

      $validator = \Validator::make($request->all(), [
        'project_title' => 'required',
        'project_code' => 'required',
        'project_text' => 'required'
           
        ]);

        if ($validator->fails()) {
            return redirect ('/addtext')
            ->withInput()
            ->withErrors($validator->errors());
        }

        //create new text
        $project = new TextEdit; 
        $project->project_title = $request->project_title;
        $project->project_code = $request->project_code;
        $project->project_text = $request->project_text;
        $project->save();

        return redirect('/')->with('info','Saved!');
    }

//edit text 

     public function editText(Request $request, $id)
    {
        $this->validate($request, [
        'project_title' => 'required',
        'project_code' => 'required',
        'project_text' => 'required',
            
        ]);

      $data = array(

        'project_title' => $request->input('project_title'),
        'project_code' => $request->input('project_code'),
        'project_text' => $request->input('project_text'),
        
        );

      TextEdit::where('id', $id) ->update($data);

      return redirect('datatabletext')->with('info','Update saved!'); 

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
