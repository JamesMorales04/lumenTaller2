@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
        
            <div class="card">
                <img src="{{ $data }}"class="css-class" alt="alt text">
		
		{{gethostbyname(gethostname())}}
	     </div>

        </div>
    </div>

</div>
@endsection
