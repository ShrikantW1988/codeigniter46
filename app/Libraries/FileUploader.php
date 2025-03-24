<?php

namespace App\Libraries;

class FileUploader {
    private $uploadDir;
    private $allowedTypes;
    private $maxFileSize;
    private $errors = [];

    public function __construct($uploadDir = 'uploads/', $allowedTypes = ['image/jpeg', 'image/png'], $maxFileSize = 2 * 1024 * 1024) {
        $this->uploadDir = $uploadDir;
        $this->allowedTypes = $allowedTypes;
        $this->maxFileSize = $maxFileSize;

        // Ensure the upload directory exists
        if (!is_dir($this->uploadDir)) {
            mkdir($this->uploadDir, 0777, true);
        }
    }

    public function upload($file) 
    {        

        if (empty($file['name'])) {
            $this->errors[] = "File upload error: Plz upload file." ;
            return false;
        }

        if ($file['error'] !== UPLOAD_ERR_OK) {
            $this->errors[] = "File upload error: " . $file['error'];
            return false;
        }

        // Validate file type
        if (!in_array($file['type'], $this->allowedTypes)) {
            $this->errors[] = "Invalid file type. Allowed types are: " . implode(', ', $this->allowedTypes);
            return false;
        }

        // Validate file size
        if ($file['size'] > $this->maxFileSize) {
            $this->errors[] = "File size exceeds the maximum allowed size of " . ($this->maxFileSize / 1024 / 1024) . " MB.";
            return false;
        }

        // Generate a unique file name to avoid overwriting
        $fileName = uniqid() . '_' . basename($file['name']);
        $destination = $this->uploadDir . $fileName;

        // Move the uploaded file to the destination
        if (move_uploaded_file($file['tmp_name'], $destination)) {
            return $destination;
        } else {
            $this->errors[] = "Failed to move uploaded file.";
            return false;
        }
    }

    public function getErrors() {
        return $this->errors;
    }
}