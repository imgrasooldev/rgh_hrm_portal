@extends('admin.master')
@section('admin_content')
    <section class="dashWrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="usercoverwrap">
                        <div class="usercover">
                            <img src="{{ asset(env('adminIamgePath') . 'assets/images/usercover.jpg') }}" alt="">
                        </div>
                        <div class="userprofileimg">
                            `<img src="{{ asset(env('adminIamgePath') . 'assets/images/userprofileimg.png') }}"
                                alt="">
                            <h5>{{ $profile->name . ' ' . $profile->last_name }}</h5>
                            <h6>{{ $profile->designation }}</h6>
                        </div>
                        <ul class="userprofiletabs">
                            <li class="current" data-targetit="box-form1"><a href="#"><span><i
                                            class="fal fa-file-alt"></i></span> Personal Details</a></li>
                            <li data-targetit="box-form2"><a href="#"><span><i class="fal fa-house-night"></i></span>
                                    Family Details</a></li>
                            <li data-targetit="box-form3"><a href="#"><span><i class="fal fa-file-user"></i></span>
                                    Work Experience</a></li>
                            <li data-targetit="box-form4"><a href="#"><span><i
                                            class="far fa-graduation-cap"></i></span> Education Details</a></li>
                        </ul>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            Please check the form below for errors
                        </div>
                    @endif

                    <div class="personaldetails">
                        <form enctype="multipart/form-data" action="{{ Route('profiles.store') }}" method="POST">
                            @csrf
                            <div class="box-form1 showfirst">
                                <h4>Personal Details</h4>
                                <div class="formwrap">
                                    <div class="row">


                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Passport Size Photo</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required name="passport_size_photo"
                                                    type="file" placeholder="Passport Size Photo">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>CNIC</label>
                                                <input multiple
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required name="cnic[]"
                                                    type="file" placeholder="CNIC">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Updated Resume</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required name="updated_resume"
                                                    type="file" placeholder="Updated Resume">
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>First Name</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    disabled required name="first_name" value="{{ $profile->name }}"
                                                    type="text" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Last Name</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    disabled required name="last_name" value="{{ $profile->last_name }}"
                                                    type="text" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Designation</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    disabled required name="designation"
                                                    value="{{ $profile->designation }}" type="text"
                                                    placeholder="Last Name">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Working Email Address</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    disabled name="work_email" type="email" value="{{ $profile->email }}"
                                                    placeholder="Working Email Address">
                                            </div>
                                        </div>

                                        {{-- <div class="col-md-4">
                                            <div class="profield">
                                                <label>Password</label>
                                                <input {{ isset($profile->personal->personal_contact_number)?'disabled':'' }} name="password" type="password" placeholder="Password">
                                            </div>
                                        </div> --}}
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Personal Email Address</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required
                                                    value="{{ isset($profile->personal->personal_email) ? $profile->personal->personal_email : '' }}"
                                                    name="personal_email" type="email"
                                                    placeholder="Personal Email Address">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Date Of Birth</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required
                                                    value="{{ isset($profile->personal->date_of_birth) ? $profile->personal->date_of_birth : '' }}"
                                                    name="dob" type="date">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Gender</label>
                                                <select required name="gender">
                                                    @if (isset($profile->personal->gender))
                                                        <option selected disabled>{{ $profile->personal->gender }}</option>
                                                    @else
                                                        <option disabled selected>*** Select Gender ***</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Religion</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required
                                                    value="{{ isset($profile->personal->religion) ? $profile->personal->religion : '' }}"
                                                    name="religion" type="text" placeholder="Islam">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Personal Contact Number</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required
                                                    value="{{ isset($profile->personal->personal_contact_number) ? $profile->personal->personal_contact_number : '' }}"
                                                    name="contact_number" type="tel" placeholder="03XXXXXXXX">
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-4">
                                            <div class="profield">
                                                <label>Place Of Birth (Country)</label>
                                                <input {{ isset($profile->personal->personal_contact_number)?'disabled':'' }} name="place_of_birth" type="text" placeholder="Pakistan">
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-md-4">
                                            <div class="profield">
                                                <label>Nationality</label>
                                                <input {{ isset($profile->personal->personal_contact_number)?'disabled':'' }} name="nationality" type="text" placeholder="Pakistani">
                                            </div>
                                        </div> --}}
                                        <div class="col-md-12">
                                            <div class="profield">
                                                <label>Residential Address</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required
                                                    value="{{ isset($profile->personal->residential_address) ? $profile->personal->residential_address : '' }}"
                                                    name="residential_address" type="text" placeholder="Your Address">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="profield">
                                                <label>Permanent Address</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required
                                                    value="{{ isset($profile->personal->permanent_address) ? $profile->personal->permanent_address : '' }}"
                                                    name="permanent_address" type="text"
                                                    placeholder="Permanent Address">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>CNIC# (without dashes)</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required
                                                    value="{{ isset($profile->personal->cnic) ? $profile->personal->cnic : '' }}"
                                                    name="cnic_num" type="text" placeholder="42101XXXXXXXXXXX">
                                            </div>
                                        </div>

                                        {{-- <div class="col-md-4">
                                            <div class="profield">
                                                <label>CNIC Issue Date</label>
                                                <input {{ isset($profile->personal->personal_contact_number)?'disabled':'' }} required name="cnic_issue_date" type="date">
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-4">
                                            <div class="profield">
                                                <label>CNIC Expiry Date</label>
                                                <input {{ isset($profile->personal->personal_contact_number)?'disabled':'' }} name="cnic_expiry_date" type="date">
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-md-4">
                                            <div class="profield">
                                                <label>Passport</label>
                                                <select>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                        </div> --}}

                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Meezan Bank Account?</label>
                                                <select required name="meezan_account">
                                                    @if (isset($profile->personal->meezan_bank))
                                                        <option selected disabled>{{ $profile->personal->meezan_bank }}
                                                        </option>
                                                    @else
                                                        <option>*** Have A Meezan Bank Account? ***</option>
                                                        <option value="yes">Yes</option>
                                                        <option value="no">No</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>IBAN Number</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    name="iban"
                                                    value="{{ isset($profile->personal->iban_number) ? $profile->personal->iban_number : '' }}"
                                                    type="text" placeholder="IBAN Bank Account">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" data-targetit="box-form2">Next</a>
                            </div>
                            <div class="box-form2">
                                <h4>Family Details</h4>
                                <div class="formwrap">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Parent's CNIC Each</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required
                                                    multiple
                                                    name="parent's CNIC Each[]"
                                                    type="file" placeholder="Spouse Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Marital Status</label>
                                                <select required name="martial_status">
                                                    @if (isset($profile->family->martial_status))
                                                        <option disabled selected>{{ $profile->family->martial_status }}
                                                        </option>
                                                    @else
                                                        <option disabled selected>*** Select Martial Status ***</option>
                                                        <option value="single">Single</option>
                                                        <option value="married">Married</option>
                                                        <option value="divorced">Divorced</option>
                                                        <option value="widowed">Widowed</option>
                                                        <option value="seperated">Separated</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Spouse Name</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    name="spouse_name"
                                                    value="{{ isset($profile->family->spouse_name) ? $profile->family->spouse_name : '' }}"
                                                    type="text" placeholder="Spouse Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Number Of Children (if any)</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    name="number_of_children"
                                                    value="{{ isset($profile->family->no_of_children) ? $profile->family->no_of_children : '' }}"
                                                    type="number" placeholder="01">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Father’s Name</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required
                                                    value="{{ isset($profile->family->father_name) ? $profile->family->father_name : '' }}"
                                                    name="father_name" type="text" placeholder="Father’s Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Mother’s Name</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required
                                                    value="{{ isset($profile->family->mother_name) ? $profile->family->mother_name : '' }}"
                                                    name="mother_name" type="text" placeholder="Mother’s Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Emergency Contact Name</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required
                                                    value="{{ isset($profile->family->emergency_contact_name) ? $profile->family->emergency_contact_name : '' }}"
                                                    name="emergency_contact" type="text"
                                                    placeholder="Emergency Contact Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Emergency Contact Relationship</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required
                                                    value="{{ isset($profile->family->emergency_contact_relation) ? $profile->family->emergency_contact_relation : '' }}"
                                                    name="emergency_contact_relationship" type="text"
                                                    placeholder="Brother">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Emergency Contact Number</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required
                                                    value="{{ isset($profile->family->emergency_contact_number) ? $profile->family->emergency_contact_number : '' }}"
                                                    name="emergency_relation_contact" type="tel"
                                                    placeholder="Emergency Contact Number">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Emergency Residential Address</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required
                                                    value="{{ isset($profile->family->emergency_residential_address) ? $profile->family->emergency_residential_address : '' }}"
                                                    name="emergency_residential_address" type="tel"
                                                    placeholder="Emergency Residential Address">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <ul>
                                    <li><a href="#" data-targetit="box-form2">Back</a></li>
                                    <li><a href="#" data-targetit="box-form3">Next</a></li>
                                </ul>
                            </div>
                            <div class="box-form3">
                                <h4>Previous Work Experience</h4>
                                <div class="formwrap">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="profield">
                                                <label>Experience Laters</label>
                                                <input multiple
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    name="experience_latters[]" type="file" placeholder="Experience laters">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="profield">
                                                <label>Last Salary Slip</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    name="last_salary_slip" type="file" placeholder="Last Salary Slip">
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="profield">
                                                <label>Previous Company Name</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required
                                                    value="{{ isset($profile->work->previous_company_name) ? $profile->work->previous_company_name : '' }}"
                                                    name="company_name" type="text" placeholder="Company Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="profield">
                                                <label>Service Duration</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required
                                                    value="{{ isset($profile->work->service_duration) ? $profile->work->service_duration : '' }}"
                                                    name="service_duration" type="text" placeholder="Years">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="profield">
                                                <label>Department</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required
                                                    value="{{ isset($profile->work->department) ? $profile->work->department : '' }}"
                                                    name="department" type="text" placeholder="Department Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="profield">
                                                <label>Designation</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required
                                                    value="{{ isset($profile->work->designation) ? $profile->work->designation : '' }}"
                                                    name="designation" type="text" placeholder="Your Designation">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="profield">
                                                <label>Refference Name</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required
                                                    value="{{ isset($profile->work->refference_name) ? $profile->work->refference_name : '' }}"
                                                    name="ref_name" type="text" placeholder="Reference Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="profield">
                                                <label>Reference No</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required
                                                    value="{{ isset($profile->work->refference_no) ? $profile->work->refference_no : '' }}"
                                                    name="ref_no" type="text" placeholder="Reference No">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="profield">
                                                <label>Reference Designation</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required
                                                    value="{{ isset($profile->work->refference_designation) ? $profile->work->refference_designation : '' }}"
                                                    name="ref_designation" type="text"
                                                    placeholder="Reference Designation">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li><a href="#" data-targetit="box-form3">Back</a></li>
                                    <li><a href="#" data-targetit="box-form4">Next</a></li>
                                </ul>
                            </div>
                            <div class="box-form4">
                                <h4>Academic Details</h4>
                                <div class="formwrap">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="profield">
                                                <label>All Educational Documents</label>
                                                <input
                                                    multiple
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    name="all_educational_documents[]" type="file" placeholder="All Educational Documents">
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="profield">
                                                <label>Institute Name</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required
                                                    value="{{ isset($profile->education->institute_name) ? $profile->education->institute_name : '' }}"
                                                    name="institure_name" type="text" placeholder="Institute Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="profield">
                                                <label>Degree Title</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    value="{{ isset($profile->education->degree_title) ? $profile->education->degree_title : '' }}"
                                                    required name="degree_title" type="text"
                                                    placeholder="Degree Title">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="profield">
                                                <label>Degree Majors</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required
                                                    value="{{ isset($profile->education->degree_majors) ? $profile->education->degree_majors : '' }}"
                                                    name="degree_majors" type="text" placeholder="E.g(Marketing/CS)">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="profield">
                                                <label>Years Of Passing</label>
                                                <input
                                                    {{ isset($profile->personal->personal_contact_number) ? 'disabled' : '' }}
                                                    required
                                                    value="{{ isset($profile->education->year_of_passing) ? $profile->education->year_of_passing : '' }}"
                                                    name="year_of_passing" type="text" placeholder="Years Of Passing">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if (!isset($profile->personal->personal_contact_number))
                                    <button type="submit">Submit</button>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('admin.includes.scripts')
@endsection
