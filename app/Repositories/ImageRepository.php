<?php
//lógica relacionada con la interacción con Firebase Storage, como subir, obtener y eliminar imágenes.

namespace App\Repositories;

use Google\Cloud\Storage\StorageClient;

class ImageRepository
{
    protected $storage;
    protected $bucketName;

    public function __construct(StorageClient $storage, $bucketName)
    {
        $this->storage = $storage;
        $this->bucketName = $bucketName;
    }
    public function uploadImage($fileContent, $imageName, $carpetCreate)
    {
        // Lógica para subir una imagen a Firebase Storage
    }

    public function getImage($imageName, $ruteImageStorage)
    {
        // Lógica para obtener una imagen desde Firebase Storage
    }
    
    public function deleteImage($imageName, $ruteImageStorage)
    {
        // Lógica para eliminar una imagen de Firebase Storage
    }

}

?>
