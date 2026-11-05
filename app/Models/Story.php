<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Story extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'description',
        'image',
        'is_active',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var list<string>
     */
    protected $appends = [
        'image_url',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    /**
     * Scope a query to only include active stories.
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    /**
     * Accessor for full image URL supporting Storage disk & public assets.
     */
    protected function imageUrl(): Attribute
    {
        return Attribute::make(
            get: function (): ?string {
                if (empty($this->image)) {
                    return null;
                }

                if (Str::startsWith($this->image, ['http://', 'https://'])) {
                    return $this->image;
                }

                if (Str::startsWith($this->image, ['images/', 'build/'])) {
                    return asset($this->image);
                }

                if (Str::startsWith($this->image, 'storage/')) {
                    return asset($this->image);
                }

                if (Storage::disk('public')->exists($this->image)) {
                    return Storage::disk('public')->url($this->image);
                }

                return asset('storage/'.ltrim($this->image, '/'));
            }
        );
    }
}

