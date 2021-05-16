@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">

        @include('util.message')
        
            <div class="card">
                <img src="{{Storage::disk('s3')->url($imagePath)}}">
            </div>
        </div>
    </div>

</div>
@endsection