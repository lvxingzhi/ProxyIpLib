<?php

namespace App\Console;

use App\Console\Commands\ClearCacheKeyEveryDay;
use App\Console\Commands\GrabProxyIp;
use App\Console\Commands\HotIpByHours;
use App\Console\Commands\ProxyIpLocation;
use App\Console\Commands\TimerClearProxyIp;
use Illuminate\Console\Scheduling\Schedule;
use Laravel\Lumen\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
        GrabProxyIp::class,
        //
        TimerClearProxyIp::class,
        //
        ProxyIpLocation::class,
        //
        HotIpByHours::class,
        //
        ClearCacheKeyEveryDay::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //
        $schedule->command('command:timer-clear-proxy-ip')->everyMinute()->withoutOverlapping()->runInBackground();
        $schedule->command('command:proxy-ip-location')->everyMinute()->withoutOverlapping()->runInBackground();
        $schedule->command('command:grab-proxy-ip kuidaili')->everyTenMinutes()->withoutOverlapping()->runInBackground();
        $schedule->command('command:grab-proxy-ip ip3366')->everyTenMinutes()->withoutOverlapping()->runInBackground();
        $schedule->command('command:grab-proxy-ip 89ip')->everyTenMinutes()->withoutOverlapping()->runInBackground();
        $schedule->command('command:grab-proxy-ip xila')->everyTenMinutes()->withoutOverlapping()->runInBackground();
        $schedule->command('command:grab-proxy-ip emailtry')->everyTenMinutes()->withoutOverlapping()->runInBackground();
        $schedule->command('command:grab-proxy-ip qinghua')->everyTenMinutes()->withoutOverlapping()->runInBackground();
        $schedule->command('command:grab-proxy-ip xsdaili')->everyTenMinutes()->withoutOverlapping()->runInBackground();
        $schedule->command('command:grab-proxy-ip kxdaili')->everyTenMinutes()->withoutOverlapping()->runInBackground();
        $schedule->command('command:grab-proxy-ip nima')->everyTenMinutes()->withoutOverlapping()->runInBackground();
        $schedule->command('command:grab-proxy-ip super')->everyTenMinutes()->withoutOverlapping()->runInBackground();
        $schedule->command('command:clear-cache-key-every-day')->dailyAt("20:00")->withoutOverlapping()->runInBackground();
        $schedule->command('command:hot-ip-by-hours')->hourly();
    }
}
