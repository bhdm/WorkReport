<?php
/**
 * Пример фильтра.
 * Придумать правильное примерение
 */
namespace AppBundle;

use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Query\Filter\SQLFilter;

class ProjectFilter extends SQLFilter{

    public function addFilterConstraint(ClassMetadata $metadata, $table){
        if ($this->isSoftDeletable($metadata->rootEntityName)) {
            return $table.".enabled = 1";
        }
        return '';
    }

//    private function isSoftDeletable($entity)
//    {
//        return array_key_exists('Mitch\LaravelDoctrine\Traits\SoftDeletes', class_uses($entity));
//    }
}