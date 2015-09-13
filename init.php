<?php

// Removing PHP Strict Standards from showing up on static/instance methods
// error_reporting(E_ALL ^ E_STRICT);

// Rainforest Singleton
require(dirname(__FILE__) . '/lib/Rainforest.php');

// Errors
require(dirname(__FILE__) . '/lib/errors/RainforestError.php');
require(dirname(__FILE__) . '/lib/errors/ApiError.php');
require(dirname(__FILE__) . '/lib/errors/ApiConnectionError.php');
require(dirname(__FILE__) . '/lib/errors/AuthenticationError.php');

// Plumbing
require(dirname(__FILE__) . '/lib/apibits/ApiClient.php');
require(dirname(__FILE__) . '/lib/apibits/ApiEndpoint.php');
require(dirname(__FILE__) . '/lib/apibits/ApiResource.php');
require(dirname(__FILE__) . '/lib/apibits/ApiList.php');
require(dirname(__FILE__) . '/lib/apibits/ApiMethod.php');
require(dirname(__FILE__) . '/lib/apibits/Request.php');
require(dirname(__FILE__) . '/lib/apibits/PathBuilder.php');
require(dirname(__FILE__) . '/lib/apibits/ParamsBuilder.php');
require(dirname(__FILE__) . '/lib/apibits/HeadersBuilder.php');

// Rainforest API Resources
require(dirname(__FILE__) . '/lib/resources/ClientStats.php');
require(dirname(__FILE__) . '/lib/resources/Environment.php');
require(dirname(__FILE__) . '/lib/resources/Generator.php');
require(dirname(__FILE__) . '/lib/resources/Integration.php');
require(dirname(__FILE__) . '/lib/resources/Run.php');
require(dirname(__FILE__) . '/lib/resources/Schedule.php');
require(dirname(__FILE__) . '/lib/resources/SiteEnvironment.php');
require(dirname(__FILE__) . '/lib/resources/Site.php');
require(dirname(__FILE__) . '/lib/resources/Test.php');
require(dirname(__FILE__) . '/lib/resources/User.php');


// Rainforest API EndPoints
require(dirname(__FILE__) . '/lib/endpoints/ClientStatsEndpoint.php');
require(dirname(__FILE__) . '/lib/endpoints/EnvironmentRunsEndpoint.php');
require(dirname(__FILE__) . '/lib/endpoints/EnvironmentsEndpoint.php');
require(dirname(__FILE__) . '/lib/endpoints/GeneratorsEndpoint.php');
require(dirname(__FILE__) . '/lib/endpoints/GeneratorRowsEndpoint.php');
require(dirname(__FILE__) . '/lib/endpoints/IntegrationsEndpoint.php');
require(dirname(__FILE__) . '/lib/endpoints/RunTestsEndpoint.php');
require(dirname(__FILE__) . '/lib/endpoints/RunsEndpoint.php');
require(dirname(__FILE__) . '/lib/endpoints/SchedulesEndpoint.php');
require(dirname(__FILE__) . '/lib/endpoints/SiteEnvironmentsEndpoint.php');
require(dirname(__FILE__) . '/lib/endpoints/SitesEndpoint.php');
require(dirname(__FILE__) . '/lib/endpoints/TestsEndpoint.php');
require(dirname(__FILE__) . '/lib/endpoints/UsersEndpoint.php');


# API specific clients
require(dirname(__FILE__) . '/lib/clients/DefaultClient.php');

