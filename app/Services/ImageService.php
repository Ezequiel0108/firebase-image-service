<?php

namespace App\Services;

use App\Repositories\ImageRepository;
use Exception;

class ImageService
{
    protected $imageRepository;

    public function __construct(ImageRepository $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    public function uploadImage($image, $carpetCreate)
    {

        // Lógica de negocio para manejar la subida de la imagen
        try {
            $imageWithSpaces = uniqid() . '_' . $image->getClientOriginalName();
            $imageName = str_replace(' ', '', $imageWithSpaces);

            $this->imageRepository->uploadToFirebase($image, $carpetCreate, $imageName);

            return $imageName; 
        } catch (Exception $e) {
            throw new Exception('Business logic error while uploading the image: ' . $e->getMessage(), 500);
        }
        
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
