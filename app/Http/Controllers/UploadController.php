<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Service\UploadService;
use App\Service\UploadServiceContract;
use Illuminate\Http\Request;

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
//        $validatedData = $request->validate([
//            'media' => 'required|file|mimes:jpg,bmp,png|max:5*1024'
//        ]);

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
