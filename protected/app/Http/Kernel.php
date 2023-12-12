<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \App\Http\Middleware\TrustProxies::class,
        \App\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:60,1',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
        'superadmin'=>\App\Http\Middleware\Superadmin::class,
        'business-division'=>\App\Http\Middleware\BusinessDivision::class,
        'ao'=>\App\Http\Middleware\AccountOfficer::class,
        'ao-dep-head'=>\App\Http\Middleware\AccountDepHead::class,
        'business-div-head'=>\App\Http\Middleware\BusinessDivisionHead::class,
        'legal-section-head'=>\App\Http\Middleware\LegalSectionHead::class,
        'legal-div-head'=>\App\Http\Middleware\LegalDivHead::class,
        'compliance-section-head'=>\App\Http\Middleware\ComplianceSectionHead::class,
        'compliance-departemen-head'=>\App\Http\Middleware\ComplianceDepartemenHead::class,
        'aml-section-head'=>\App\Http\Middleware\AmlSectionHead::class,
        'aml-departemen-head'=>\App\Http\Middleware\AmlDepartemenHead::class,
        'compliance-division-head'=>\App\Http\Middleware\ComplianceDivisionHead::class,
        'cad-section-head'=>\App\Http\Middleware\CadSectionHead::class,
        'cad-div-head'=>\App\Http\Middleware\CadDivisionHead::class,
        'crrd-section-head'=>\App\Http\Middleware\CrrdSectionHead::class,
        'crrd-dep-head'=>\App\Http\Middleware\CrrdDepHead::class,
        'crrd-dep-div-head'=>\App\Http\Middleware\CrrdDepDivHead::class,
        'crrd-div-head'=>\App\Http\Middleware\CrrdDivHead::class,
        'user_proses'=>\App\Http\Middleware\UserWorkflow::class,
    ];

    /**
     * The priority-sorted list of middleware.
     *
     * This forces non-global middleware to always be in the given order.
     *
     * @var array
     */
    protected $middlewarePriority = [
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \App\Http\Middleware\Authenticate::class,
        \Illuminate\Routing\Middleware\ThrottleRequests::class,
        \Illuminate\Session\Middleware\AuthenticateSession::class,
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
        \Illuminate\Auth\Middleware\Authorize::class,
    ];
}
