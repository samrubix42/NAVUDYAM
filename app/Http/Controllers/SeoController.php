<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SeoController extends Controller
{
    /**
     * Named routes of the public pages that search engines may index.
     *
     * @var list<string>
     */
    private const INDEXABLE_ROUTES = [
        'home',
        'about',
        'initiatives',
        'events',
        'stories',
        'contact',
    ];

    /**
     * Serve an XML sitemap listing every public page.
     */
    public function sitemap(): Response
    {
        $urls = array_map(fn (string $routeName): string => route($routeName), self::INDEXABLE_ROUTES);

        return response()
            ->view('seo.sitemap', ['urls' => $urls])
            ->header('Content-Type', 'application/xml; charset=UTF-8');
    }
}
