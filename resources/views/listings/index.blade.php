<x-layout1>
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-20">
                <h4 class="card-title">Popular Jobs</h4>
                @auth
                    <a href="{{ url('/listings/create') }}" class="btn btn-primary waves-effect waves-light float-right mb-3">+ Create A New Job</a>
                @endauth
            </div>
        </div>

        <!-- Single Job Area -->
        @unless(count($listings) == 0)
            @foreach($listings as $listing)
                <x-jobs.single-job :listing="$listing" />
            @endforeach
        @else
            <h3>No listings found</h3>
        @endunless

    </div>

</x-layout1>
