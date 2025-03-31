<?php

namespace App\Observers;

use Illuminate\Support\Str;

use App\Models\Category;

class CategoryObserver
{
    /**
     * Handle the "creating" event.
     *
     * @param mixed $model
     * @return void
     */
    public function creating(Category $model): void
    {
        if (empty($model->path)) {
            $model->path = Str::slug($model->name);
        }
    }

    /**
     * Handle the "updating" event.
     *
     * @param mixed $model
     * @return void
     */
    public function updating(Category $model): void
    {
        if (empty($model->path)) {
            $model->path = Str::slug($model->name);
        }
    }
}
