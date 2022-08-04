@props(['errors'])

@if ($errors->any())

    <div class="alert alert-danger  alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">{{ __('Whoops! Something went wrong.') }}!</h4>
        @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
        <hr>
        @endforeach
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">	<span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
