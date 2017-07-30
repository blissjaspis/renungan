<?php

namespace App\Traits;

use Image, Storage;

trait UploadImage
{
	public function UploadSingleImage($content, $name, $path)
	{
		if ($content->getSize() / 1024 > 200) {
            $content = Image::make($content)->resize(640, 360);
		}

		Storage::disk('public')->put($path.$name, $content->stream());
	}
}