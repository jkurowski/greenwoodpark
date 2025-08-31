<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

//CMS
use App\Models\Gallery;
use Intervention\Image\ImageManagerStatic as Image;

class GalleryService
{
    public function upload(string $title, UploadedFile $file, object $model, bool $delete = false)
    {
        if ($delete) {
            if (File::isFile(public_path('uploads/gallery/' . $model->file))) {
                File::delete(public_path('uploads/gallery/' . $model->file));
            }
            if (File::isFile(public_path('uploads/gallery/' . $model->file_thumb))) {
                File::delete(public_path('uploads/gallery/' . $model->file_thumb));
            }
        }

        $name = date('His').'_'.Str::slug($title).'.' . $file->getClientOriginalExtension();
        $name_webp = date('His') . '_' . Str::slug($title) . '.webp';
        $file->move(public_path('uploads/gallery/'), $name);

        $filepath = public_path('uploads/gallery/' . $name);
        Image::make($filepath)
            ->fit(
                config('images.gallery.thumb_width'),
                config('images.gallery.thumb_height')
            )
            ->save($filepath);

        $file_path_webp = public_path('uploads/gallery/webp/' . $name_webp);
        Image::make($filepath)->encode('webp')->save($file_path_webp);

        $model->update(['file' => $name, 'file_webp' => $name_webp]);
    }
}
