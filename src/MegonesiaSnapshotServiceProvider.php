<?php

namespace Yogastama\megonesia_snapshot;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class MegonesiaSnapshotServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'megonesia_snapshot');
        Blade::directive('camera_attach', function () {
            return "<div id='megonesia_monitoring_camera'></div>";
        });
        Blade::directive('megonesia_jhuckaby_snapshot_js', function () {
            return view('megonesia_snapshot::components.webcam');
        });
    }
    public function register()
    {
    }
}
