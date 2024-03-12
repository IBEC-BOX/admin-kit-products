<?php

namespace AdminKit\Products\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Support\Collection;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\InteractsWithMedia;
use AdminKit\Core\Abstracts\Models\AbstractModel;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use AdminKit\Products\Database\Factories\ProductFactory;

/**
 * @property-read string $title
 * @property-read string $text
 * @property-read string $photo
 * @property-read Collection $attachments
 * @property-read ?int $sort
 */
class Product extends AbstractModel implements HasMedia
{
    use HasFactory;
    use HasTranslations;
    use InteractsWithMedia;

    protected $table = 'admin_kit_products';

    protected $fillable = [
        'title',
        'text',
        'sort',
    ];

    protected array $translatable = [
        'title',
        'text',
    ];

    public function photo(): Attribute
    {
        return new Attribute(
            get: fn () => $this->getFirstMediaUrl('photo')
        );
    }

    public function attachments(): Attribute
    {
        return new Attribute(
            get: fn () => $this->getMedia('attachments.'.app()->getLocale())
                ->map(fn (Media $media) => $media->getFullUrl())
        );
    }

    protected static function newFactory(): ProductFactory
    {
        return new ProductFactory();
    }
}
