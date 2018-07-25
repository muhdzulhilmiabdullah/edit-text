<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use Excel;
use File;
 
class VolunteerController  extends Controller
{
    public function index()
    {
        return view('volunteer.add-volunteer');
    }
 
    public function import(Request $request){
        //validate the xls file
        $this->validate($request, array(
            'file'      => 'required'
        ));
 
        if($request->hasFile('file')){
            $extension = File::extension($request->file->getClientOriginalName());
            if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {
 
                $path = $request->file->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                if(!empty($data) && $data->count()){
 
                    foreach ($data as $key => $value) {
                        $insert[] = [
                        'email' => $value->Email,
                        'fullname' => $value->Fullname,
                        'id_no' => $value->ID_no,
                        'Gender' => $value->Gender,
                        'Mobile_No' => $value->Mobile_No,
                        'Address' => $value->Address,
                        'Country' => $value->Country,
                        'City' => $value->City,
                        'Student' => $value->Student,
                        'University' => $value->University,
                        'University_Name' => $value->University_Name,
                        'Course' => $value->Course,
                        'Faculty' => $value->Faculty,
                        'Free_Time' => $value->Free_Time,
                        'Do_you_know_anyone_with_cancer' => $value->Do_you_know_anyone_with_cancer,
                        'Cancer_type' => $value->Cancer_type,
                        'Hobbies' => $value->Hobbies,
                        'Experiences' => $value->Experiences,
                        'Skills' => $value->Skills,
                        'Favorite_volunteering_activities' => $value->Favorite_volunteering_activities,
                        'Where_do_you_know_MAKNA' => $value->Where_do_you_know_MAKNA,

                        ];
                    }
 
                    if(!empty($insert)){
 
                        $insertData = DB::table('volunteer_vietnams')->insert($insert);
                        if ($insertData) {
                            Session::flash('success', 'Your Data has successfully imported');
                        }else {                        
                            Session::flash('error', 'Error inserting the data..');
                            return back();
                        }
                    }
                }
 
                return back();
 
            }else {
                Session::flash('error', 'File is a '.$extension.' file.!! Please upload a valid xls/csv file..!!');
                return back();
            }
        }
    }
 
     
}

/*

*/