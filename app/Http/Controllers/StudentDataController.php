<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CertificateModel;
use App\Models\LoginModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class StudentDataController extends Controller
{

    function getStudentByID(Request $req){
        
        $certificateModel = CertificateModel::where('certificate_id',$req->certificate_id)->first();
        
        if($certificateModel){
            return response()->json([
                'status' => true,
                'title' => 'Student found',
                'message' => 'Student found',
                'data' => [
                    'student' => $certificateModel 
                ]   
            ]);            
        }
        
        return response()->json([
            'status' => false,
            'title' => 'Not found',
            'message' => 'Student not found',
        ], 404);
                
    }

    /**
     * It inserts the data into the database.
     *
     * @param Request $req
     * @return RedirectResponse
     */
    function Insert(Request $req)
    {
        $isSaved  = CertificateModel::create([
            'stu_name'=>$req->name,
            'stu_course'=>$req->subjects,
            'stu_admitted_date'=>$req->admit_date,
            'stu_course_completed_date'=>$req->course_complete_date,
            'certificate_id'=>$req->certificate_id,
            'certificate_generated_date'=>$req->certificate_generated_date,
            'course_month'=>$req->months,
            'description' => $req->description
        ]);

        if($isSaved){
            Session::flash('success_message','Created Successfully');
        }else{
            Session::flash('success_message','Failed to create!');
        }
        return redirect()->route('admin.certificate.list');
    }

    function showData()
    {
        $data = CertificateModel::orderBy('student_id','DESC')->get();
        return view('certificate',['student'=>$data]);
    }
    function viewCertificate($student_id )
    {
        $data = CertificateModel::where('student_id',$student_id)->first();
        return view('image',compact('data'));
    }
    function printCertificate($student_id )
    {
        $data = CertificateModel::where('student_id',$student_id)->first();
        return view('printcertificate',compact('data'));

    }

    public  function loginView()
    {
        $checkIfUserLogin = Auth::guard('web')->user();
        if(!$checkIfUserLogin )
        {
            return view('login');
        }
        else
        {
            return redirect()->route('admin.dashboard');
        }

    }

    function Login(Request $req)
    {
        $checkLogin = Auth::guard('web')->attempt(['email' => $req->email , 'password' => $req->password]);
        if( $checkLogin ){
            return redirect()->route('admin.dashboard');
        }
        else
        {
            return back()->withErrors([
                'message' => 'Incorrect Details. Kindly, login again.'
            ]);
        }
    }

    public  function FormSubmit()
    {
        return view('student');
    }

    public function Userlogout()
    {
        Auth::logout();
        return view('login');
    }

    public function CertificateView()
    {
        return redirect('image');
    }

    public function deleteCertificate($studentId)
    {
        $student = CertificateModel::where('student_id',$studentId)->delete();
        if($student){
            Session::flash('success_message','Deleted Successfully');
        }else{
            Session::flash('success_message','Failed to delete!');
        }
        return redirect()->route('admin.certificate.list');
    }

    public function editCertificate($studentId)
    {
        $student = CertificateModel::where('student_id',$studentId)->first();
        return view('student-edit',['student'=> $student]);
    }

   public function updateCertificate(Request $req){

       $student = CertificateModel::where('student_id',$req->student_id)->update([
           'stu_name'=>$req->name,
           'stu_course'=>$req->subjects,
           'stu_admitted_date'=>$req->admit_date,
           'stu_course_completed_date'=>$req->course_complete_date,
           'certificate_id'=>$req->certificate_id,
           'certificate_generated_date'=>$req->certificate_generated_date,
           'course_month'=>$req->months,
           'description' => $req->description
       ]);

       if($student){
           Session::flash('success_message','Update Successfully');
       }else{
           Session::flash('success_message','Failed to update!');
       }
       return redirect()->route('admin.certificate.list');
   }
   
   public function verifyStudent($studentID = null){
        $student = CertificateModel::where('certificate_id',$studentID)->first();
        if($student){
            return view('verify.certificate',compact('student'));
        }
        abort(403, "Invalid Certificate ID");
   }
   
   public function verifyStudentCertificate(){
     return view('verify.find-certificate');       
   }
   
   public function verifyStudentByCertificateID(Request $request){
        $student = CertificateModel::where('certificate_id', $request->certificateID)->first();
        if($student){
            return view('verify.certificate', compact('student'));
        }
        abort(403, "Invalid Certificate ID");
   }

}
