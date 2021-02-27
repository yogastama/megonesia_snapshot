<?php

namespace MyVendor\Contactform\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{

    public function save_to_your_table(Model $model, array $columns_and_value)
    {
        $newSnapshot = new $model($columns_and_value);
        $newSnapshot->save();
        return $newSnapshot;
    }
    public function export_to_image(string $base64, string $path_and_name_file)
    {
        file_put_contents($path_and_name_file, file_get_contents($base64));
    }
    public function export_to_image_url(string $base64, string $path, string $name_file, string $url_app)
    {
        file_put_contents($path . $name_file, file_get_contents($base64));
        return str_replace($path, $url_app, $path . $name_file);
    }
}
