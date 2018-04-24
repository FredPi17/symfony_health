<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 24/04/18
 * Time: 11:42
 */

namespace AppBundle\Uploader;


class FileUploader
{
    private $targetDirectory;

    public function __construct($targetDirectory)
    {
        $this->targetDirectory = $targetDirectory;
    }

    public function upload(UploadedFile $file)
    {
        $fileName = md5(uniqid()).'.'.$file->guessExtension();

        $file->move($this->getTargetDirectory(), $fileName);

        return $fileName;
    }
}