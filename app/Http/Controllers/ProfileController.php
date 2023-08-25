<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfile;
use App\Models\Doc;
use App\Models\DocCategory;
use App\Models\EducationDetail;
use App\Models\Family;
use App\Models\Personal;
use App\Models\User;
use App\Models\WorkExperience;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{

    private $personal = null;
    private $family = null;
    private $work = null;
    private $education = null;
    private $doc = null;

    public function __construct()
    {
        $this->personal = new Personal();
        $this->family = new Family();
        $this->work = new WorkExperience();
        $this->education = new EducationDetail();
        $this->doc = new Doc();

        //Permission Middlewares
        $this->middleware('permission:profile-list|profile-create|profile-edit|profile-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:profile-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:profile-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:profile-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $profile = User::with('docs','personal', 'education', 'work', 'family')->find(Auth::user()->id);
        return view('profiles.index', compact('profile'));
    }

    public function create()
    {
    }

    public function store(StoreProfile $request)
    {
        //validation
        // dd($request->all());
        $validated = $request->validated();

        DB::beginTransaction();
        try {
            //personal data insertion
            $this->personal->store([
                'user_id' => Auth::user()->id,
                'personal_email' => $request->personal_email,
                'date_of_birth'  => $request->dob,
                'gender' => $request->gender,
                'religion' => $request->religion,
                'personal_contact_number' => $request->contact_number,
                'residential_address' => $request->residential_address,
                'permanent_address' => $request->permanent_address,
                'cnic' => $request->cnic_num,
                'meezan_bank' => $request->meezan_account,
                'iban_number' => $request->iban,
            ]);

            //family data insertion
            $this->family->store([
                'user_id' => Auth::user()->id,
                'martial_status' => $request->martial_status,
                'spouse_name' => $request->spouse_name,
                'no_of_children' => $request->number_of_children,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'emergency_contact_name' => $request->emergency_contact,
                'emergency_contact_relation' => $request->emergency_contact_relationship,
                'emergency_contact_number' => $request->emergency_relation_contact,
                'emergency_residential_address' => $request->emergency_residential_address
            ]);

            //education data insertion
            $this->education->store([
                'user_id' => Auth::user()->id,
                'institute_name' => $request->institure_name,
                'degree_title' => $request->degree_title,
                'degree_majors' => $request->degree_majors,
                'year_of_passing' => $request->year_of_passing,
            ]);

            //work experience data insertion
            $this->work->store([
                'user_id' => Auth::user()->id,
                'previous_company_name' => $request->company_name,
                'service_duration' => $request->service_duration,
                'department' => $request->department,
                'designation' => $request->designation,
                'refference_name' => $request->ref_name,
                'refference_no' => $request->ref_no,
                'refference_designation' => $request->ref_designation,
            ]);

            //personal Files
            if($request->hasFile('updated_resume')){
                $this->singleFileUpload($request->file('updated_resume'), 1);
            }
            if($request->hasFile('passport_size_photo')){
                $this->singleFileUpload($request->file('passport_size_photo'), 2);
            }
            if($request->hasFile('cnic')){
                $this->multiFileUpload($request->file('cnic'), 3);
            }

            //Family Files
            if($request->hasFile("parent's_CNIC_Each")){
                $this->multiFileUpload($request->file("parent's_CNIC_Each"), 4);
            }

            //work Experience Files
            if($request->hasFile("experience_latters")){
                $this->multiFileUpload($request->file("experience_latters"), 5);
            }
            if($request->hasFile('last_salary_slip')){
                $this->singleFileUpload($request->file('last_salary_slip'), 7);
            }

            //Educational Documents
            if($request->hasFile("all_educational_documents")){
                $this->multiFileUpload($request->file("all_educational_documents"), 6);
            }



            DB::commit();
            return back()->with('success', 'Data Inserted Successfully.');
        } catch (Exception $e) {
            DB::rollback();
            dd($e);
        }
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }


    //upload Image
    public function singleFileUpload($data, $id)
    {
        $file = $data;
        $name = uniqid().'-'.time() . '-' . $file->getClientOriginalName();
        $file->move('images', $name);
        return $this->doc->store($name, $id);

    }

    //upload Multiple Images
    public function multiFileUpload($data, $id)
    {
        $results = [];
        foreach($data as $item){
            $file = $item;
            $name = uniqid().'-'.time() . '-' . $file->getClientOriginalName();
            $results[] = $file->move('images', $name);
            $this->doc->store($name, $id);
        }
        return $results;
    }
}
