<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Candidate\Education;
use App\Models\Candidate\PersonalInfo;

class CandidateController extends Controller
{
    public function candidateDashboard()
    {
        return view('backend.candidate.dashboard');
    }

    public function candidateRegister()
    {
        return view('frontend.pages.auth.candidate-registration');
    }

    public function candidateDoRegister (Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);


        $validatedData['role'] = 'candidate';

        User::create($validatedData);


        return redirect()->route('home.page')->with('message', 'Registration Successful!');

    }



    public function personalInfo()
    {
        return view('backend.candidate.profile.personal-info.create');
    }

    public function personalInfoStore(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'marital_status' => 'required',
            'nationality' => 'required',
            'national_id' => 'required',
            'religion' => 'required',
            'contact_phone' => 'required',
            'contact_email' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        PersonalInfo::create($validatedData);

        User::create(
            ['is_profile_created' => true],
        );


        return redirect()->back()->with('message', 'Personal Info Created Successfully!');
    }


    public function personalInfoEdit($id)
    {
        $personalInfo = PersonalInfo::where('user_id', $id)->first();
        return view('backend.candidate.profile.personal-info.edit', compact('personalInfo'));
    }


    public function personalInfoUpdate(Request $request, $id)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'marital_status' => 'required',
            'nationality' => 'required',
            'national_id' => 'required',
            'religion' => 'required',
            'contact_phone' => 'required',
            'contact_email' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
        ]);

        $personalInfo = PersonalInfo::where('user_id', $id)->first();
        $personalInfo->update($validatedData);
        return redirect()->back()->with('message', 'Personal Info Updated Successfully!');
    }

    public function educationCreate(){

        return view('backend.candidate.profile.education-info.create');
    }

    public function educationStore(Request $request)
    {

        $validatedData = $request->validate([

            "level" => "required",
            "degree_name" => "required",
            "group" => "required",
            "institution" => "required",
            "country" => "required",
            "result" => "required",
            "scale" => "nullable",
            "start_date" => "required",
            "end_date" => "required",
            "duration" => "required",
            "year_of_passing" => "required",
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        Education::create($validatedData);
        return redirect()->back()->with('message', 'Education Info Created Successfully!');
    }

        public function educationEdit($id) {

            $education = Education::where('user_id', $id)->first();
            return view('backend.candidate.profile.education-info.edit', compact('education'));
        }


        public function educationUpdate(Request $request, $id) {
            $validatedData = $request->validate([

                "level" => "required",
                "degree_name" => "required",
                "group" => "required",
                "institution" => "required",
                "country" => "required",
                "result" => "required",
                "scale" => "nullable",
                "start_date" => "required",
                "end_date" => "required",
                "duration" => "required",
                "year_of_passing" => "required",
            ]);

            $education = Education::where('user_id', $id)->first();

            $education->update($validatedData);
            return redirect()->back()->with('message', 'Education Info Updated Successfully!');
        }

}
