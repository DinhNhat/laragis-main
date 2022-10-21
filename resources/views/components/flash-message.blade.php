@if(session()->has('message'))
<div class="row">
    <div id="msg-flash" class="col-12">
        <div class="alert alert-info" role="alert">
            <strong>Well done!</strong> {{ session('message') }}.
        </div>
    </div>
</div>
@endif
