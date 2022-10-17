{{--<x-layout>--}}
{{--  <a href="{{ url('/') }}" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back--}}
{{--  </a>--}}
{{--  <div class="mx-4">--}}
{{--    <x-card class="p-10">--}}
{{--      <div class="flex flex-col items-center justify-center text-center">--}}
{{--        <img class="w-48 mr-6 mb-6"--}}
{{--          src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="" />--}}

{{--        <h3 class="text-2xl mb-2">--}}
{{--          {{$listing->title}}--}}
{{--        </h3>--}}
{{--        <div class="text-xl font-bold mb-4">{{$listing->company}}</div>--}}

{{--        <x-listing-tags :tagsCsv="$listing->tags" />--}}

{{--        <div class="text-lg my-4">--}}
{{--          <i class="fa-solid fa-location-dot"></i> {{$listing->location}}--}}
{{--        </div>--}}
{{--        <div class="border border-gray-200 w-full mb-6"></div>--}}
{{--        <div>--}}
{{--          <h3 class="text-3xl font-bold mb-4">Job Description</h3>--}}
{{--          <div class="text-lg space-y-6">--}}
{{--            {{$listing->description}}--}}

{{--            <a href="mailto:{{$listing->email}}"--}}
{{--              class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"><i--}}
{{--                class="fa-solid fa-envelope"></i>--}}
{{--              Contact Employer</a>--}}

{{--            <a href="{{$listing->website}}" target="_blank"--}}
{{--              class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i class="fa-solid fa-globe"></i>--}}
{{--              Visit Website</a>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </x-card>--}}

{{--</x-layout>--}}

@php
    $tags = explode(',', $listing->tags);
@endphp

<x-layout1>
    <div class="row">
        <div class="col-12">
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row">
                        <!-- Content -->
                        <div class="col-lg-7 mb-30">
                            <article>
                                <!-- Content Header -->
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="media mb-20-xs">
                                            <div class="d-flex align-self-center g-mt-3 g-mr-20">
                                                <img class="flex-50-thubm" src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="Image Description">
                                            </div>
                                            <div class="media-body ml-3">
                                                <span class="d-block g-mb-3">
                                                    <a class="font-18 font-weight-bold text-dark d-block mb-1" href="#">{{ $listing->company }}</a>
                                                </span>
                                                <span class="font-13">{{ $listing->location }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 align-self-center text-md-right">
                                        <a class="btn btn-outline-primary btn-sm" href="{{ route('show-listing-edit', ['listing' => $listing->id]) }}">Edit</a>
                                    </div>
                                </div>
                                <!-- End Content Header -->

                                <hr>

                                <!-- Jobs Description -->
                                <div class="p-2">
                                    <h3 class="font-17">{{ $listing->title }}</h3>
                                    <p class="mb-0">{{ $listing->description }}</p>
                                    <!-- End Jobs Description -->
                                </div>
                                <hr>

                                <!-- Offer Details & Skills -->
                                <div class="row">
                                    <!-- Offer Details -->
                                    <div class="col-lg-6 mb-20-md mb-20-xs">
                                        <h3 class="font-17 mb-20">Offer Details</h3>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-10">
                                                                    <span>
                                                                        <i class="icon-wallet g-pos-rel g-top-1 g-mr-5"></i> Sallery:
                                                                    </span>
                                                <span class="text-dark">$4000 - $5000</span>
                                            </li>
                                            <li class="mb-10">
                                                                    <span>
                                                                        <i class="icon-calendar g-pos-rel g-top-1 g-mr-5"></i> Date:
                                                                    </span>
                                                <span class="text-dark">3 July, 2017</span>
                                            </li>
                                            <li>
                                                                    <span>
                                                                        <i class="icon-map g-pos-rel g-top-1 g-mr-5"></i> Location:
                                                                    </span>
                                                <span class="text-dark">London, UK</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Offer Details -->

                                    <!-- Skills -->
                                    <div class="col-lg-6">
                                        <h3 class="font-17 mb-20">Skills</h3>

                                        <ul class="tag-line-area">
                                            @foreach($tags as $tag)
                                                <li class="mb-10">
                                                    <a href="{{ url('/?tag='.$tag) }}">{{$tag}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- End Skills -->
                                </div>
                                <!-- End Offer Details & Skills -->
                            </article>
                        </div>
                        <!-- End Content -->

                        <!-- Sidebar -->
                        <div class="col-lg-4">
                            <aside class="u-shadow-v11 rounded">
                                <!-- Content Header -->
                                <div class="media mb-20">
                                    <div class="d-flex align-self-center">
                                        <img class="flex-50-thubm" src="img/shop-img/23.png" alt="Image Description">
                                    </div>
                                    <div class="media-body ml-3">
                                        <a class="font-18 text-dark mb-10 d-inline" href="#">{{ $listing->company }}</a>

                                        <div class="g-rating-backward">
                                            <i class="fa fa-star-o text-warning" style="margin-left: 2px; margin-right: 2px;"></i>
                                            <i class="fa fa-star-o text-warning" style="margin-left: 2px; margin-right: 2px;"></i>
                                            <i class="fa fa-star-o text-warning" style="margin-left: 2px; margin-right: 2px;"></i>
                                            <i class="fa fa-star-o text-warning" style="margin-left: 2px; margin-right: 2px;"></i>
                                            <i class="fa fa-star-o text-warning" style="margin-left: 2px; margin-right: 2px;"></i></div>
                                        <span class="font-12">1000 Reviews</span>
                                    </div>
                                </div>
                                <!-- End Content Header -->

                                <!-- Contacts -->
                                <ul class="list-unstyled mt-20">
                                    <li class="d-flex align-items-baseline mb-10 font-13">
                                        <i class="icon-map mr-2"></i>
                                        <span class="text-dark">{{ $listing->location }}</span>
                                    </li>
                                    <li class="d-flex align-items-baseline mb-10 font-13">
                                        <i class="icon-phone mr-2"></i>
                                        <span class="text-dark">+1 (23) 456 7890</span>
                                    </li>
                                    <li class="d-flex align-items-baseline mb-10 font-13">
                                        <i class="icon-envelope mr-2"></i>
                                        <a class="text-dark" href="mailto:info@htmlstream.com">{{ $listing->email }}</a>
                                    </li>
                                    <li class="d-flex align-items-baseline mb-10 font-13">
                                        <i class="icon-globe mr-2"></i>
                                        <a class="text-dark" href="#">{{ $listing->website }}</a>
                                    </li>
                                </ul>
                                <!-- End Contacts -->

                                <hr>

                                <!-- Social Links -->
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                        <a class="text-success font-18" href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                                        <a class="text-success font-18" href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                        <a class="text-success font-18" href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
                                        <a class="text-success font-18" href="#">
                                            <i class="fa fa-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Social Links -->

                                <hr>

                                <!-- Prograss Bars -->
                                <div>
                                    <!-- Team Work -->
                                    <div class="mb-20">
                                        <h6 class="mb-10 font-14">Team Work <span class="float-right">92%</span></h6>
                                        <div class="progress h-6">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="92" style="width: 92%;" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="font-12 mt-1 mb-0">17% more than others</p>
                                    </div>
                                    <!-- End Team Work -->

                                    <!-- Team Work -->
                                    <div class="mb-20">
                                        <h6 class="mb-10 font-14">Holiday Offers <span class="float-right">70%</span></h6>
                                        <div class="progress h-6">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="70" style="width: 70%;" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="font-12 mt-1 mb-0">10% more than others</p>
                                    </div>
                                    <!-- End Team Work -->

                                    <!-- Team Work -->
                                    <div class="mb-20">
                                        <h6 class="mb-10 font-14">Office Facilities <span class="float-right">85%</span></h6>
                                        <div class="progress h-6">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="85" style="width: 70%;" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="font-12 mt-1 mb-0">16% more than others</p>
                                    </div>
                                    <!-- End Team Work -->
                                </div>
                                <!-- End Prograss Bars -->

                                <hr>

                                <!-- Save or Print  -->
                                <ul class="px-2 py-4 d-flex justify-content-between">
                                    <li>
                                        <a class="text-dark .g-color-primary--hover" href="#">
                                            <i class="fa fa-bookmark-o  g-mr-5"></i> Save for later
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark .g-color-primary--hover" href="#">
                                            <i class="icon-printer  g-pos-rel g-top-1 g-mr-5"></i> Print Job
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Save or Print  -->

                                <hr>

                                <a class="btn btn-success btn-block" href="#">Apply Now</a>
                            </aside>
                        </div>
                        <!-- Sidebar -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout1>
