<?php


namespace App\Service;


use App\DTO\Media;
use Illuminate\Http\FileHelpers;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UploadService implements UploadServiceContract
{
    public function storeUploadMedia(Request $request)
    {
        try
        {
            if ($request->hasFile('media'))
            {
                $today = date("Y/m/d");

                $media = $request->file('media');

                // Convert size from Byte to KB
                $sizeInMegaByte = $media->getSize() / 1000000;


                // Get the path url
                $name = $media->getClientOriginalName();

                $storagePath = 'uploads/' . $today;

                // Store the media file
                $request->file('media')->storeAs('public/' . $storagePath, $name);

                $pathFile = '/storage/' . $storagePath . '/' . $name;

                $pathFileHashed = Hash::make($pathFile, ['round' => 12]);

                // Initialize Media DTO
                $mediaDTO = new Media(
                    $media->hashName(),
                    $media->getClientOriginalName(),
                    $media->getMimeType(),
                    $pathFile,
                    config('app.uploads.disk'),
                    $pathFileHashed,
                    $sizeInMegaByte
                );

                // Save Media to DB
                return \App\Models\Media::create($mediaDTO->toArray());
            }
        }
        catch (\Exception $e)
        {
            return false;
        }



//        $name = $file->hashName();
//
//        $upload = Storage::put("{$name}", $file);
//
//        return new Media(
//            "{$name}",
//            $file->getClientOriginalName(),
//            $file->getClientMimeType(),
//            $upload->path(),
//            config('app.uploads.disk'),
//            file_hash(config('app.uploads.hash'), storage_path("avatars/{$name}",),),
//            'avatars',
//        );
    }
}
