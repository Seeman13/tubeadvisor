<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('languages')->insert([
            [
                'name'        => 'Afrikaans',
                'code'        => 'af',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Albanian',
                'code'        => 'sq',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Arabic',
                'code'        => 'ar',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Armenian',
                'code'        => 'hy',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Azerbaijani',
                'code'        => 'az',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Basque',
                'code'        => 'eu',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Belarusian',
                'code'        => 'be',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Bengali',
                'code'        => 'bn',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Bulgarian',
                'code'        => 'bg',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Catalan',
                'code'        => 'ca',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Chinese',
                'code'        => 'zh',
                'active'      => true,
                'created_at'  => now()
            ],
            [
                'name'        => 'Croatian',
                'code'        => 'hr',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Czech',
                'code'        => 'cs',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Danish',
                'code'        => 'da',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Dutch',
                'code'        => 'nl',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'English',
                'code'        => 'en',
                'active'      => true,
                'created_at'  => now()
            ],
            [
                'name'        => 'Estonian',
                'code'        => 'et',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Filipino',
                'code'        => 'tl',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Finnish',
                'code'        => 'fi',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'French',
                'code'        => 'fr',
                'active'      => true,
                'created_at'  => now()
            ],
            [
                'name'        => 'Galician',
                'code'        => 'gl',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Georgian',
                'code'        => 'ka',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'German',
                'code'        => 'de',
                'active'      => true,
                'created_at'  => now()
            ],
            [
                'name'        => 'Greek',
                'code'        => 'el',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Gujarati',
                'code'        => 'gu',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Haitian Creole',
                'code'        => 'ht',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Hebrew',
                'code'        => 'he',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Hindi',
                'code'        => 'hi',
                'active'      => true,
                'created_at'  => now()
            ],
            [
                'name'        => 'Hungarian',
                'code'        => 'hu',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Icelandic',
                'code'        => 'is',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Indonesian',
                'code'        => 'id',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Irish',
                'code'        => 'ga',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Italian',
                'code'        => 'it',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Japanese',
                'code'        => 'ja',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Kannada',
                'code'        => 'kn',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Korean',
                'code'        => 'ko',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Latin',
                'code'        => 'la',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Latvian',
                'code'        => 'lv',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Lithuanian',
                'code'        => 'lt',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Macedonian',
                'code'        => 'mk',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Malay',
                'code'        => 'ms',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Maltese',
                'code'        => 'mt',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Norwegian',
                'code'        => 'no',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Persian',
                'code'        => 'fa',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Polish',
                'code'        => 'pl',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Portuguese',
                'code'        => 'pt',
                'active'      => true,
                'created_at'  => now()
            ],
            [
                'name'        => 'Romanian',
                'code'        => 'ro',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Russian',
                'code'        => 'ru',
                'active'      => true,
                'created_at'  => now()
            ],
            [
                'name'        => 'Serbian',
                'code'        => 'sr',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Slovak',
                'code'        => 'sk',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Slovenian',
                'code'        => 'sl',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Spanish',
                'code'        => 'es',
                'active'      => true,
                'created_at'  => now()
            ],
            [
                'name'        => 'Swahili',
                'code'        => 'sw',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Swedish',
                'code'        => 'sv',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Tamil',
                'code'        => 'ta',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Telugu',
                'code'        => 'te',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Thai',
                'code'        => 'th',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Turkish',
                'code'        => 'tr',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Ukrainian',
                'code'        => 'uk',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Urdu',
                'code'        => 'ur',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Vietnamese',
                'code'        => 'vi',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Welsh',
                'code'        => 'cy',
                'active'      => false,
                'created_at'  => now()
            ],
            [
                'name'        => 'Yiddish',
                'code'        => 'yi',
                'active'      => false,
                'created_at'  => now()
            ],
        ]);
    }
}
