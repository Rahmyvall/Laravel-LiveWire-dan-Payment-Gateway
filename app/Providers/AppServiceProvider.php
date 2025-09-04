<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Midtrans\Config as MidtransConfig; // Pastikan ini ditambahkan

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Jika perlu registrasi service tambahan, letakkan di sini
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Set konfigurasi Midtrans di sini, bukan di register()
        MidtransConfig::$serverKey = env('MIDTRANS_SERVER_KEY');
        MidtransConfig::$isProduction = env('MIDTRANS_IS_PRODUCTION', false);
        MidtransConfig::$isSanitized = true;
        MidtransConfig::$is3ds = true;
    }
}