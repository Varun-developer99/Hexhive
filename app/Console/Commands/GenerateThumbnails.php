<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Conversions\FileManipulator;

class GenerateThumbnails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'media:generate-thumbnails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate thumbnails for all existing media items';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Starting thumbnail generation for all media items...');

        $mediaItems = Media::all();

        foreach ($mediaItems as $media) {
            $this->info("Processing media ID: {$media->id}");

            try {
                $model = $media->model;

                if ($model && method_exists($model, 'registerMediaConversions')) {
                    // Use FileManipulator to regenerate conversions
                    $fileManipulator = app(FileManipulator::class);
                    $fileManipulator->createDerivedFiles($media);

                    $this->info("Thumbnails regenerated for media ID: {$media->id}");
                } else {
                    $this->warn("Model for media ID: {$media->id} is either null or does not support media conversions.");
                }
            } catch (\Exception $e) {
                $this->error("Error processing media ID: {$media->id} - {$e->getMessage()}");
            }
        }

        $this->info('Thumbnail generation completed.');

        return 0;
    }
}
