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
                            <img src="{{ asset(env('adminIamgePath') . 'assets/images/userprofileimg.png') }}"
                                alt="">
                            <h5>Arij Ali Khan</h5>
                            <h6>Senior Designer</h6>
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
                    <div class="personaldetails">
                        <form action="{{ Route('admin.insert_employee') }}">
                            <div class="box-form1 showfirst">
                                <h4>Personal Details</h4>
                                <div class="formwrap">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>First Name</label>
                                                <input required name="first_name" type="text" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Middle Name</label>
                                                <input name="middle_name" type="text" placeholder="Middle Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Last Name</label>
                                                <input required name="last_name" type="text" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Joining Date</label>
                                                <input required name="joining_date" type="date">
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-4">
                                            <div class="profield">
                                                <label>Working Email Address</label>
                                                <input name="work_email" type="email" placeholder="Working Email Address">
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-md-4">
                                            <div class="profield">
                                                <label>Password</label>
                                                <input name="password" type="password" placeholder="Password">
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-md-4">
                                            <div class="profield">
                                                <label>Personal Email Address</label>
                                                <input required name="personal_email" type="email"
                                                    placeholder="Personal Email Address">
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-md-4">
                                            <div class="profield">
                                                <label>Date Of Birth</label>
                                                <input required name="dob" type="date">
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-md-4">
                                            <div class="profield">
                                                <label>Gender</label>
                                                <select required name="gender">
                                                    <option disabled selected>*** Select Gender ***</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-md-4">
                                            <div class="profield">
                                                <label>Religion</label>
                                                <input required name="religion" type="text" placeholder="Islam">
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-md-4">
                                            <div class="profield">
                                                <label>Personal Contact Number</label>
                                                <input required name="contact_number" type="tel" placeholder="03XXXXXXXX">
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-md-4">
                                            <div class="profield">
                                                <label>Place Of Birth (Country)</label>
                                                <input name="place_of_birth" type="text" placeholder="Pakistan">
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-md-4">
                                            <div class="profield">
                                                <label>Nationality</label>
                                                <input name="nationality" type="text" placeholder="Pakistani">
                                            </div>
                                        </div> --}}
                                        <div class="col-md-12">
                                            <div class="profield">
                                                <label>Residential Address</label>
                                                <input required name="residential_address" type="text" placeholder="Your Address">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="profield">
                                                <label>Permanent Address</label>
                                                <input required name="permanent_address" type="text"
                                                    placeholder="Permanent Address">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>CNIC# (without dashes)</label>
                                                <input required name="cnic" type="text" placeholder="42101XXXXXXXXXXX">
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-4">
                                            <div class="profield">
                                                <label>CNIC Issue Date</label>
                                                <input required name="cnic_issue_date" type="date">
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-md-4">
                                            <div class="profield">
                                                <label>CNIC Expiry Date</label>
                                                <input name="cnic_expiry_date" type="date">
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
                                                    <option>*** Have A Meezan Bank Account? ***</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>IBAN Number</label>
                                                <input name="iban" type="text" placeholder="IBAN Bank Account">
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
                                                <label>Marital Status</label>
                                                <select required name="martial_status">
                                                    <option disabled selected>*** Select Martial Status ***</option>
                                                    <option value="single">Single</option>
                                                    <option value="married">Married</option>
                                                    <option value="divorced">Divorced</option>
                                                    <option value="widowed">Widowed</option>
                                                    <option value="seperated">Separated</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Spouse Name</label>
                                                <input name="spouse_name" type="text" placeholder="Spouse Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Number Of Children (if any)</label>
                                                <input name="number_of_children" type="number" placeholder="01">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Father’s Name</label>
                                                <input required name="father_name" type="text" placeholder="Father’s Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Mother’s Name</label>
                                                <input required name="mother_name" type="text" placeholder="Mother’s Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Emergency Contact Name</label>
                                                <input required name="emergency_contact" type="text"
                                                    placeholder="Emergency Contact Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Emergency Contact Relationship</label>
                                                <input required name="emergency_contact_relationship" type="text"
                                                    placeholder="Brother">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Emergency Contact Number</label>
                                                <input required name="emergency_relation_contact" type="tel"
                                                    placeholder="Emergency Contact Number">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="profield">
                                                <label>Emergency Residential Address</label>
                                                <input required name="emergency_residential_address" type="tel"
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
                                                <label>Previous Company Name</label>
                                                <input required name="company_name" type="text" placeholder="Company Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="profield">
                                                <label>Service Duration</label>
                                                <input required name="service_duration" type="text" placeholder="Years">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="profield">
                                                <label>Department</label>
                                                <input required name="department" type="text" placeholder="Department Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="profield">
                                                <label>Designation</label>
                                                <input required name="designation" type="text" placeholder="Your Designation">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="profield">
                                                <label>Refference Name</label>
                                                <input required name="ref_name" type="text" placeholder="Reference Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="profield">
                                                <label>Reference No</label>
                                                <input required name="ref_no" type="text" placeholder="Reference No">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="profield">
                                                <label>Reference Designation</label>
                                                <input required name="ref_designation" type="text" placeholder="Reference Designation">
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
                                                <label>Institute Name</label>
                                                <input required name="institure_name" type="text" placeholder="Institute Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="profield">
                                                <label>Degree Title</label>
                                                <input required name="degree_title" type="text" placeholder="Degree Title">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="profield">
                                                <label>Degree Majors</label>
                                                <input required name="degree_majors" type="text"
                                                    placeholder="E.g(Marketing/CS)">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="profield">
                                                <label>Years Of Passing</label>
                                                <input required name="year_of_passing" type="text"
                                                    placeholder="Years Of Passing">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('admin.includes.scripts')
@endsection
