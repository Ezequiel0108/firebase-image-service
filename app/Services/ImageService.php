<?php

namespace App\Services;

use App\Repositories\ImageRepository;
use Illuminate\Http\UploadedFile;

class ImageService
{
    protected $imageRepository;

    public function __construct(ImageRepository $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    public function uploadImage(UploadedFile $file, $carpetCreate)
    {
        // Lógica de negocio para manejar la subida de la imagen
    }

    public function getImage($imageName, $ruteImageStorage)
    {
        // Lógica de negocio para manejar la obtención de la imagen
    }

    public function deleteImage($imageName, $ruteImageStorage)
    {
        // Lógica de negocio para manejar la eliminación de la imagen
    }
}
