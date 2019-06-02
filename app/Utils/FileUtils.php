<?php

namespace App\Utils;


class FileUtils
{

    public function upload($file, $folder)
    {

        $filename   = time() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs($folder, $filename);
        return 'storage/' . $path;
    }
}
