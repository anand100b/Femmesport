<?php
/*
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was generated from the file
 * https://github.com/google/googleapis/blob/master/google/cloud/gaming/v1/game_server_clusters_service.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Gaming\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Gaming\V1\CreateGameServerClusterRequest;
use Google\Cloud\Gaming\V1\DeleteGameServerClusterRequest;
use Google\Cloud\Gaming\V1\GameServerCluster;
use Google\Cloud\Gaming\V1\GetGameServerClusterRequest;
use Google\Cloud\Gaming\V1\ListGameServerClustersRequest;
use Google\Cloud\Gaming\V1\ListGameServerClustersResponse;
use Google\Cloud\Gaming\V1\PreviewCreateGameServerClusterRequest;
use Google\Cloud\Gaming\V1\PreviewCreateGameServerClusterResponse;
use Google\Cloud\Gaming\V1\PreviewDeleteGameServerClusterRequest;
use Google\Cloud\Gaming\V1\PreviewDeleteGameServerClusterResponse;
use Google\Cloud\Gaming\V1\PreviewUpdateGameServerClusterRequest;
use Google\Cloud\Gaming\V1\PreviewUpdateGameServerClusterResponse;
use Google\Cloud\Gaming\V1\UpdateGameServerClusterRequest;
use Google\LongRunning\Operation;
use Google\Protobuf\FieldMask;
use Google\Protobuf\Timestamp;

/**
 * Service Description: The game server cluster maps to Kubernetes clusters running Agones and is
 * used to manage fleets within clusters.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $gameServerClustersServiceClient = new GameServerClustersServiceClient();
 * try {
 *     $formattedParent = $gameServerClustersServiceClient->realmName('[PROJECT]', '[LOCATION]', '[REALM]');
 *     // Iterate over pages of elements
 *     $pagedResponse = $gameServerClustersServiceClient->listGameServerClusters($formattedParent);
 *     foreach ($pagedResponse->iteratePages() as $page) {
 *         foreach ($page as $element) {
 *             // doSomethingWith($element);
 *         }
 *     }
 *
 *
 *     // Alternatively:
 *
 *     // Iterate through all elements
 *     $pagedResponse = $gameServerClustersServiceClient->listGameServerClusters($formattedParent);
 *     foreach ($pagedResponse->iterateAllElements() as $element) {
 *         // doSomethingWith($element);
 *     }
 * } finally {
 *     $gameServerClustersServiceClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To assist
 * with these names, this class includes a format method for each type of name, and additionally
 * a parseName method to extract the individual identifiers contained within formatted names
 * that are returned by the API.
 *
 * @experimental
 */
class GameServerClustersServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.gaming.v1.GameServerClustersService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'gameservices.googleapis.com';

    /**
     * The default port of the service.
     */
    const DEFAULT_SERVICE_PORT = 443;

    /**
     * The name of the code generator, to be included in the agent header.
     */
    const CODEGEN_NAME = 'gapic';

    /**
     * The default scopes required by the service.
     */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];
    private static $gameServerClusterNameTemplate;
    private static $realmNameTemplate;
    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/game_server_clusters_service_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/game_server_clusters_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/game_server_clusters_service_grpc_config.json',
            'credentialsConfig' => [
                'scopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/game_server_clusters_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getGameServerClusterNameTemplate()
    {
        if (null == self::$gameServerClusterNameTemplate) {
            self::$gameServerClusterNameTemplate = new PathTemplate('projects/{project}/locations/{location}/realms/{realm}/gameServerClusters/{cluster}');
        }

        return self::$gameServerClusterNameTemplate;
    }

    private static function getRealmNameTemplate()
    {
        if (null == self::$realmNameTemplate) {
            self::$realmNameTemplate = new PathTemplate('projects/{project}/locations/{location}/realms/{realm}');
        }

        return self::$realmNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'gameServerCluster' => self::getGameServerClusterNameTemplate(),
                'realm' => self::getRealmNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a game_server_cluster resource.
     *
     * @param string $project
     * @param string $location
     * @param string $realm
     * @param string $cluster
     *
     * @return string The formatted game_server_cluster resource.
     * @experimental
     */
    public static function gameServerClusterName($project, $location, $realm, $cluster)
    {
        return self::getGameServerClusterNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'realm' => $realm,
            'cluster' => $cluster,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a realm resource.
     *
     * @param string $project
     * @param string $location
     * @param string $realm
     *
     * @return string The formatted realm resource.
     * @experimental
     */
    public static function realmName($project, $location, $realm)
    {
        return self::getRealmNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'realm' => $realm,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - gameServerCluster: projects/{project}/locations/{location}/realms/{realm}/gameServerClusters/{cluster}
     * - realm: projects/{project}/locations/{location}/realms/{realm}.
     *
     * The optional $template argument can be supplied to specify a particular pattern, and must
     * match one of the templates listed above. If no $template argument is provided, or if the
     * $template argument does not match one of the templates listed, then parseName will check
     * each of the supported templates, and return the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     * @experimental
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();

        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException("Template name $template does not exist");
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }
        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     * @experimental
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started
     * by a long running API method. If $methodName is not provided, or does
     * not match a long running API method, then the operation can still be
     * resumed, but the OperationResponse object will not deserialize the
     * final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     * @experimental
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning'])
            ? $this->descriptors[$methodName]['longRunning']
            : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();

        return $operation;
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *                       Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           **Deprecated**. This option will be removed in a future major release. Please
     *           utilize the `$apiEndpoint` option instead.
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'gameservices.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the client.
     *           For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()}.
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either a
     *           path to a JSON file, or a PHP array containing the decoded JSON data.
     *           By default this settings points to the default client config file, which is provided
     *           in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string `rest`
     *           or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already instantiated
     *           {@see \Google\ApiCore\Transport\TransportInterface} object. Note that when this
     *           object is provided, any settings in $transportConfig, and any `$apiEndpoint`
     *           setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...]
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     * }
     *
     * @throws ValidationException
     * @experimental
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /**
     * Lists game server clusters in a given project and location.
     *
     * Sample code:
     * ```
     * $gameServerClustersServiceClient = new GameServerClustersServiceClient();
     * try {
     *     $formattedParent = $gameServerClustersServiceClient->realmName('[PROJECT]', '[LOCATION]', '[REALM]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $gameServerClustersServiceClient->listGameServerClusters($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // Iterate through all elements
     *     $pagedResponse = $gameServerClustersServiceClient->listGameServerClusters($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $gameServerClustersServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent resource name. Uses the form:
     *                             "projects/{project}/locations/{location}/realms/{realm}".
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type int $pageSize
     *          The maximum number of resources contained in the underlying API
     *          response. The API may return fewer values in a page, even if
     *          there are additional values to be retrieved.
     *     @type string $pageToken
     *          A page token is used to specify a page of values to be returned.
     *          If no page token is specified (the default), the first page
     *          of values will be returned. Any page token used here must have
     *          been generated by a previous call to the API.
     *     @type string $filter
     *          Optional. The filter to apply to list results.
     *     @type string $orderBy
     *          Optional. Specifies the ordering of results following syntax at
     *          https://cloud.google.com/apis/design/design_patterns#sorting_order.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function listGameServerClusters($parent, array $optionalArgs = [])
    {
        $request = new ListGameServerClustersRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }
        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }
        if (isset($optionalArgs['orderBy'])) {
            $request->setOrderBy($optionalArgs['orderBy']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListGameServerClusters',
            $optionalArgs,
            ListGameServerClustersResponse::class,
            $request
        );
    }

    /**
     * Gets details of a single game server cluster.
     *
     * Sample code:
     * ```
     * $gameServerClustersServiceClient = new GameServerClustersServiceClient();
     * try {
     *     $formattedName = $gameServerClustersServiceClient->gameServerClusterName('[PROJECT]', '[LOCATION]', '[REALM]', '[CLUSTER]');
     *     $response = $gameServerClustersServiceClient->getGameServerCluster($formattedName);
     * } finally {
     *     $gameServerClustersServiceClient->close();
     * }
     * ```
     *
     * @param string $name Required. The name of the game server cluster to retrieve. Uses the form:
     *
     * `projects/{project}/locations/{location}/realms/{realm-id}/gameServerClusters/{cluster}`.
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Gaming\V1\GameServerCluster
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getGameServerCluster($name, array $optionalArgs = [])
    {
        $request = new GetGameServerClusterRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetGameServerCluster',
            GameServerCluster::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates a new game server cluster in a given project and location.
     *
     * Sample code:
     * ```
     * $gameServerClustersServiceClient = new GameServerClustersServiceClient();
     * try {
     *     $formattedParent = $gameServerClustersServiceClient->realmName('[PROJECT]', '[LOCATION]', '[REALM]');
     *     $gameServerClusterId = '';
     *     $gameServerCluster = new GameServerCluster();
     *     $operationResponse = $gameServerClustersServiceClient->createGameServerCluster($formattedParent, $gameServerClusterId, $gameServerCluster);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *         // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $gameServerClustersServiceClient->createGameServerCluster($formattedParent, $gameServerClusterId, $gameServerCluster);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $gameServerClustersServiceClient->resumeOperation($operationName, 'createGameServerCluster');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *       $result = $newOperationResponse->getResult();
     *       // doSomethingWith($result)
     *     } else {
     *       $error = $newOperationResponse->getError();
     *       // handleError($error)
     *     }
     * } finally {
     *     $gameServerClustersServiceClient->close();
     * }
     * ```
     *
     * @param string            $parent              Required. The parent resource name. Uses the form:
     *                                               `projects/{project}/locations/{location}/realms/{realm-id}`.
     * @param string            $gameServerClusterId Required. The ID of the game server cluster resource to be created.
     * @param GameServerCluster $gameServerCluster   Required. The game server cluster resource to be created.
     * @param array             $optionalArgs        {
     *                                               Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createGameServerCluster($parent, $gameServerClusterId, $gameServerCluster, array $optionalArgs = [])
    {
        $request = new CreateGameServerClusterRequest();
        $request->setParent($parent);
        $request->setGameServerClusterId($gameServerClusterId);
        $request->setGameServerCluster($gameServerCluster);

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'CreateGameServerCluster',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Previews creation of a new game server cluster in a given project and
     * location.
     *
     * Sample code:
     * ```
     * $gameServerClustersServiceClient = new GameServerClustersServiceClient();
     * try {
     *     $formattedParent = $gameServerClustersServiceClient->realmName('[PROJECT]', '[LOCATION]', '[REALM]');
     *     $gameServerClusterId = '';
     *     $gameServerCluster = new GameServerCluster();
     *     $response = $gameServerClustersServiceClient->previewCreateGameServerCluster($formattedParent, $gameServerClusterId, $gameServerCluster);
     * } finally {
     *     $gameServerClustersServiceClient->close();
     * }
     * ```
     *
     * @param string            $parent              Required. The parent resource name. Uses the form:
     *                                               `projects/{project}/locations/{location}/realms/{realm}`.
     * @param string            $gameServerClusterId Required. The ID of the game server cluster resource to be created.
     * @param GameServerCluster $gameServerCluster   Required. The game server cluster resource to be created.
     * @param array             $optionalArgs        {
     *                                               Optional.
     *
     *     @type Timestamp $previewTime
     *          Optional. The target timestamp to compute the preview.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Gaming\V1\PreviewCreateGameServerClusterResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function previewCreateGameServerCluster($parent, $gameServerClusterId, $gameServerCluster, array $optionalArgs = [])
    {
        $request = new PreviewCreateGameServerClusterRequest();
        $request->setParent($parent);
        $request->setGameServerClusterId($gameServerClusterId);
        $request->setGameServerCluster($gameServerCluster);
        if (isset($optionalArgs['previewTime'])) {
            $request->setPreviewTime($optionalArgs['previewTime']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'PreviewCreateGameServerCluster',
            PreviewCreateGameServerClusterResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Deletes a single game server cluster.
     *
     * Sample code:
     * ```
     * $gameServerClustersServiceClient = new GameServerClustersServiceClient();
     * try {
     *     $formattedName = $gameServerClustersServiceClient->gameServerClusterName('[PROJECT]', '[LOCATION]', '[REALM]', '[CLUSTER]');
     *     $operationResponse = $gameServerClustersServiceClient->deleteGameServerCluster($formattedName);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         // operation succeeded and returns no value
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $gameServerClustersServiceClient->deleteGameServerCluster($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $gameServerClustersServiceClient->resumeOperation($operationName, 'deleteGameServerCluster');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *       // operation succeeded and returns no value
     *     } else {
     *       $error = $newOperationResponse->getError();
     *       // handleError($error)
     *     }
     * } finally {
     *     $gameServerClustersServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the game server cluster to delete. Uses the form:
     *                             `projects/{project}/locations/{location}/gameServerClusters/{cluster}`.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function deleteGameServerCluster($name, array $optionalArgs = [])
    {
        $request = new DeleteGameServerClusterRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'DeleteGameServerCluster',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Previews deletion of a single game server cluster.
     *
     * Sample code:
     * ```
     * $gameServerClustersServiceClient = new GameServerClustersServiceClient();
     * try {
     *     $formattedName = $gameServerClustersServiceClient->gameServerClusterName('[PROJECT]', '[LOCATION]', '[REALM]', '[CLUSTER]');
     *     $response = $gameServerClustersServiceClient->previewDeleteGameServerCluster($formattedName);
     * } finally {
     *     $gameServerClustersServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the game server cluster to delete. Uses the form:
     *                             `projects/{project}/locations/{location}/gameServerClusters/{cluster}`.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type Timestamp $previewTime
     *          Optional. The target timestamp to compute the preview.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Gaming\V1\PreviewDeleteGameServerClusterResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function previewDeleteGameServerCluster($name, array $optionalArgs = [])
    {
        $request = new PreviewDeleteGameServerClusterRequest();
        $request->setName($name);
        if (isset($optionalArgs['previewTime'])) {
            $request->setPreviewTime($optionalArgs['previewTime']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'PreviewDeleteGameServerCluster',
            PreviewDeleteGameServerClusterResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Patches a single game server cluster.
     *
     * Sample code:
     * ```
     * $gameServerClustersServiceClient = new GameServerClustersServiceClient();
     * try {
     *     $gameServerCluster = new GameServerCluster();
     *     $updateMask = new FieldMask();
     *     $operationResponse = $gameServerClustersServiceClient->updateGameServerCluster($gameServerCluster, $updateMask);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *         // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $gameServerClustersServiceClient->updateGameServerCluster($gameServerCluster, $updateMask);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $gameServerClustersServiceClient->resumeOperation($operationName, 'updateGameServerCluster');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *       $result = $newOperationResponse->getResult();
     *       // doSomethingWith($result)
     *     } else {
     *       $error = $newOperationResponse->getError();
     *       // handleError($error)
     *     }
     * } finally {
     *     $gameServerClustersServiceClient->close();
     * }
     * ```
     *
     * @param GameServerCluster $gameServerCluster Required. The game server cluster to be updated.
     *                                             Only fields specified in update_mask are updated.
     * @param FieldMask         $updateMask        Required. Mask of fields to update. At least one path must be supplied in
     *                                             this field. For the `FieldMask` definition, see
     *
     * https:
     * //developers.google.com/protocol-buffers
     * // /docs/reference/google.protobuf#fieldmask
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function updateGameServerCluster($gameServerCluster, $updateMask, array $optionalArgs = [])
    {
        $request = new UpdateGameServerClusterRequest();
        $request->setGameServerCluster($gameServerCluster);
        $request->setUpdateMask($updateMask);

        $requestParams = new RequestParamsHeaderDescriptor([
          'game_server_cluster.name' => $request->getGameServerCluster()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'UpdateGameServerCluster',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Previews updating a GameServerCluster.
     *
     * Sample code:
     * ```
     * $gameServerClustersServiceClient = new GameServerClustersServiceClient();
     * try {
     *     $gameServerCluster = new GameServerCluster();
     *     $updateMask = new FieldMask();
     *     $response = $gameServerClustersServiceClient->previewUpdateGameServerCluster($gameServerCluster, $updateMask);
     * } finally {
     *     $gameServerClustersServiceClient->close();
     * }
     * ```
     *
     * @param GameServerCluster $gameServerCluster Required. The game server cluster to be updated.
     *                                             Only fields specified in update_mask are updated.
     * @param FieldMask         $updateMask        Required. Mask of fields to update. At least one path must be supplied in
     *                                             this field. For the `FieldMask` definition, see
     *
     * https:
     * //developers.google.com/protocol-buffers
     * // /docs/reference/google.protobuf#fieldmask
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type Timestamp $previewTime
     *          Optional. The target timestamp to compute the preview.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Gaming\V1\PreviewUpdateGameServerClusterResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function previewUpdateGameServerCluster($gameServerCluster, $updateMask, array $optionalArgs = [])
    {
        $request = new PreviewUpdateGameServerClusterRequest();
        $request->setGameServerCluster($gameServerCluster);
        $request->setUpdateMask($updateMask);
        if (isset($optionalArgs['previewTime'])) {
            $request->setPreviewTime($optionalArgs['previewTime']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'game_server_cluster.name' => $request->getGameServerCluster()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'PreviewUpdateGameServerCluster',
            PreviewUpdateGameServerClusterResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
