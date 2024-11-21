<?php

namespace App\Jobs;

use Spatie\Image\Image;
use Spatie\Image\Enums\Fit;
use Spatie\Image\Enums\CropPosition;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class ResizeImage implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */

     private $w, $h, $filename, $path;
    public function __construct ($filePath, $w, $h) 

    {
        $this->path = dirname($filePath);
        $this->filename = basename($filePath);
        $this->w = $w;
        $this->h = $h;
    }
    

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $w = $this->w;
        $h = $this->h;
        $srcPath = storage_path() . '/app/public/' . $this->path . '/' . $this->filename;
        $destPath = storage_path() . '/app/public/' . $this->path . "/crop_{$w}x{$h}_" . $this->filename;

        Image::load($srcPath)
            // ->crop($w, $h, CropPosition::Center)
            ->fit(Fit::Crop, 300, 300)
            ->save($destPath);
    }
}
