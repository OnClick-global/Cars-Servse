<?php

namespace App\Helpers;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class Helper
{

    public static function uploadImage(string $dir, string $format, $image = null)
    {
        if ($image != null) {
            $imageName = Carbon::now()->toDateString(). "-" . uniqid() . "." . $format;

            if (!Storage::disk('public')->exists($dir)) {
                Storage::disk('public')->makeDirectory($dir);
            }
            Storage::disk('public')->put($dir.'/'.$imageName, file_get_contents($image));


        } else {
            $imageName = 'def.png';
        }

        return $imageName;
    }

    public static function update(string $dir, $old_image, string $format, $image = null)
    {
        if (Storage::disk('public')->exists($dir . $old_image)) {
            Storage::disk('public')->delete($dir . $old_image);
        }
        $imageName = self::uploadImage($dir, $format, $image);
        return $imageName;
    }

    public static function remove_invalid_charcaters($str)
    {
        return str_ireplace(['\'', '"', ',', ';', '<', '>', '?'], ' ', $str);
    }

    function translate($key)
    {
        $local = session()->has('local') ? session('local') : \app()->getLocale();
        App::setLocale($local);
        $lang_array = include(base_path('resources/lang/' . $local . '/admin.php'));
        $processed_key = ucfirst(str_replace('_', ' ', Helper::remove_invalid_charcaters($key)));
        if (!array_key_exists($key, $lang_array)) {
            $lang_array[$key] = $processed_key;
            $str = "<?php return " . var_export($lang_array, true) . ";";
            file_put_contents(base_path('resources/lang/' . $local . '/admin.php'), $str);
            $result = $processed_key;
        } else {
            $result = __('admin.' . $key);
        }
        return $result;
    }
}

?>
