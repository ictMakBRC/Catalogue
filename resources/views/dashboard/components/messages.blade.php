@if (count($errors)>0)

@foreach ($errors->all() as $error)
<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>{{session('error')}}</strong>
    <strong>{{$error}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">	<span aria-hidden="true">&times;</span>
    </button>
</div>

@endforeach

@endif

@if (session('success'))

<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>{{session('success')}}</strong>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">	<span aria-hidden="true">&times;</span>
    </button>
</div>
@endif



@if (session('error'))
<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>{{session('error')}}</strong>
    <strong>{{session('error')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">	<span aria-hidden="true">&times;</span>
    </button>
</div>

@endif
