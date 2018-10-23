<?php

namespace App\Http\Controllers;

use App\Txt;
use App\TextEdit;
use Illuminate\Http\Request;
use QrCode;

class TxtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = TextEdit::all();
        
        return view('text.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('text.create', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $texts = TextEdit::create($request->all());
        flash()->success('A new text has been created.')->important();
        return redirect()->route('text.show', $textedit); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Txt  $txt
     * @return \Illuminate\Http\Response
     */
    public function show(TextEdit $textedit)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Txt  $txt
     * @return \Illuminate\Http\Response
     */
    public function edit(TextEdit $textedit)
    {
        $texts = TextEdit::paginate(50);
        return view('text.index', compact('texts'));
        return view('text.edit', compact('texts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Txt  $txt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TextEdit $textedit)
    {
        $textedit->update($request->all());
        flash()->success('The text has been updated.')->important();
        return redirect()->route('text.show', $textedit); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Txt  $txt
     * @return \Illuminate\Http\Response
     */
    public function destroy(TextEdit $textedit)
    {
        $textedit->delete();
        flash()->success('A text has been deleted.')->important();
        return redirect()->route('text.index'); 
    }

    public function qrCode()
    {   //$test = TextEdit::find($id); //fetch data donor
        //$profile_link = $test->pdflink; // pull data untuk saved pdf link 
        //$qr_code = Qrcode::generate($profilelink); // generate qr code dari link 
        //$qr_size = Qrcode::size(250); // set size qr code

        $test = QrCode::size(250);
        $phonenumber = '0168591243';
        $email = 'contact@muhdzulhilmiabdullah.com';
        $instagram ='https://www.instagram.com/muhdzulhilmiabdullah';
        $whatsapp = 'https://api.whatsapp.com/send?phone=+60168591243&text=hey';
        return view('/qr.qr_view', compact('test','phonenumber','email','instagram','whatsapp'));
    }
}
    