@extends('admin.master')
@section('admin_content')
    <section class="dashWrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('users.index') }}"> Back </a>
                    </div>
                </div>
            </div>
            <br />

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Something went wrong.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            {!! Form::model($user, ['method' => 'PATCH', 'route' => ['users.update', $user->id]]) !!}
            <h1 class="text-white h1 mb-4">Basic Details</h1>
            <div class="row text-white">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {!! Form::text('last_name', null, ['placeholder' => 'Last Name', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Designation:</strong>
                        {!! Form::text('designation', null, ['placeholder' => 'Designation', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Joining Date:</strong>
                        {!! Form::date('joining_date', null, ['placeholder' => 'Joining Date', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Working Email:</strong>
                        {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Password:</strong>
                        {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Confirm Password:</strong>
                        {!! Form::password('confirm-password', ['placeholder' => 'Confirm Password', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Role:</strong>
                        {!! Form::select('roles[]', $roles, $userRole, ['class' => 'form-control', 'multiple']) !!}
                    </div>
                </div>





                {{-- Personal Details --}}
                <h1 class="text-white h1 mt-6 mb-4">Personal Details</h1>
                @if(isset($profile->personal->id))
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Personal Email:</strong>
                        {!! Form::text('personal_email', $profile->personal->personal_email??null, [
                            'placeholder' => 'Personal Email',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Date Of Birth:</strong>
                        {!! Form::date('date_of_birth', $profile->personal->date_of_birth??null, [
                            'placeholder' => 'Date Of Birth',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Geder:</strong>
                        <select name="gender" class="form-control">
                            @if ($profile->personal->gender??null == 'male')
                                <option value="male" selected>Male</option>
                                <option value="female">Female</option>
                            @else
                                <option value="female" selected>Female</option>
                                <option value="male">Male</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Religion:</strong>
                        {!! Form::text('religion', $profile->personal->religion??null, [
                            'placeholder' => 'Religion',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Personal Contact Number:</strong>
                        {!! Form::tel('personal_contact_number', $profile->personal->personal_contact_number??null, [
                            'placeholder' => 'Personal Contact Number',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Residential Address:</strong>
                        {!! Form::text('residential_address', $profile->personal->residential_address??null, [
                            'placeholder' => 'Residential Address',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Permanent Address:</strong>
                        {!! Form::text('permanent_address', $profile->personal->permanent_address??null, [
                            'placeholder' => 'Permanent Address',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>CNIC:</strong>
                        {!! Form::text('cnic', $profile->personal->permanent_address??null, [
                            'placeholder' => 'CNIC',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Meezan Bank:</strong>
                        <select name="gender" class="form-control">
                            @if ($profile->personal->gender??null == 'yes')
                                <option value="yes" selected>Yes</option>
                                <option value="no">No</option>
                            @else
                                <option value="no" selected>No</option>
                                <option value="yes">Yes</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>IBAN Number:</strong>
                        {!! Form::text('iban_number', $profile->personal->iban_number??null, [
                            'placeholder' => 'IBAN Number',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>IBAN Number:</strong>
                        {!! Form::text('iban_number', $profile->personal->iban_number??null, [
                            'placeholder' => 'IBAN Number',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                @else
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <h2 class="h4 text-danger">Personal Data Not Found</h2>
                    </div>
                </div>

                @endif



                {{-- Family Details --}}
                <h1 class="text-white h1 mt-6 mb-4">Family Details</h1>
                @if(isset($profile->family->id))
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Martial Status:</strong>
                        <select name="martial_status" class="form-control">
                            <option value="{{ $profile->family->martial_status??null }}" selected>
                                {{ $profile->family->martial_status??null }}</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorced">Divorced</option>
                            <option value="widowed">Widowed</option>
                            <option value="seperated">Separated</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Spouse Name:</strong>
                        {!! Form::text('spouse_name', $profile->family->spouse_name??null, [
                            'placeholder' => 'Spouse Name',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>No Of Children:</strong>
                        {!! Form::text('no_of_children', $profile->family->no_of_children??null, [
                            'placeholder' => 'No Of Children',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Father Name:</strong>
                        {!! Form::text('father_name', $profile->family->father_name??null, [
                            'placeholder' => 'Father Name',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Mother Name:</strong>
                        {!! Form::text('mother_name', $profile->family->mother_name??null, [
                            'placeholder' => 'Mother Name',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Emergency Contact Name:</strong>
                        {!! Form::text('emergency_contact_name', $profile->family->emergency_contact_name??null, [
                            'placeholder' => 'Emergency Contact Name',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Emergency Contact Relation:</strong>
                        {!! Form::text('emergency_contact_relation', $profile->family->emergency_contact_relation??null, [
                            'placeholder' => 'Emergency Contact Relation',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Emergency Contact Number:</strong>
                        {!! Form::text('emergency_contact_number', $profile->family->emergency_contact_number??null, [
                            'placeholder' => 'Emergency Contact Number',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Emergency Residential Address:</strong>
                        {!! Form::text('emergency_residential_address', $profile->family->emergency_residential_address??null, [
                            'placeholder' => 'Emergency Residential Address',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                @else
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <h2 class="h4 text-danger">Family Data Not Found</h2>
                    </div>
                </div>

                @endif





                {{-- Work Experience --}}
                <h1 class="text-white h1 mt-6 mb-4">Work Experience</h1>
                @if(isset($profile->work->id))
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Previous Company Name:</strong>
                        {!! Form::text('previous_company_name', $profile->work->previous_company_name??null, [
                            'placeholder' => 'Previous Company Name',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Service Duration:</strong>
                        {!! Form::text('service_duration', $profile->work->service_duration??null, [
                            'placeholder' => 'Service Duration',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Department:</strong>
                        {!! Form::text('department', $profile->work->department??null, [
                            'placeholder' => 'Department',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Designation:</strong>
                        {!! Form::text('designation', $profile->work->designation??null, [
                            'placeholder' => 'Designation',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Refference Name:</strong>
                        {!! Form::text('refference_name', $profile->work->refference_name??null, [
                            'placeholder' => 'Refference Name',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Refference No:</strong>
                        {!! Form::text('refference_no', $profile->work->refference_no??null, [
                            'placeholder' => 'Refference No',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Refference_Designation:</strong>
                        {!! Form::text('refference_designation', $profile->work->refference_designation??null, [
                            'placeholder' => 'Refference_Designation',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                @else
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <h2 class="h4 text-danger">Work Experince Data Not Found</h2>
                    </div>
                </div>
                @endif





                {{-- Education Details --}}
                <h1 class="text-white h1 mt-6 mb-4">Education Details</h1>
                @if(isset($profile->education->id))
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Institute_Name:</strong>
                        {!! Form::text('institute_name', $profile->education->institute_name??null, [
                            'placeholder' => 'Institute_Name',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Degree Title:</strong>
                        {!! Form::text('degree_title', $profile->education->degree_title??null, [
                            'placeholder' => 'Degree Title',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Degree Majors:</strong>
                        {!! Form::text('degree_majors', $profile->education->degree_majors??null, [
                            'placeholder' => 'Degree Majors',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Year Of Passing:</strong>
                        {!! Form::text('year_of_passing', $profile->education->year_of_passing??null, [
                            'placeholder' => 'Year Of Passing',
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
                @else
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <h2 class="h4 text-danger">Education Data Not Found</h2>
                    </div>
                </div>
                @endif






                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            {!! Form::close() !!}




        </div>
    </section>
    @include('admin.includes.scripts')
@endsection
