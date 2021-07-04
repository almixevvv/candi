<?php
namespace App\Traits;

use ReflectionClass;
use App\Models\Metadata;

trait HasMetadata 
{
    public function metadata() 
    {
        return $this->hasOne(Metadata::class, "model_id", "id")->where('model_name', (new ReflectionClass($this))->getName());
    }

    public function createMetadata(array $data): Metadata
    {
        $modelName = (new ReflectionClass($this))->getName();
        return Metadata::create([
            "model_name" => $modelName,
            "model_id" => $this->id,
            "title" => array_key_exists("title", $data) ? $data['title'] : "",
            "description" => array_key_exists("description", $data) ? $data['description'] : "",
            "robots" => array_key_exists("robots", $data) ? $data['robots'] : "",
            "keywords" => array_key_exists("keywords", $data) ? $data['keywords'] : "",
            "canonical" => array_key_exists("canonical", $data) ? $data['canonical'] : "",
        ]);
    }

    public function updateMetadata(array $data): Metadata
    {
        $metadata = $this->metadata;
        $metadata->title = array_key_exists("title", $data) ? $data['title'] : $metadata->title;
        $metadata->description = array_key_exists("description", $data) ? $data['description'] : $metadata->description;
        $metadata->robots = array_key_exists("robots", $data) ? $data['robots'] : $metadata->robots;
        $metadata->keywords = array_key_exists("keywords", $data) ? $data['keywords'] : $metadata->keywords;
        $metadata->canonical = array_key_exists("canonical", $data) ? $data['canonical'] : $metadata->canonical;
        $metadata->save();

        return $metadata;
    }

    public function createOrUpdateMetadata($data) 
    {
        if ($this->metadata) {
            return $this->updateMetadata($data);
        } else {
            return $this->createMetadata($data);
        }
    }
}
