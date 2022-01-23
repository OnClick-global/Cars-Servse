
@if(Session::has('success'))
    <div class="alert alert-success text-center" role="alert">
        {{ Session('success') }}
    </div>
@endif
@if(Session::has('danger'))
    <div class="alert alert-danger text-center" role="alert">
        {{ Session('danger') }}
    </div>
@endif

