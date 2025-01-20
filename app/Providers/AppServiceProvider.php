<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config; 
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $encryptedPassword = config('mail.mailers.smtp.password'); // كلمة المرور المشفرة من الإعدادات
        $decryptedPassword = base64_decode($encryptedPassword); // فك التشفير
    
        // تحديث إعدادات SMTP
        Config::set('mail.mailers.smtp.password', $decryptedPassword);
    }
}
