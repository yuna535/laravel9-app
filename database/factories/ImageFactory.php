<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // ディレクトリがなければ作成する
        if (!Storage::exists('public/images')) {
            Storage::makeDirectory('public/images');
        }
        return [
            'name' => 'スクリーンショット 2022-06-21 23.20.30.png'
        ];
    }
}