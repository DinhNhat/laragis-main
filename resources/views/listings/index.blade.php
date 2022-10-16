<x-layout1>
    <div class="row">
        <div class="col-12">
            <h4 class="card-title">Popular Jobs</h4>
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
