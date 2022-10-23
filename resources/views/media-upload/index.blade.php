<x-layout1>
    <div class="row">
        <div class="col-12">
            <div class="card box-margin">
                <div class="card-body">
                    <form class="g-brd-around" method="POST" action="{{ url('/media-upload') }}" enctype="multipart/form-data">
                        @csrf
                        <!-- Textarea Input with Left Appended Icon -->
                        <div class="form-group g-mb-20">
                            <h6 for="media">Media Upload</h6>
                            <input type="file" class="form-control-file" id="upload-media" name="media">
                            @error('media')
                                <p class="text-danger text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <!-- End Textarea Input with Left Appended Icon -->
                        <hr class="g-brd-gray-light-v4 g-mx-minus-30">
{{--                        <button type="submit" class="btn btn-primary submit">Upload Media</button>--}}
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 box-margin">
            <div class="card">
                <div class="card-body pb-0">
                    <h5 class="gallery_title card-title media-list-header">Media Upload Gallery</h5>
                    @if (count($mediaList) > 0)
                        <div class="row text-center" id="gallery-uploads">
                            @foreach ($mediaList as $media)
                                <div class="col-sm-6 col-xl-3">
                                    <a href="{{ url('/') . $media->path }}" target="_blank" data-lightbox="example-set">
                                        <img src="{{ url('/') . $media->path }}" class="img-fluid mb-30" alt="">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <h1 class="display-4 text-danger" id="no-media-list">No Media List</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-layout1>
