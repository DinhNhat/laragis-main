<?php


namespace App\Service;


use App\DTO\Media;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

interface UploadServiceContract
{
    public function storeUploadMedia(Request $request);
}
