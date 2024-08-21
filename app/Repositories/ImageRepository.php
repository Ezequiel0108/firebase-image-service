<?php
//lógica relacionada con la interacción con Firebase Storage, como subir, obtener y eliminar imágenes.

namespace App\Repositories;

use Google\Cloud\Storage\StorageClient;
use Exception;
use App\Services\FirebaseService;


class ImageRepository
{
    protected $storage;
    protected $bucketName;

    public function __construct(FirebaseService $firebaseService)
    {
        $this->storage = new StorageClient([
            'projectId' => $firebaseService->getProjectId(),
            'keyFile' => $firebaseService->getKeyFile(),
        ]);

        $this->bucketName = $firebaseService->getBucketName();
    }
    public function uploadToFirebase($image,  $storageFolderName, $imageName)
    {
        // Lógica para subir una imagen a Firebase Storage
        try {
            $object = $this->storage->bucket($this->bucketName)->upload(
                $image->get(),
                ['name' =>  $storageFolderName . '/' . 'images/' . $imageName]
              
            );

            if (!$object->exists()) {
                throw new Exception('Error uploading the image to Firebase Storage.');
            }
        } catch (Exception $e) {
            throw new Exception('Error interacting with Firebase Storage: ' . $e->getMessage(), 500);
        }
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
