
## Firebase Image Service

This repository contains a Laravel microservice designed to interact with Firebase for managing image operations. The service provides functionality for uploading, retrieving, and deleting images using Firebase Storage.

### Installation

1. **Install the Laravel Firebase Package**

   To use Firebase with Laravel, you'll need to install the `kreait/laravel-firebase` package. Run the following command:

   ```bash
   composer require kreait/laravel-firebase
   ```

2. **Set Up Firebase**

   Follow these steps to configure Firebase for your Laravel application:

   - **Create a Firebase Project**
     1. Go to the [Firebase Console](https://console.firebase.google.com/).
     2. Click on "Add project" and follow the prompts to create a new project.

   - **Add Firebase to Your App**
     1. After creating the project, click on the gear icon next to "Project Overview" to access project settings.

   - **Generate a Service Account Key (In the same window as the previous step, you will do the following):**

     1. In the Firebase Console, go to "Project Settings."
     2. Click on the "Service accounts" tab.
     3. Click "Generate new private key" and download the JSON file.
     4. Copy the contents of this JSON file and configure them in your `.env` file in Laravel with the appropriate environment variables.

   - **Set Up Firebase Storage**
     1. In the Firebase Console, go to the "Storage" section and click "Get started."
     2. Set up Firebase Storage rules. Update the rules to allow read and write operations:
        ```json
        allow read, write: if request.auth == null;
        ```
     3. Copy the storage URL and set it in your `.env` file.

   - **Set Up Firebase Realtime Database**
     1. In the Firebase Console, go to the "Realtime Database" section and click "Create Database."
     2. Set up Realtime Database rules. Update the rules to allow read and write operations:
        ```json
        {
          "rules": {
            ".read": "auth != null",
            ".write": "auth != null"
          }
        }
        ```
     3. Copy the database URL, remove the `gs://` prefix, and set it in your `.env` file.

### Configuration

Update your `.env` file with the Firebase configuration settings. Example:

```env
FIREBASE_TYPE=service_account
FIREBASE_PROJECT_ID=example-project-1234
FIREBASE_PRIVATE_KEY_ID=abc1234567890def1234567890abcde123456789
FIREBASE_PRIVATE_KEY="-----BEGIN PRIVATE KEY-----\U1yG+\n-----END PRIVATE KEY-----\n"
FIREBASE_CLIENT_EMAIL=firebase-adminsdk-xyz12@example-project-1234.iam.gserviceaccount.com
FIREBASE_CLIENT_ID=987654321098765432109
FIREBASE_AUTH_URI=https://accounts.google.com/o/oauth2/auth
FIREBASE_TOKEN_URI=https://oauth2.googleapis.com/token
FIREBASE_AUTH_PROVIDER_X509_CERT_URL=https://www.googleapis.com/oauth2/v1/certs
FIREBASE_CLIENT_X509_CERT_URL=https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-xyz12%40example-project-1234.iam.gserviceaccount.com
FIREBASE_UNIVERSE_DOMAIN=googleapis.com
STORAGE_BUCKETNAME_URL=example-project-1234.appspot.com
REALTIME_DATABASE_URL=https://example-project-1234.firebaseio.com

```

### Contribution

If you wish to contribute to this project, please follow the contribution guidelines provided in the [Laravel documentation](https://laravel.com/docs/contributions).

### License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

### Contact

For any issues or inquiries, please contact [ezequielta63@gmail.com](mailto:ezequielta63@gmail.com).

---
