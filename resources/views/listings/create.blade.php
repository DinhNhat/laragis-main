{{--<x-layout>--}}
{{--  <x-card class="p-10 max-w-lg mx-auto mt-24">--}}
{{--    <header class="text-center">--}}
{{--      <h2 class="text-2xl font-bold uppercase mb-1">Create a Gig</h2>--}}
{{--      <p class="mb-4">Post a gig to find a developer</p>--}}
{{--    </header>--}}

{{--    <form method="POST" action="{{ url('/listings') }}" enctype="multipart/form-data">--}}
{{--      @csrf--}}
{{--      <div class="mb-6">--}}
{{--        <label for="company" class="inline-block text-lg mb-2">Company Name</label>--}}
{{--        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"--}}
{{--          value="{{old('company')}}" />--}}

{{--        @error('company')--}}
{{--        <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--        @enderror--}}
{{--      </div>--}}

{{--      <div class="mb-6">--}}
{{--        <label for="title" class="inline-block text-lg mb-2">Job Title</label>--}}
{{--        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"--}}
{{--          placeholder="Example: Senior Laravel Developer" value="{{old('title')}}" />--}}

{{--        @error('title')--}}
{{--        <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--        @enderror--}}
{{--      </div>--}}

{{--      <div class="mb-6">--}}
{{--        <label for="location" class="inline-block text-lg mb-2">Job Location</label>--}}
{{--        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"--}}
{{--          placeholder="Example: Remote, Boston MA, etc" value="{{old('location')}}" />--}}

{{--        @error('location')--}}
{{--        <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--        @enderror--}}
{{--      </div>--}}

{{--      <div class="mb-6">--}}
{{--        <label for="email" class="inline-block text-lg mb-2">--}}
{{--          Contact Email--}}
{{--        </label>--}}
{{--        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />--}}

{{--        @error('email')--}}
{{--        <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--        @enderror--}}
{{--      </div>--}}

{{--      <div class="mb-6">--}}
{{--        <label for="website" class="inline-block text-lg mb-2">--}}
{{--          Website/Application URL--}}
{{--        </label>--}}
{{--        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"--}}
{{--          value="{{old('website')}}" />--}}

{{--        @error('website')--}}
{{--        <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--        @enderror--}}
{{--      </div>--}}

{{--      <div class="mb-6">--}}
{{--        <label for="tags" class="inline-block text-lg mb-2">--}}
{{--          Tags (Comma Separated)--}}
{{--        </label>--}}
{{--        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"--}}
{{--          placeholder="Example: Laravel, Backend, Postgres, etc" value="{{old('tags')}}" />--}}

{{--        @error('tags')--}}
{{--        <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--        @enderror--}}
{{--      </div>--}}

{{--      <div class="mb-6">--}}
{{--        <label for="logo" class="inline-block text-lg mb-2">--}}
{{--          Company Logo--}}
{{--        </label>--}}
{{--        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />--}}

{{--        @error('logo')--}}
{{--        <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--        @enderror--}}
{{--      </div>--}}

{{--      <div class="mb-6">--}}
{{--        <label for="description" class="inline-block text-lg mb-2">--}}
{{--          Job Description--}}
{{--        </label>--}}
{{--        <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"--}}
{{--          placeholder="Include tasks, requirements, salary, etc">{{old('description')}}</textarea>--}}

{{--        @error('description')--}}
{{--        <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--        @enderror--}}
{{--      </div>--}}

{{--      <div class="mb-6">--}}
{{--        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">--}}
{{--          Create Gig--}}
{{--        </button>--}}

{{--        <a href="{{ url('/') }}" class="text-black ml-4"> Back </a>--}}
{{--      </div>--}}
{{--    </form>--}}
{{--  </x-card>--}}
{{--</x-layout>--}}

<x-layout1>
    <div class="row">
        <div class="col-12 box-margin height-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Create a job</h6>
                    <form method="POST" action="{{ route('create-job') }}>
                        @csrf

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="companyName">Company Name</label>
                                    <input type="text" class="form-control" id="companyName" placeholder="Enter company name" name="company">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="jobTitle">Job Title</label>
                                    <input type="text" class="form-control" id="jobTitle" placeholder="Enter job title" name="title">
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="jobLocation">Job Location</label>
                                    <input type="text" class="form-control" id="jobLocation" placeholder="Enter job location" name="location">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="contactEmail">Contact Email</label>
                                    <input type="text" class="form-control" id="contactEmail" placeholder="Enter contact email" name="email">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="websiteUrl">Website/Application URL</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">https://example.com</span>
                                        </div>
                                        <input type="text" class="form-control" id="websiteUrl" placeholder="Enter website url" name="website">
                                    </div>
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="tags">Tags (Comma Separated)</label>
                                    <input type="text" class="form-control" id="tags" placeholder="Enter tags Example: Laravel, Backend, PostgreSQL, etc" name="tags">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="logo">Company Logo</label>
                                    <input type="file" class="form-control-file" id="logo" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-muted">This is some file size note</small>
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group g-mb-20">
                                    <label class="g-mb-10" for="inputGroup2_1">Textarea</label>
                                    <textarea id="inputGroup2_1" class="form-control form-control-md g-resize-none rounded-0" rows="3" placeholder="Text area"></textarea>
                                    <small class="form-text text-muted g-font-size-default g-mt-10">
                                        <strong>Note:</strong> height of the textarea depends on the rows attribute.
                                    </small>
                                </div>
                            </div>
                        </div>
                    </form>
                    <button type="button" class="btn btn-primary submit">Create Job</button>
                </div>
            </div>
        </div>
    </div>
</x-layout1>
