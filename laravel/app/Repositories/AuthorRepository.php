<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Author;
use Illuminate\Support\Str;

class AuthorRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias, HandleFiles;

    public function __construct(Author $model)
    {
        $this->model = $model;
    }

    // implement the prepareFieldsBeforeCreate method
    public function prepareFieldsBeforeCreate($fields)
    {
        $fields['title'] = implode(" ", [$fields['first_name'] ?? '', $fields['last_name']]);
        $fields['slug'] = Str::slug($fields['title'], '-');

        // don't forget to call the parent prepareFieldsBeforeCreate function
        return parent::prepareFieldsBeforeCreate($fields);
    }


    // implement the prepareFieldsBeforeSave method
    public function prepareFieldsBeforeSave($object, $fields)
    {
        // don't forget to call the parent prepareFieldsBeforeSave function
        return parent::prepareFieldsBeforeSave($object, $fields);
    }
}
