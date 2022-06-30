
@if (\Illuminate\Support\Facades\Session::get('msgs') != null)
    {{--  https://getbootstrap.com/docs/4.6/components/alerts/#dismissing--}}
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        {{\Illuminate\Support\Facades\Session::get('msgs')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
