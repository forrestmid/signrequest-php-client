<?php

/**
 * DocumentsSearchApi
 * PHP version 5
 *
 * @category Class
 * @package  SignRequest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SignRequest API
 *
 * API for SignRequest.com
 * OpenAPI spec version: v1
 * Contact: tech-support@signrequest.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.11
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SignRequest\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use SignRequest\ApiException;
use SignRequest\Configuration;
use SignRequest\HeaderSelector;
use SignRequest\ObjectSerializer;

/**
 * DocumentsSearchApi Class Doc Comment
 *
 * @category Class
 * @package  SignRequest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentsSearchApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation documentsSearchList
     *
     * Search documents
     *
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  int $limit Number of results to return per page. (optional)
     * @param  string $q Normal search query (optional)
     * @param  string $autocomplete Partial search query (optional)
     * @param  string $name Document name (optional)
     * @param  string $subdomain subdomain (optional)
     * @param  string $signer_emails Email needed to sign/approve (optional)
     * @param  string $status &#x60;co&#x60;: converting, &#x60;ne&#x60;: new, &#x60;se&#x60;: sent, &#x60;vi&#x60;: viewed, &#x60;si&#x60;: signed, &#x60;do&#x60;: downloaded, &#x60;sd&#x60;: signed and downloaded, &#x60;ca&#x60;: cancelled, &#x60;de&#x60;: declined, &#x60;ec&#x60;: error converting, &#x60;es&#x60;: error sending, &#x60;xp&#x60;: expired (optional)
     * @param  string $who &#x60;m&#x60;: only me, &#x60;mo&#x60;: me and others, &#x60;o&#x60;: only others (optional)
     * @param  string $format Export format, can be &#x60;json&#x60; (default), &#x60;csv&#x60;, or &#x60;xls&#x60; (optional)
     * @param  float $signer_data Set to &#x60;1&#x60; to export with each signer on a separate row (optional)
     *
     * @throws \SignRequest\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SignRequest\Model\InlineResponse2002
     */
    public function documentsSearchList($page = null, $limit = null, $q = null, $autocomplete = null, $name = null, $subdomain = null, $signer_emails = null, $status = null, $who = null, $format = null, $signer_data = null)
    {
        list($response) = $this->documentsSearchListWithHttpInfo($page, $limit, $q, $autocomplete, $name, $subdomain, $signer_emails, $status, $who, $format, $signer_data);
        return $response;
    }

    /**
     * Operation documentsSearchListWithHttpInfo
     *
     * Search documents
     *
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  int $limit Number of results to return per page. (optional)
     * @param  string $q Normal search query (optional)
     * @param  string $autocomplete Partial search query (optional)
     * @param  string $name Document name (optional)
     * @param  string $subdomain (optional)
     * @param  string $signer_emails Email needed to sign/approve (optional)
     * @param  string $status &#x60;co&#x60;: converting, &#x60;ne&#x60;: new, &#x60;se&#x60;: sent, &#x60;vi&#x60;: viewed, &#x60;si&#x60;: signed, &#x60;do&#x60;: downloaded, &#x60;sd&#x60;: signed and downloaded, &#x60;ca&#x60;: cancelled, &#x60;de&#x60;: declined, &#x60;ec&#x60;: error converting, &#x60;es&#x60;: error sending, &#x60;xp&#x60;: expired (optional)
     * @param  string $who &#x60;m&#x60;: only me, &#x60;mo&#x60;: me and others, &#x60;o&#x60;: only others (optional)
     * @param  string $format Export format, can be &#x60;json&#x60; (default), &#x60;csv&#x60;, or &#x60;xls&#x60; (optional)
     * @param  float $signer_data Set to &#x60;1&#x60; to export with each signer on a separate row (optional)
     *
     * @throws \SignRequest\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SignRequest\Model\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     */
    public function documentsSearchListWithHttpInfo($page = null, $limit = null, $q = null, $autocomplete = null, $name = null, $subdomain = null, $signer_emails = null, $status = null, $who = null, $format = null, $signer_data = null)
    {
        $returnType = '\SignRequest\Model\InlineResponse2002';
        $request = $this->documentsSearchListRequest($page, $limit, $q, $autocomplete, $name, $subdomain, $signer_emails, $status, $who, $format, $signer_data);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SignRequest\Model\InlineResponse2002',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation documentsSearchListAsync
     *
     * Search documents
     *
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  int $limit Number of results to return per page. (optional)
     * @param  string $q Normal search query (optional)
     * @param  string $autocomplete Partial search query (optional)
     * @param  string $name Document name (optional)
     * @param  string $subdomain (optional)
     * @param  string $signer_emails Email needed to sign/approve (optional)
     * @param  string $status &#x60;co&#x60;: converting, &#x60;ne&#x60;: new, &#x60;se&#x60;: sent, &#x60;vi&#x60;: viewed, &#x60;si&#x60;: signed, &#x60;do&#x60;: downloaded, &#x60;sd&#x60;: signed and downloaded, &#x60;ca&#x60;: cancelled, &#x60;de&#x60;: declined, &#x60;ec&#x60;: error converting, &#x60;es&#x60;: error sending, &#x60;xp&#x60;: expired (optional)
     * @param  string $who &#x60;m&#x60;: only me, &#x60;mo&#x60;: me and others, &#x60;o&#x60;: only others (optional)
     * @param  string $format Export format, can be &#x60;json&#x60; (default), &#x60;csv&#x60;, or &#x60;xls&#x60; (optional)
     * @param  float $signer_data Set to &#x60;1&#x60; to export with each signer on a separate row (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function documentsSearchListAsync($page = null, $limit = null, $q = null, $autocomplete = null, $name = null, $subdomain = null, $signer_emails = null, $status = null, $who = null, $format = null, $signer_data = null)
    {
        return $this->documentsSearchListAsyncWithHttpInfo($page, $limit, $q, $autocomplete, $name, $subdomain, $signer_emails, $status, $who, $format, $signer_data)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation documentsSearchListAsyncWithHttpInfo
     *
     * Search documents
     *
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  int $limit Number of results to return per page. (optional)
     * @param  string $q Normal search query (optional)
     * @param  string $autocomplete Partial search query (optional)
     * @param  string $name Document name (optional)
     * @param  string $subdomain (optional)
     * @param  string $signer_emails Email needed to sign/approve (optional)
     * @param  string $status &#x60;co&#x60;: converting, &#x60;ne&#x60;: new, &#x60;se&#x60;: sent, &#x60;vi&#x60;: viewed, &#x60;si&#x60;: signed, &#x60;do&#x60;: downloaded, &#x60;sd&#x60;: signed and downloaded, &#x60;ca&#x60;: cancelled, &#x60;de&#x60;: declined, &#x60;ec&#x60;: error converting, &#x60;es&#x60;: error sending, &#x60;xp&#x60;: expired (optional)
     * @param  string $who &#x60;m&#x60;: only me, &#x60;mo&#x60;: me and others, &#x60;o&#x60;: only others (optional)
     * @param  string $format Export format, can be &#x60;json&#x60; (default), &#x60;csv&#x60;, or &#x60;xls&#x60; (optional)
     * @param  float $signer_data Set to &#x60;1&#x60; to export with each signer on a separate row (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function documentsSearchListAsyncWithHttpInfo($page = null, $limit = null, $q = null, $autocomplete = null, $name = null, $subdomain = null, $signer_emails = null, $status = null, $who = null, $format = null, $signer_data = null)
    {
        $returnType = '\SignRequest\Model\InlineResponse2002';
        $request = $this->documentsSearchListRequest($page, $limit, $q, $autocomplete, $name, $subdomain, $signer_emails, $status, $who, $format, $signer_data);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'documentsSearchList'
     *
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  int $limit Number of results to return per page. (optional)
     * @param  string $q Normal search query (optional)
     * @param  string $autocomplete Partial search query (optional)
     * @param  string $name Document name (optional)
     * @param  string $subdomain (optional)
     * @param  string $signer_emails Email needed to sign/approve (optional)
     * @param  string $status &#x60;co&#x60;: converting, &#x60;ne&#x60;: new, &#x60;se&#x60;: sent, &#x60;vi&#x60;: viewed, &#x60;si&#x60;: signed, &#x60;do&#x60;: downloaded, &#x60;sd&#x60;: signed and downloaded, &#x60;ca&#x60;: cancelled, &#x60;de&#x60;: declined, &#x60;ec&#x60;: error converting, &#x60;es&#x60;: error sending, &#x60;xp&#x60;: expired (optional)
     * @param  string $who &#x60;m&#x60;: only me, &#x60;mo&#x60;: me and others, &#x60;o&#x60;: only others (optional)
     * @param  string $format Export format, can be &#x60;json&#x60; (default), &#x60;csv&#x60;, or &#x60;xls&#x60; (optional)
     * @param  float $signer_data Set to &#x60;1&#x60; to export with each signer on a separate row (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function documentsSearchListRequest($page = null, $limit = null, $q = null, $autocomplete = null, $name = null, $subdomain = null, $signer_emails = null, $status = null, $who = null, $format = null, $signer_data = null)
    {

        $resourcePath = '/documents-search/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($q !== null) {
            $queryParams['q'] = ObjectSerializer::toQueryValue($q);
        }
        // query params
        if ($autocomplete !== null) {
            $queryParams['autocomplete'] = ObjectSerializer::toQueryValue($autocomplete);
        }
        // query params
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name);
        }
        // query params
        if ($subdomain !== null) {
            $queryParams['subdomain'] = ObjectSerializer::toQueryValue($subdomain);
        }
        // query params
        if ($signer_emails !== null) {
            $queryParams['signer_emails'] = ObjectSerializer::toQueryValue($signer_emails);
        }
        // query params
        if ($status !== null) {
            $queryParams['status'] = ObjectSerializer::toQueryValue($status);
        }
        // query params
        if ($who !== null) {
            $queryParams['who'] = ObjectSerializer::toQueryValue($who);
        }
        // query params
        if ($format !== null) {
            $queryParams['format'] = ObjectSerializer::toQueryValue($format);
        }
        // query params
        if ($signer_data !== null) {
            $queryParams['signer_data'] = ObjectSerializer::toQueryValue($signer_data);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/csv', 'application/vnd.ms-excel']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/csv', 'application/vnd.ms-excel'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;

            if ($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if (is_array($httpBody)) {
                    $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = http_build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = http_build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
