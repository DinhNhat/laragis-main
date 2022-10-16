@props(['listing'])

<div class="col-md-6 col-xl-4">
    <div class="card box-margin">
        <div class="card-body">
            <div class="job-content-area">
                <div class="d-flex align-items-center">
                    <!-- Icon -->
                    <div class="job-logo-icon">
                        <img src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="thumb">
                    </div>
                    <!-- Job Desc -->
                    <div class="job-desc-info ml-3">
                        <a href="#">
                            <h6 class="font-17">
                                <a href="{{ route('show-listing', ['listing' => $listing->id]) }}">{{$listing->title}}</a>
                            </h6>
                        </a>
                        <div class="job-location d-flex">
                            <p class="mb-0"><i class="icon_house_alt font-12"></i> {{$listing->company}}</p>
                        </div>

                    </div>
                </div>
                <p class="mt-20 font-13">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <ul class="list-unstyled">
                    <li class="media mb-10">
                        <span class="d-block g-width-110">
                            Date:
                        </span>
                        <span class="text-dark">3 July, 2017</span>
                    </li>
                    <li class="media mb-10">
                        <span class="d-block g-width-110">
                            Skills:
                        </span>
                        <span class="text-dark">Photoshop, Sketch</span>
                    </li>
                    <li class="media">
                        <span class="d-block g-width-110">
                            Location:
                        </span>
                        <span class="text-dark">{{ $listing->location }}</span>
                    </li>
                </ul>

                <div class="job-button-area d-flex justify-content-between mt-30">
                    <a class="text-success" href="#">See Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
