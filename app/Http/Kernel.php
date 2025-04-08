<?php
namespace App\Http;

use Symfony\Component\HttpKernel\HttpKernel;
use TNM\Footprints\Http\Middleware\WriteFootprints;

class Kernel extends HttpKernel
{
    /**
     * @var array<int, class-string|string> $middleware
     */
    protected $middleware = [
        WriteFootprints::class,
    ];
}