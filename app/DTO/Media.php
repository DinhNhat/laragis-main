<?php


namespace App\DTO;


class Media
{
    private $name;
    private $originalName;
    private $mime;
    private $path;
    private $disk;
    private $hash;
    private $collection;
    private $size;

    public function __construct(
        string $name,
        string $originalName,
        string $mime,
        string $path,
        string $disk,
        string $hash,
        float $size,
        $collection = null
    ){
        $this->name = $name;
        $this->originalName = $originalName;
        $this->mime = $mime;
        $this->path = $path;
        $this->disk = $disk;
        $this->hash = $hash;
        $this->size = $size;
        $this->collection = $collection;
    }

    public function toArray()
    {
        return [
            'name' => $this->name,
            'file_name' => $this->originalName,
            'mime_type' => $this->mime,
            'path' => $this->path,
            'disk' => $this->disk,
            'file_hash' => $this->hash,
            'collection' => $this->collection,
            'size' => $this->size
        ];
    }

}
