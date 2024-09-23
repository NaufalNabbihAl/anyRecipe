<?php

namespace App\Services;

use Google_Client;
use Google\Service\Webmasters as Google_Service_Webmasters;
use Google\Service\Webmasters\SearchAnalyticsQueryRequest as Google_Service_Webmasters_SearchAnalyticsQueryRequest;

class GoogleSearchConsoleService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Google_Client();
        $this->client->setAuthConfig(storage_path('app/google/client_secret.json')); // Path to your service account credentials
        $this->client->setScopes([
            Google_Service_Webmasters::WEBMASTERS_READONLY
        ]);
        $this->client->setSubject('admin-local@localproject-435617.iam.gserviceaccount.com'); // Service account email
    }

    public function getService()
    {
        return new Google_Service_Webmasters($this->client);
    }

    public function listSites()
    {
        $service = $this->getService();
        return $service->sites->listSites();
    }

    public function getSearchAnalytics($siteUrl, $startDate, $endDate)
    {
        $service = $this->getService();
        $this->client->setScopes([
            'https://www.googleapis.com/auth/webmasters'
        ]);
        $request = new \Google_Service_Webmasters_SearchAnalyticsQueryRequest();
        $request->setStartDate($startDate);
        $request->setEndDate($endDate);
        $request->setDimensions(['query']);


        return $service->searchanalytics->query($siteUrl, $request);
    }

    public function addSite($siteUrl)
    {
        $service = $this->getService();
        $this->client->setScopes([
            'https://www.googleapis.com/auth/webmasters'
        ]);
        try {
            $service->sites->add($siteUrl);
            return "Site added successfully: " . $siteUrl;
        } catch (\Google_Service_Exception $e) {
            return "Error adding site: " . $e->getMessage() . " - Details: " . json_encode($e->getErrors());
        } catch (\Exception $e) {
            return "Unexpected error occurred: " . $e->getMessage();
        }
    }
}
