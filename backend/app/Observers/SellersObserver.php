<?php

namespace App\Observers;

use App\Jobs\BroadCastToMicroServicesJob;
use App\Models\Seller;

class SellersObserver
{
    /**
     * Handle the Sellers "created" event.
     *
     * @param \App\Models\Seller $seller
     * @return void
     */
    public function created(Seller $seller)
    {
        $this->report($seller, 'created');
    }

    /**
     * Handle the Sellers "updated" event.
     *
     * @param \App\Models\Seller $seller
     * @return void
     */
    public function updated(Seller $seller)
    {
        $this->report($seller, 'updated');
    }

    /**
     * Handle the Sellers "deleted" event.
     *
     * @param \App\Models\Seller $seller
     * @return void
     */
    public function deleted(Seller $seller)
    {
        $this->report($seller, 'deleted');
    }

    /**
     * Handle the Sellers "restored" event.
     *
     * @param \App\Models\Seller $seller
     * @return void
     */
    public function restored(Seller $seller)
    {
        $this->report($seller, 'restored');
    }

    /**
     * Handle the Sellers "force deleted" event.
     *
     * @param \App\Models\Seller $seller
     * @return void
     */
    public function forceDeleted(Seller $seller)
    {
        $this->report($seller, 'forceDeleted');
    }

    /**
     * Handle the Sellers "restored" event.
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param string $event
     * @return void
     */
    public function report($model, $event)
    {
        BroadCastToMicroServicesJob::dispatch($model->toArray(), $event);
    }

}
