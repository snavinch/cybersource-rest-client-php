<?php
/**
 * VoidApi
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Flex API
 *
 * Simple PAN tokenization service
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Api;

use \CyberSource\ApiClient;
use \CyberSource\ApiException;
use \CyberSource\Configuration;
use \CyberSource\ObjectSerializer;

/**
 * VoidApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VoidApi
{
    /**
     * API Client
     *
     * @var \CyberSource\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \CyberSource\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\CyberSource\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \CyberSource\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \CyberSource\ApiClient $apiClient set the API client
     *
     * @return VoidApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getVoid
     *
     * Retrieve A Void
     *
     * @param string $id The void ID returned from a previous void request. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return \CyberSource\Model\InlineResponse2015
     */
    public function getVoid($id)
    {
        list($response) = $this->getVoidWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getVoidWithHttpInfo
     *
     * Retrieve A Void
     *
     * @param string $id The void ID returned from a previous void request. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2015, HTTP status code, HTTP response headers (array of strings)
     */
    public function getVoidWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getVoid');
        }
        // parse inputs
        $resourcePath = "/pts/v2/voids/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\InlineResponse2015',
                '/pts/v2/voids/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\InlineResponse2015', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse2015', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation voidCapture
     *
     * Void a Capture
     *
     * @param \CyberSource\Model\VoidCaptureRequest $voidCaptureRequest  (required)
     * @param string $id The capture ID returned from a previous capture request. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return \CyberSource\Model\InlineResponse2015
     */
    public function voidCapture($voidCaptureRequest, $id)
    {
        list($response) = $this->voidCaptureWithHttpInfo($voidCaptureRequest, $id);
        return $response;
    }

    /**
     * Operation voidCaptureWithHttpInfo
     *
     * Void a Capture
     *
     * @param \CyberSource\Model\VoidCaptureRequest $voidCaptureRequest  (required)
     * @param string $id The capture ID returned from a previous capture request. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2015, HTTP status code, HTTP response headers (array of strings)
     */
    public function voidCaptureWithHttpInfo($voidCaptureRequest, $id)
    {
        // verify the required parameter 'voidCaptureRequest' is set
        if ($voidCaptureRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $voidCaptureRequest when calling voidCapture');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling voidCapture');
        }
        // parse inputs
        $resourcePath = "/pts/v2/captures/{id}/voids";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($voidCaptureRequest)) {
            $_tempBody = $voidCaptureRequest;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\InlineResponse2015',
                '/pts/v2/captures/{id}/voids'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\InlineResponse2015', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse2015', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4004', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse502', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation voidCredit
     *
     * Void a Credit
     *
     * @param \CyberSource\Model\VoidCreditRequest $voidCreditRequest  (required)
     * @param string $id The credit ID returned from a previous credit request. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return \CyberSource\Model\InlineResponse2015
     */
    public function voidCredit($voidCreditRequest, $id)
    {
        list($response) = $this->voidCreditWithHttpInfo($voidCreditRequest, $id);
        return $response;
    }

    /**
     * Operation voidCreditWithHttpInfo
     *
     * Void a Credit
     *
     * @param \CyberSource\Model\VoidCreditRequest $voidCreditRequest  (required)
     * @param string $id The credit ID returned from a previous credit request. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2015, HTTP status code, HTTP response headers (array of strings)
     */
    public function voidCreditWithHttpInfo($voidCreditRequest, $id)
    {
        // verify the required parameter 'voidCreditRequest' is set
        if ($voidCreditRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $voidCreditRequest when calling voidCredit');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling voidCredit');
        }
        // parse inputs
        $resourcePath = "/pts/v2/credits/{id}/voids";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($voidCreditRequest)) {
            $_tempBody = $voidCreditRequest;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\InlineResponse2015',
                '/pts/v2/credits/{id}/voids'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\InlineResponse2015', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse2015', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4004', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse502', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation voidPayment
     *
     * Void a Payment
     *
     * @param \CyberSource\Model\VoidPaymentRequest $voidPaymentRequest  (required)
     * @param string $id The payment ID returned from a previous payment request. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return \CyberSource\Model\InlineResponse2015
     */
    public function voidPayment($voidPaymentRequest, $id)
    {
        list($response) = $this->voidPaymentWithHttpInfo($voidPaymentRequest, $id);
        return $response;
    }

    /**
     * Operation voidPaymentWithHttpInfo
     *
     * Void a Payment
     *
     * @param \CyberSource\Model\VoidPaymentRequest $voidPaymentRequest  (required)
     * @param string $id The payment ID returned from a previous payment request. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2015, HTTP status code, HTTP response headers (array of strings)
     */
    public function voidPaymentWithHttpInfo($voidPaymentRequest, $id)
    {
        // verify the required parameter 'voidPaymentRequest' is set
        if ($voidPaymentRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $voidPaymentRequest when calling voidPayment');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling voidPayment');
        }
        // parse inputs
        $resourcePath = "/pts/v2/payments/{id}/voids";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($voidPaymentRequest)) {
            $_tempBody = $voidPaymentRequest;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\InlineResponse2015',
                '/pts/v2/payments/{id}/voids'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\InlineResponse2015', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse2015', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4004', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse502', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation voidRefund
     *
     * Void a Refund
     *
     * @param \CyberSource\Model\VoidRefundRequest $voidRefundRequest  (required)
     * @param string $id The refund ID returned from a previous refund request. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return \CyberSource\Model\InlineResponse2015
     */
    public function voidRefund($voidRefundRequest, $id)
    {
        list($response) = $this->voidRefundWithHttpInfo($voidRefundRequest, $id);
        return $response;
    }

    /**
     * Operation voidRefundWithHttpInfo
     *
     * Void a Refund
     *
     * @param \CyberSource\Model\VoidRefundRequest $voidRefundRequest  (required)
     * @param string $id The refund ID returned from a previous refund request. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2015, HTTP status code, HTTP response headers (array of strings)
     */
    public function voidRefundWithHttpInfo($voidRefundRequest, $id)
    {
        // verify the required parameter 'voidRefundRequest' is set
        if ($voidRefundRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $voidRefundRequest when calling voidRefund');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling voidRefund');
        }
        // parse inputs
        $resourcePath = "/pts/v2/refunds/{id}/voids";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($voidRefundRequest)) {
            $_tempBody = $voidRefundRequest;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\InlineResponse2015',
                '/pts/v2/refunds/{id}/voids'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\InlineResponse2015', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse2015', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4004', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse502', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}