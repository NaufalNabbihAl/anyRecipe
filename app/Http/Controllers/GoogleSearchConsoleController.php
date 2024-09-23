<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleSearchConsoleService;

class GoogleSearchConsoleController extends Controller
{
    protected $googleSearchConsoleService;

    public function __construct(GoogleSearchConsoleService $googleSearchConsoleService)
    {
        $this->googleSearchConsoleService = $googleSearchConsoleService;
    }

    public function listSites()
    {
        $sites = $this->googleSearchConsoleService->listSites();
        return view('search-console.sites', ['sites' => $sites]);
    }

    public function getAnalytics(GoogleSearchConsoleService $searchConsoleService)
    {
        try {
            $siteUrl = 'https://anyrecipe.id';
            $startDate = '2023-10-01';
            $endDate = '2023-10-26';

            $analytics = $searchConsoleService->getSearchAnalytics($siteUrl, $startDate, $endDate);

            return view('analytics', ['analytics' => $analytics]); // Pass data to your view
        } catch (\Google_Service_Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        } catch (\Exception $e) {
            return back()->withError('An unexpected error occurred.');
        }
    }

    public function showAnalyticsChart(Request $request)
    {
        $siteUrl = 'https://anyrecipe'; 
        $startDate = $request->input('startDate', '2024-01-01'); // Default ke 1 Januari 2023
        $endDate = $request->input('endDate', '2024-12-31'); // Default ke 31 Desember 2023

        $analyticsData = $this->googleSearchConsoleService->getSearchAnalytics($siteUrl, $startDate, $endDate);

        $dates = [];
        $clicks = [];

        foreach ($analyticsData->rows as $row) {
            $dates[] = $row['keys'][0];  // Tanggal
            $clicks[] = $row['clicks'];  // Klik
        }

        return view('search-console.analytics-chart', compact('dates', 'clicks'));
    }


    public function getSearchAnalytics($siteUrl)
    {
        $startDate = '2023-01-01';
        $endDate = '2023-12-31';
        $analyticsData = $this->googleSearchConsoleService->getSearchAnalytics($siteUrl, $startDate, $endDate);
        return view('search-console.analytics', ['analyticsData' => $analyticsData]);
    }


    public function addSiteview()
    {
        return view('search-console.add-site');
    }

    public function addSite(Request $request)
    {
        $siteUrl = $request->input('siteUrl'); // Get the site URL from the request

        if (!$siteUrl) {
            return back()->withError('Please provide a site URL.');
        }

        $result = $this->googleSearchConsoleService->addSite($siteUrl);

        return back()->with('status', $result);
    }
}
