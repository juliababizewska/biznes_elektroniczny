<?php
/**
 * NOTICE OF LICENSE
 *
 * @author    Klarna Bank AB www.klarna.com
 * @copyright Copyright (c) permanent, Klarna Bank AB
 * @license   ISC
 *
 * @see       /LICENSE
 *
 * International Registered Trademark & Property of Klarna Bank AB
 */

namespace KlarnaPayment\Module\Api\Apis;

use KlarnaPayment\Module\Api\ApiClient;
use KlarnaPayment\Module\Api\Exception\ApiException;
use KlarnaPayment\Module\Api\Helper\ApiHelper;
use KlarnaPayment\Module\Api\Http\ApiResponse;
use KlarnaPayment\Module\Api\Http\HttpContext;
use KlarnaPayment\Module\Api\Http\HttpMethod;
use KlarnaPayment\Module\Api\Http\HttpRequest;
use KlarnaPayment\Module\Api\Http\HttpResponse;
use KlarnaPayment\Module\Api\Requests\CreatePaymentSessionRequest;
use KlarnaPayment\Module\Api\Requests\RetrievePaymentSessionRequest;
use KlarnaPayment\Module\Api\Requests\UpdatePaymentSessionRequest;
use KlarnaPayment\Module\Api\Responses\CreatePaymentSessionResponse;
use KlarnaPayment\Module\Api\Responses\RetrievePaymentSessionResponse;
use KlarnaPayment\Module\Core\Merchant\Exception\CouldNotLogin;
use Unirest\Request;

if (!defined('_PS_VERSION_')) {
    exit;
}

class SessionApi extends BaseApi
{
    private const WRAP_SINGULAR_KEY = 'session';

    private $apiClient;

    public function __construct(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    /**
     * @throws ApiException
     */
    public function createPaymentSession(CreatePaymentSessionRequest $body): ApiResponse
    {
        $queryParameters = '/payments/v1/sessions';

        $queryUrl = ApiHelper::cleanUrl($this->apiClient->getBaseUrl() . $queryParameters);

        $headers = [
            'User-Agent' => $this->apiClient->getUserAgent(),
            'Authorization' => 'Basic ' . $this->apiClient->getApiKey(),
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];

        $headers = ApiHelper::mergeHeaders($headers, $this->apiClient->getAdditionalHeaders());

        $encodedBody = ApiHelper::jsonEncode($body->getSession());

        $request = new Request();
        $request->timeout($this->apiClient->getTimeout());

        $httpRequest = new HttpRequest(HttpMethod::POST, $headers, $queryUrl, $encodedBody);

        // and invoke the API call request to fetch the response
        try {
            $response = $request->post($queryUrl, $headers, $encodedBody);
        } catch (\Unirest\Exception $exception) {
            throw new ApiException(sprintf('Api exception. Exception message: (%s). Exception code: (%s)', $exception->getMessage(), (int) $exception->getCode()));
        }

        $httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $httpContext = new HttpContext($httpRequest, $httpResponse);

        $mapper = $this->getJsonMapper();

        // NOTE: For logging in multiple regions (401 - invalid credentials)
        if ($body->getSession()->getIsDummy() && $httpResponse->getStatusCode() === 401) {
            throw new CouldNotLogin('Invalid credentials', $httpResponse->getStatusCode());
        }

        if (!$this->apiClient->isValidResponse($httpResponse)) {
            return ApiResponse::createFromContext(null, $httpContext);
        }

        $deserializedResponse = $mapper->mapClass($response->body, CreatePaymentSessionResponse::class);

        return ApiResponse::createFromContext($deserializedResponse, $httpContext);
    }

    /**
     * @throws ApiException
     */
    public function updatePaymentSession(UpdatePaymentSessionRequest $body): ApiResponse
    {
        $queryParameters = '/payments/v1/sessions/{session_id}';

        $queryParameters = ApiHelper::appendUrlWithTemplateParameters($queryParameters, [
            'session_id' => $body->getSessionId(),
        ]);

        $queryUrl = ApiHelper::cleanUrl($this->apiClient->getBaseUrl() . $queryParameters);

        $headers = [
            'User-Agent' => $this->apiClient->getUserAgent(),
            'Authorization' => 'Basic ' . $this->apiClient->getApiKey(),
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];

        $headers = ApiHelper::mergeHeaders($headers, $this->apiClient->getAdditionalHeaders());

        $encodedBody = ApiHelper::jsonEncode($body->getSession());

        $request = new Request();
        $request->timeout($this->apiClient->getTimeout());

        $httpRequest = new HttpRequest(HttpMethod::POST, $headers, $queryUrl, $encodedBody);

        // and invoke the API call request to fetch the response
        try {
            $response = $request->post($queryUrl, $headers, $encodedBody);
        } catch (\Unirest\Exception $exception) {
            throw new ApiException(sprintf('Api exception. Exception message: (%s). Exception code: (%s)', $exception->getMessage(), (int) $exception->getCode()));
        }

        $httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $httpContext = new HttpContext($httpRequest, $httpResponse);

        if (!$this->apiClient->isValidResponse($httpResponse)) {
            return ApiResponse::createFromContext(null, $httpContext);
        }

        return ApiResponse::createFromContext(null, $httpContext);
    }

    /**
     * @throws ApiException
     */
    public function retrievePaymentSession(RetrievePaymentSessionRequest $body): ApiResponse
    {
        $queryParameters = '/payments/v1/sessions/{session_id}';

        $queryParameters = ApiHelper::appendUrlWithTemplateParameters($queryParameters, [
            'session_id' => $body->getSessionId(),
        ]);

        $queryUrl = ApiHelper::cleanUrl($this->apiClient->getBaseUrl() . $queryParameters);

        $headers = [
            'User-Agent' => $this->apiClient->getUserAgent(),
            'Authorization' => 'Basic ' . $this->apiClient->getApiKey(),
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];

        $headers = ApiHelper::mergeHeaders($headers, $this->apiClient->getAdditionalHeaders());

        $request = new Request();
        $request->timeout($this->apiClient->getTimeout());

        $httpRequest = new HttpRequest(HttpMethod::GET, $headers, $queryUrl);

        // and invoke the API call request to fetch the response
        try {
            $response = $request->get($queryUrl, $headers);
        } catch (\Unirest\Exception $exception) {
            throw new ApiException(sprintf('Api exception. Exception message: (%s). Exception code: (%s)', $exception->getMessage(), (int) $exception->getCode()));
        }

        $httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $httpContext = new HttpContext($httpRequest, $httpResponse);

        if (!$this->apiClient->isValidResponse($httpResponse)) {
            return ApiResponse::createFromContext(null, $httpContext);
        }

        // NOTE: for some reason it's not returned by api and is required for upcoming requests.
        $response->body->session_id = $body->getSessionId();

        if (!isset($response->body->{self::WRAP_SINGULAR_KEY})) {
            $body = new \stdClass();
            $body->{self::WRAP_SINGULAR_KEY} = $response->body;

            $response->body = $body;
        }

        $mapper = $this->getJsonMapper();

        $deserializedResponse = $mapper->mapClass($response->body, RetrievePaymentSessionResponse::class);

        return ApiResponse::createFromContext($deserializedResponse, $httpContext);
    }
}
