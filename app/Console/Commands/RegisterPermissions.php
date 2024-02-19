<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

class RegisterPermissions extends Command
{
    protected $signature = 'permission:register';
    protected $description = 'Register permissions based on routes';

    protected function generatePermissionName($route)
    {
        $permissionName = $route->getName();

        // Mengecualikan kata-kata tertentu
        $excludedKeywords = ['generated', 'password', 'two-factor', 'sanctum', 'ignition'];

        foreach ($excludedKeywords as $keyword) {
            if (str_contains($permissionName, $keyword)) {
                return null; // Return null untuk menandakan bahwa izin ini dikecualikan
            }
        }

        return $permissionName;
    }

    public function handle()
    {
        $this->info('Registering permissions...');

        $routes = Route::getRoutes();

        foreach ($routes as $route) {
            $permissionName = $this->generatePermissionName($route);

            if ($permissionName !== null) {
                Permission::firstOrCreate(['name' => $permissionName]);

                $this->info("Permission registered: $permissionName");
            } else {
                $this->info("Permission excluded for the route: " . $route->uri());
            }
        }

        $this->info('Permissions registration completed.');
    }
}
