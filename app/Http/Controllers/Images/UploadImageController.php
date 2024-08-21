<?php

namespace App\Http\Controllers\Images;

use App\Http\Controllers\Controller;
use App\Services\ImageService;
use App\Http\Requests\UploadImageRequest;
use App\Helpers\ResponseHelper;
use Exception;
use Illuminate\Support\Facades\Validator;

class UploadImageController extends Controller
{
    protected $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function store(UploadImageRequest $request, $storageFolderName)
    {
        try {
            $imageName = $this->imageService->uploadImage($request->file('image'), $storageFolderName);

            return ResponseHelper::success(["uploaded image name"=>$imageName],'Image successfully uploaded');
        } catch (Exception $e) {
            return ResponseHelper::error('Error uploading image: ' . $e->getMessage());
        }
    }

}
