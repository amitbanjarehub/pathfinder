<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class SiteSetting extends Model
{
    protected $fillable = ['key', 'value', 'type'];

    /**
     * Get a setting value by key.
     */
    public static function get(string $key, mixed $default = null): mixed
    {
        return Cache::rememberForever("site_setting_{$key}", function () use ($key, $default) {
            $setting = static::where('key', $key)->first();
            return $setting ? $setting->value : $default;
        });
    }

    /**
     * Set a setting value by key.
     */
    public static function set(string $key, mixed $value, string $type = 'string'): static
    {
        Cache::forget("site_setting_{$key}");

        return static::updateOrCreate(
            ['key' => $key],
            ['value' => $value, 'type' => $type]
        );
    }

    /**
     * Clear the cache for a specific setting.
     */
    public static function clearCache(string $key): void
    {
        Cache::forget("site_setting_{$key}");
    }
}
