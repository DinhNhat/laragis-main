<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Service\UploadService;
use App\Service\UploadServiceContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UploadController extends Controller
{
    private $service;

    public function __construct(UploadService $uploadService)
    {
        $this->service = $uploadService;
    }

    public function index()
    {
        $mediaList = Media::all();

        return view('media-upload.index', ['mediaList' => $mediaList]);
    }

    public function upload(Request $request)
    {
        // Validate file
        $validator = Validator::make($request->all(), [
            'media' => 'required|file|mimes:jpeg,jpg,jpe,bmp,png,webp,btif,gif|max:102400'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'message' => 'The media failed to upload!!!'
            ]);
        }

        // Call upload media service
        $savedMedia = $this->service->storeUploadMedia($request);

        if ($savedMedia == false)
        {
            return response()->json([
                'error' => true,
                'message' => 'Something went wrong in processing media upload'
            ]);
        }

        return response()->json([
            'error' => false,
            'url' => config('app.url') . $savedMedia->path,
            'hashedName' => $savedMedia->name
        ]);

    }
}
