<?php
/*
 * Copyright 2018 Google LLC
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
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/dialogflow/v2/conversation_profile.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Dialogflow\V2\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;

use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Dialogflow\V2\ConversationProfile;
use Google\Cloud\Dialogflow\V2\CreateConversationProfileRequest;
use Google\Cloud\Dialogflow\V2\DeleteConversationProfileRequest;
use Google\Cloud\Dialogflow\V2\GetConversationProfileRequest;
use Google\Cloud\Dialogflow\V2\ListConversationProfilesRequest;
use Google\Cloud\Dialogflow\V2\ListConversationProfilesResponse;
use Google\Cloud\Dialogflow\V2\UpdateConversationProfileRequest;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: Service for managing [ConversationProfiles][google.cloud.dialogflow.v2.ConversationProfile].
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $conversationProfilesClient = new ConversationProfilesClient();
 * try {
 *     $formattedParent = $conversationProfilesClient->projectName('[PROJECT]');
 *     $conversationProfile = new ConversationProfile();
 *     $response = $conversationProfilesClient->createConversationProfile($formattedParent, $conversationProfile);
 * } finally {
 *     $conversationProfilesClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 */
class ConversationProfilesGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.dialogflow.v2.ConversationProfiles';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'dialogflow.googleapis.com';

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
        'https://www.googleapis.com/auth/dialogflow',
    ];

    private static $cXSecuritySettingsNameTemplate;

    private static $conversationProfileNameTemplate;

    private static $locationNameTemplate;

    private static $projectNameTemplate;

    private static $projectConversationProfileNameTemplate;

    private static $projectLocationConversationProfileNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/conversation_profiles_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/conversation_profiles_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/conversation_profiles_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/conversation_profiles_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getCXSecuritySettingsNameTemplate()
    {
        if (self::$cXSecuritySettingsNameTemplate == null) {
            self::$cXSecuritySettingsNameTemplate = new PathTemplate('projects/{project}/locations/{location}/securitySettings/{security_settings}');
        }

        return self::$cXSecuritySettingsNameTemplate;
    }

    private static function getConversationProfileNameTemplate()
    {
        if (self::$conversationProfileNameTemplate == null) {
            self::$conversationProfileNameTemplate = new PathTemplate('projects/{project}/conversationProfiles/{conversation_profile}');
        }

        return self::$conversationProfileNameTemplate;
    }

    private static function getLocationNameTemplate()
    {
        if (self::$locationNameTemplate == null) {
            self::$locationNameTemplate = new PathTemplate('projects/{project}/locations/{location}');
        }

        return self::$locationNameTemplate;
    }

    private static function getProjectNameTemplate()
    {
        if (self::$projectNameTemplate == null) {
            self::$projectNameTemplate = new PathTemplate('projects/{project}');
        }

        return self::$projectNameTemplate;
    }

    private static function getProjectConversationProfileNameTemplate()
    {
        if (self::$projectConversationProfileNameTemplate == null) {
            self::$projectConversationProfileNameTemplate = new PathTemplate('projects/{project}/conversationProfiles/{conversation_profile}');
        }

        return self::$projectConversationProfileNameTemplate;
    }

    private static function getProjectLocationConversationProfileNameTemplate()
    {
        if (self::$projectLocationConversationProfileNameTemplate == null) {
            self::$projectLocationConversationProfileNameTemplate = new PathTemplate('projects/{project}/locations/{location}/conversationProfiles/{conversation_profile}');
        }

        return self::$projectLocationConversationProfileNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'cXSecuritySettings' => self::getCXSecuritySettingsNameTemplate(),
                'conversationProfile' => self::getConversationProfileNameTemplate(),
                'location' => self::getLocationNameTemplate(),
                'project' => self::getProjectNameTemplate(),
                'projectConversationProfile' => self::getProjectConversationProfileNameTemplate(),
                'projectLocationConversationProfile' => self::getProjectLocationConversationProfileNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * cx_security_settings resource.
     *
     * @param string $project
     * @param string $location
     * @param string $securitySettings
     *
     * @return string The formatted cx_security_settings resource.
     */
    public static function cXSecuritySettingsName($project, $location, $securitySettings)
    {
        return self::getCXSecuritySettingsNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'security_settings' => $securitySettings,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * conversation_profile resource.
     *
     * @param string $project
     * @param string $conversationProfile
     *
     * @return string The formatted conversation_profile resource.
     */
    public static function conversationProfileName($project, $conversationProfile)
    {
        return self::getConversationProfileNameTemplate()->render([
            'project' => $project,
            'conversation_profile' => $conversationProfile,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName($project, $location)
    {
        return self::getLocationNameTemplate()->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a project
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
     */
    public static function projectName($project)
    {
        return self::getProjectNameTemplate()->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_conversation_profile resource.
     *
     * @param string $project
     * @param string $conversationProfile
     *
     * @return string The formatted project_conversation_profile resource.
     */
    public static function projectConversationProfileName($project, $conversationProfile)
    {
        return self::getProjectConversationProfileNameTemplate()->render([
            'project' => $project,
            'conversation_profile' => $conversationProfile,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_conversation_profile resource.
     *
     * @param string $project
     * @param string $location
     * @param string $conversationProfile
     *
     * @return string The formatted project_location_conversation_profile resource.
     */
    public static function projectLocationConversationProfileName($project, $location, $conversationProfile)
    {
        return self::getProjectLocationConversationProfileNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'conversation_profile' => $conversationProfile,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - cXSecuritySettings: projects/{project}/locations/{location}/securitySettings/{security_settings}
     * - conversationProfile: projects/{project}/conversationProfiles/{conversation_profile}
     * - location: projects/{project}/locations/{location}
     * - project: projects/{project}
     * - projectConversationProfile: projects/{project}/conversationProfiles/{conversation_profile}
     * - projectLocationConversationProfile: projects/{project}/locations/{location}/conversationProfiles/{conversation_profile}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
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
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           **Deprecated**. This option will be removed in a future major release. Please
     *           utilize the `$apiEndpoint` option instead.
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'dialogflow.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $serviceAddress setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Creates a conversation profile in the specified project.
     *
     * [ConversationProfile.CreateTime][] and [ConversationProfile.UpdateTime][]
     * aren't populated in the response. You can retrieve them via
     * [GetConversationProfile][google.cloud.dialogflow.v2.ConversationProfiles.GetConversationProfile] API.
     *
     * Sample code:
     * ```
     * $conversationProfilesClient = new ConversationProfilesClient();
     * try {
     *     $formattedParent = $conversationProfilesClient->projectName('[PROJECT]');
     *     $conversationProfile = new ConversationProfile();
     *     $response = $conversationProfilesClient->createConversationProfile($formattedParent, $conversationProfile);
     * } finally {
     *     $conversationProfilesClient->close();
     * }
     * ```
     *
     * @param string              $parent              Required. The project to create a conversation profile for.
     *                                                 Format: `projects/<Project ID>/locations/<Location ID>`.
     * @param ConversationProfile $conversationProfile Required. The conversation profile to create.
     * @param array               $optionalArgs        {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\V2\ConversationProfile
     *
     * @throws ApiException if the remote call fails
     */
    public function createConversationProfile($parent, $conversationProfile, array $optionalArgs = [])
    {
        $request = new CreateConversationProfileRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setConversationProfile($conversationProfile);
        $requestParamHeaders['parent'] = $parent;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('CreateConversationProfile', ConversationProfile::class, $optionalArgs, $request)->wait();
    }

    /**
     * Deletes the specified conversation profile.
     *
     * Sample code:
     * ```
     * $conversationProfilesClient = new ConversationProfilesClient();
     * try {
     *     $formattedName = $conversationProfilesClient->conversationProfileName('[PROJECT]', '[CONVERSATION_PROFILE]');
     *     $conversationProfilesClient->deleteConversationProfile($formattedName);
     * } finally {
     *     $conversationProfilesClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the conversation profile to delete.
     *                             Format: `projects/<Project ID>/locations/<Location
     *                             ID>/conversationProfiles/<Conversation Profile ID>`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     */
    public function deleteConversationProfile($name, array $optionalArgs = [])
    {
        $request = new DeleteConversationProfileRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('DeleteConversationProfile', GPBEmpty::class, $optionalArgs, $request)->wait();
    }

    /**
     * Retrieves the specified conversation profile.
     *
     * Sample code:
     * ```
     * $conversationProfilesClient = new ConversationProfilesClient();
     * try {
     *     $formattedName = $conversationProfilesClient->conversationProfileName('[PROJECT]', '[CONVERSATION_PROFILE]');
     *     $response = $conversationProfilesClient->getConversationProfile($formattedName);
     * } finally {
     *     $conversationProfilesClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the conversation profile.
     *                             Format: `projects/<Project ID>/locations/<Location
     *                             ID>/conversationProfiles/<Conversation Profile ID>`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\V2\ConversationProfile
     *
     * @throws ApiException if the remote call fails
     */
    public function getConversationProfile($name, array $optionalArgs = [])
    {
        $request = new GetConversationProfileRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetConversationProfile', ConversationProfile::class, $optionalArgs, $request)->wait();
    }

    /**
     * Returns the list of all conversation profiles in the specified project.
     *
     * Sample code:
     * ```
     * $conversationProfilesClient = new ConversationProfilesClient();
     * try {
     *     $formattedParent = $conversationProfilesClient->projectName('[PROJECT]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $conversationProfilesClient->listConversationProfiles($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $conversationProfilesClient->listConversationProfiles($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $conversationProfilesClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The project to list all conversation profiles from.
     *                             Format: `projects/<Project ID>/locations/<Location ID>`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listConversationProfiles($parent, array $optionalArgs = [])
    {
        $request = new ListConversationProfilesRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListConversationProfiles', $optionalArgs, ListConversationProfilesResponse::class, $request);
    }

    /**
     * Updates the specified conversation profile.
     *
     * [ConversationProfile.CreateTime][] and [ConversationProfile.UpdateTime][]
     * aren't populated in the response. You can retrieve them via
     * [GetConversationProfile][google.cloud.dialogflow.v2.ConversationProfiles.GetConversationProfile] API.
     *
     * Sample code:
     * ```
     * $conversationProfilesClient = new ConversationProfilesClient();
     * try {
     *     $conversationProfile = new ConversationProfile();
     *     $updateMask = new FieldMask();
     *     $response = $conversationProfilesClient->updateConversationProfile($conversationProfile, $updateMask);
     * } finally {
     *     $conversationProfilesClient->close();
     * }
     * ```
     *
     * @param ConversationProfile $conversationProfile Required. The conversation profile to update.
     * @param FieldMask           $updateMask          Required. The mask to control which fields to update.
     * @param array               $optionalArgs        {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\V2\ConversationProfile
     *
     * @throws ApiException if the remote call fails
     */
    public function updateConversationProfile($conversationProfile, $updateMask, array $optionalArgs = [])
    {
        $request = new UpdateConversationProfileRequest();
        $requestParamHeaders = [];
        $request->setConversationProfile($conversationProfile);
        $request->setUpdateMask($updateMask);
        $requestParamHeaders['conversation_profile.name'] = $conversationProfile->getName();
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('UpdateConversationProfile', ConversationProfile::class, $optionalArgs, $request)->wait();
    }
}