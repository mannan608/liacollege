<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeoMeta extends Model
{
    protected $fillable = [
        'path',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'og_image',
        'canonical_url',
        'schema_markup',
    ];

    /**
     * Get SEO meta for a specific path
     */
    public static function getForPath(string $path): ?self
    {
        return static::where('path', $path)->first();
    }

    /**
     * Get keywords as array
     */
    public function getKeywordsArray(): array
    {
        if (!$this->meta_keywords) {
            return [];
        }

        // Try to decode as JSON first, fallback to comma-separated
        $decoded = json_decode($this->meta_keywords, true);
        if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
            return $decoded;
        }

        return array_filter(array_map('trim', explode(',', $this->meta_keywords)));
    }
}
