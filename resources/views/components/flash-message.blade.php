@if(session()->has('message'))
<div id="msg-flash" class="col-12">
    <div class="card mb-30">
        <div class="card-body">
            <div class="alert alert-warning" role="alert">
                <h5 class="alert-heading">Well done!</h5>
                <p>{{ session('message') }}</p>
            </div>
        </div>
    </div>
</div>
@endif
