@if(session('success'))
    <div class="alert alert-success alert-dismissable text-center" style="width: 70%; margin: 4px auto;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        {{ session('success') }}
    </div>
@endif

@if(session('warning'))
    <div class="alert alert-danger alert-dismissable text-center" style="width: 70%; margin: 6px auto;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        {{ session('warning') }}
    </div>
@endif
