@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    First Name: {{ $details->first_name }}<br/>
                    Last Name: {{ $details->last_name }}<br/>
                    Date of Birth :{{ $details->date_birth }}<br/>
                    Father's Name:{{ $details->father_name }}<br/>
                    Mother's Name:{{ $details->mother_name }}<br/>
                    Gender : @if($details->gender == 1) 
                                Male 
                             @elseif($details->gender == 2) 
                                Female 
                             @endif
                    <br/>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
