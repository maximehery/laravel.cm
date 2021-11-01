<?php

namespace App\Traits;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait RecordsActivity
{
    protected static function bootRecordsActivity()
    {
        if (auth()->guest()) {
            return;
        }

        foreach (static::getActivitiesToRecord() as $event) {
            static::$event(function ($model) use ($event) {
                $model->recordActivity($event);
            });
        }

        static::deleting(function ($model) {
            $model->activity()->delete();
        });
    }

    protected static function getActivitiesToRecord(): array
    {
        return ['created', 'updated'];
    }

    protected function recordActivity($event, bool $useDefaultEvent = true, array $data = [])
    {
        $this->activity()->create([
            'user_id' => auth()->id(),
            'type' => $useDefaultEvent ? $this->getActivityType($event) : $event,
            'data' => $data,
        ]);
    }

    public function activity(): MorphMany
    {
        return $this->morphMany(Activity::class, 'subject');
    }
}
