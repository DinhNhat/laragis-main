

<x-layout1>
    <div class="row">
        <div class="col-12 box-margin height-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Create a job</h6>
                    <form method="POST" action="{{ route('create-job') }}">
                        @csrf

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="companyName">Company Name</label>
                                    <input type="text" class="form-control" id="companyName" placeholder="Enter company name" name="company">
                                    @error('company')
                                        <p class="text-danger text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div><!-- Col -->

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="jobTitle">Job Title</label>
                                    <input type="text" class="form-control" id="jobTitle" placeholder="Enter job title" name="title">
                                    @error('title')
                                        <p class="text-danger text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="jobLocation">Job Location</label>
                                    <input type="text" class="form-control" id="jobLocation" placeholder="Enter job location" name="location">
                                    @error('location')
                                        <p class="text-danger text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="contactEmail">Contact Email</label>
                                    <input type="text" class="form-control" id="contactEmail" placeholder="Enter contact email" name="email">
                                    @error('email')
                                        <p class="text-danger text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="websiteUrl">Website/Application URL</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">https://</span>
                                        </div>
                                        <input type="text" class="form-control" id="websiteUrl" placeholder="Enter website url" name="website">
                                        @error('website')
                                            <p class="text-danger text-xs mt-1">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="tags">Tags (Comma Separated)</label>
                                    <input type="text" class="form-control" id="tags" placeholder="Enter tags Example: Laravel, Backend, PostgreSQL, etc" name="tags">
                                    @error('tags')
                                        <p class="text-danger text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="logo">Company Logo</label>
                                    <input type="file" class="form-control-file" id="logo" name="logo">
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group g-mb-20">
                                    <label class="g-mb-10" for="description">Job Description</label>
                                    <textarea id="description" class="form-control form-control-md g-resize-none rounded-0" rows="3" placeholder="Text area" name="description"></textarea>
                                    <small class="form-text text-muted g-font-size-default g-mt-10">
                                        <strong>Note:</strong> height of the textarea depends on the rows attribute.
                                    </small>
                                    @error('description')
                                        <p class="text-danger text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary submit">Create Job</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-layout1>
