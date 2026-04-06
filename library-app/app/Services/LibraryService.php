<?php

namespace App\Services;

use Config\LibraryApi;

class LibraryService 
{
protected LibraryApi $config;

public function __construct()
{
    $this->config = config('LibraryApi');
}

    public function getBooks(array $params = []): array
    {
        $query = http_build_query($params);
$url = $this->config->baseUrl . '/books?' . $query;
        
        $client = \Config\Services::curlrequest();
        $response = $client->get($url);
        
        if ($response->getStatusCode() === 200) {
            return ['data' => json_decode($response->getBody(), true)['data'] ?? []];
        }
        
        return ['error' => 'Failed to fetch books'];
    }

    public function getBook(int $id): array
    {
        $url = $this->config->baseUrl . '/books/' . $id;
        $client = \Config\Services::curlrequest();
        $response = $client->get($url);
        
        if ($response->getStatusCode() === 200) {
            return ['data' => json_decode($response->getBody(), true)['data'] ?? null];
        }
        
        return ['error' => 'Book not found'];
    }
}
