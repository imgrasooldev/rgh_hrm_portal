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

            <br>
            <div class="row text-white">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {{ $user->name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Last Name:</strong>
                        {{ $user->last_name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Designation:</strong>
                        {{ $user->designation }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Joining Date:</strong>
                        {{ $user->joining_date }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        {{ $user->email }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Roles:</strong>
                        @if (!empty($user->getRoleNames()))
                            @foreach ($user->getRoleNames() as $v)
                                <label class="badge badge-success">{{ $v }}</label>
                            @endforeach
                        @endif
                    </div>
                </div>



                {{-- Personal Data --}}
                <h1 class="h2">Personal Data</h1>
                @if (isset($profile->personal->id))
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Personal Email:</strong>
                            {{ $profile->personal->personal_email }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Date of Birth:</strong>
                            {{ $profile->personal->date_of_birth }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Gender:</strong>
                            {{ $profile->personal->gender }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Religion:</strong>
                            {{ $profile->personal->religion }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Personal Contact Number:</strong>
                            {{ $profile->personal->personal_contact_number }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Residentail Address:</strong>
                            {{ $profile->personal->residential_address }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Permanent Address:</strong>
                            {{ $profile->personal->permanent_address }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>CNIC:</strong>
                            {{ $profile->personal->cnic }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Meezan Bank:</strong>
                            {{ $profile->personal->meezan_bank }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>IBAN Number:</strong>
                            {{ $profile->personal->iban_number }}
                        </div>
                    </div>
                @else
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <h1 class="h4 text-danger">Personal Data Not Found</h1>
                        </div>
                    </div>
                @endif



                {{-- family Data --}}
                <h1 class="h2">Family Data</h1>
                @if (isset($profile->family->id))
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>IBAN Number:</strong>
                            {{ $profile->family->martial_status }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>IBAN Number:</strong>
                            {{ $profile->family->spouse_name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>IBAN Number:</strong>
                            {{ $profile->family->no_of_children }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>IBAN Number:</strong>
                            {{ $profile->family->father_name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>IBAN Number:</strong>
                            {{ $profile->family->mother_name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>IBAN Number:</strong>
                            {{ $profile->family->emergency_contact_name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>IBAN Number:</strong>
                            {{ $profile->family->emergency_contact_relation }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>IBAN Number:</strong>
                            {{ $profile->family->emergency_contact_number }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>IBAN Number:</strong>
                            {{ $profile->family->emergency_residential_address }}
                        </div>
                    </div>
                @else
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <h1 class="h4 text-danger">Family Data Not Found</h1>
                        </div>
                    </div>
                @endif



                {{-- Education Data --}}
                <h1 class="h2">Education Data</h1>
                @if (isset($profile->education->id))
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>IBAN Number:</strong>
                            {{ $profile->education->martial_status }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>IBAN Number:</strong>
                            {{ $profile->education->degree_title }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>IBAN Number:</strong>
                            {{ $profile->education->degree_majors }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>IBAN Number:</strong>
                            {{ $profile->education->year_of_passing }}
                        </div>
                    </div>
                @else
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <h1 class="h4 text-danger">Education Data Not Found</h1>
                        </div>
                    </div>
                @endif




                {{-- Work Experience Data --}}
                <h1 class="h2">Work Experience Data</h1>
                @if (isset($profile->work->id))
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>IBAN Number:</strong>
                            {{ $profile->work->martial_status }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>IBAN Number:</strong>
                            {{ $profile->work->degree_title }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>IBAN Number:</strong>
                            {{ $profile->work->degree_majors }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>IBAN Number:</strong>
                            {{ $profile->work->year_of_passing }}
                        </div>
                    </div>
                @else
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <h1 class="h4 text-danger">Work Data Not Found</h1>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </section>
    @include('admin.includes.scripts')

@endsection
