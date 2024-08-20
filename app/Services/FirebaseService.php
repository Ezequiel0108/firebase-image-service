<?php
namespace App\Services;

use Kreait\Firebase\Factory;

class FirebaseService
{
    protected $firebase;

    public function __construct()
    {
        $firebaseConfig = [
            'type' => env('FIREBASE_TYPE'),
            'project_id' => env('FIREBASE_PROJECT_ID'),
            'private_key_id' => env('FIREBASE_PRIVATE_KEY_ID'),
            'private_key' => env('FIREBASE_PRIVATE_KEY'),
            'client_email' => env('FIREBASE_CLIENT_EMAIL'),
            'client_id' => env('FIREBASE_CLIENT_ID'),
            'auth_uri' => env('FIREBASE_AUTH_URI'),
            'token_uri' => env('FIREBASE_TOKEN_URI'),
            'auth_provider_x509_cert_url' => env('FIREBASE_AUTH_PROVIDER_CERT_URL'),
            'client_x509_cert_url' => env('FIREBASE_CLIENT_CERT_URL'),
            'universe_domain' => env('FIREBASE_UNIVERSE_DOMAIN'),
        ];
        //$realtimeDatabase=env('REALTIME_DATABASE_URL');
 
        $this->firebase = (new Factory)
            ->withServiceAccount($firebaseConfig);
            //->withDatabaseUri($realtimeDatabase);
    }

    public function getFirebase()
    {
        return $this->firebase;
    }

    public function getKeyFile()
    {
        return [
            'type' => env('FIREBASE_TYPE'),
            'project_id' => env('FIREBASE_PROJECT_ID'),
            'private_key_id' => env('FIREBASE_PRIVATE_KEY_ID'),
            'private_key' => env('FIREBASE_PRIVATE_KEY'),
            'client_email' => env('FIREBASE_CLIENT_EMAIL'),
            'client_id' => env('FIREBASE_CLIENT_ID'),
            'auth_uri' => env('FIREBASE_AUTH_URI'),
            'token_uri' => env('FIREBASE_TOKEN_URI'),
            'auth_provider_x509_cert_url' => env('FIREBASE_AUTH_PROVIDER_CERT_URL'),
            'client_x509_cert_url' => env('FIREBASE_CLIENT_CERT_URL'),
            'universe_domain' => env('FIREBASE_UNIVERSE_DOMAIN'),
        ];
    }

    public function getProjectId()
    {
       return env('FIREBASE_PROJECT_ID');
    }

    public function getBucketName()
    {
       return env('STORAGE_BUCKETNAME_URL');
    }
}
