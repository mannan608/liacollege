<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

trait FileUploadTrait
{
    /**
     * Upload a file to public folder
     */
    public function uploadFile(
        UploadedFile $file,
        string $folder = 'uploads',
        ?string $oldFile = null
    ): string {

        // Delete old file
        if ($oldFile) {
            $this->deleteFile($oldFile);
        }

        $filename = time() . '_' . Str::uuid() . '.' . $file->getClientOriginalExtension();

        $destinationPath = public_path($folder);

        // Create folder if not exists
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, true);
        }

        $file->move($destinationPath, $filename);

        return $folder . '/' . $filename;
    }

    /**
     * Upload multiple files
     */
    public function uploadMultipleFiles(
        array $files,
        string $folder = 'uploads'
    ): array {

        $paths = [];

        foreach ($files as $file) {
            if ($file instanceof UploadedFile) {
                $paths[] = $this->uploadFile($file, $folder);
            }
        }

        return $paths;
    }

    /**
     * Delete file
     */
    public function deleteFile(?string $path): bool
    {
        if (!$path) {
            return false;
        }

        $fullPath = public_path($path);

        if (file_exists($fullPath)) {
            return unlink($fullPath);
        }

        return false;
    }

    /**
     * File exists
     */
    public function fileExists(?string $path): bool
    {
        if (!$path) {
            return false;
        }

        return file_exists(public_path($path));
    }

    /**
     * Get file url
     */
    public function getFileUrl(?string $path): ?string
    {
        if (!$path) {
            return null;
        }

        return asset($path);
    }

    /**
     * Get file size
     */
    public function getFileSize(?string $path): ?int
    {
        $fullPath = public_path($path);

        return file_exists($fullPath) ? filesize($fullPath) : null;
    }

    /**
     * Get mime type
     */
    public function getMimeType(?string $path): ?string
    {
        $fullPath = public_path($path);

        return file_exists($fullPath)
            ? mime_content_type($fullPath)
            : null;
    }
}