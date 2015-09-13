<?php

namespace Rainforest;

class Rainforest
{

    // @var string The base URL for the Rainforest API.
    public static $apiBase = "https://app.rainforestqa.com/api/1";

    // @var string The staging URL for the Rainforest API.
    public static $apiStaging = "https://app.rnfrst.com/api/1/";

    // @var string|null The version of the Rainforest API to use for requests.
    public static $apiVersion = "v1";

    // @var string The support email of the Rainforest API to use for requests.
    public static $supportEmail = "help@rainforestqa.com";

    // @var string|null The version of the Rainforest API to use for requests.
    public static $docsUrl = "https://docs.rainforestqa.com";



    public static $apiKey = null;


    const VERSION = '0.0.1';

    /**
     * @return string The API version used for requests. null if we're using the
     *    latest version.
     */
    public static function getApiVersion()
    {
        return self::$apiVersion;
    }

    /**
     * @param string $apiVersion The API version to use for requests.
     */
    public static function setApiVersion($apiVersion)
    {
        self::$apiVersion = $apiVersion;
    }

    /**
     * @return string The API Base used for requests.
     */
    public static function getApiBase()
    {
        return self::$apiBase;
    }

    /**
     * @return string The Auth Header used for requests.
     */
    public static function getAuthHeader()
    {
        return self::$authHeader;
    }

    /**
     * @return ApiClient The default Api Client
     */
    public static function defaultClient()
    {
        return new DefaultClient(Rainforest::$apiKey);
    }

}
