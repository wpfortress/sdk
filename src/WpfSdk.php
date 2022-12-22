<?php

namespace Wpfortress\Sdk;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use PHPUnit\Util\Exception;
use Psr\Http\Message\ResponseInterface;

class WpfSdk
{
    /**
     ** Account routes
     */


    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAccount(): ResponseInterface
    {
        $this->request('get', '/account');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateAccount($params): ResponseInterface
    {
        $this->request('put', '/account', $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createAccountTeam($params): ResponseInterface
    {
        $this->request('post', '/account/teams', $params);
    }

    /**
     ** Teams routes
     */

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTeams(): ResponseInterface
    {
        $this->request('get', '/teams');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTeam($teamId, $params): ResponseInterface
    {
        $this->request('get', '/teams/' . $teamId, $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateTeam($teamId, $params): ResponseInterface
    {
        $this->request('put', '/teams/' . $teamId, $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTeamRoles($teamId): ResponseInterface
    {
        $this->request('get', '/teams/' . $teamId . '/roles');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTeamInvitations($teamId): ResponseInterface
    {
        $this->request('get', '/teams/' . $teamId . '/invitations');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createTeamInvitation($teamId, $params): ResponseInterface
    {
        $this->request('post', '/teams/' . $teamId . '/invitations', $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteTeamInvitation($teamId, $invitationId): ResponseInterface
    {
        $this->request('delete', '/teams/' . $teamId . '/invitations/' . $invitationId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTeamMembers($teamId): ResponseInterface
    {
        $this->request('get', '/teams/' . $teamId . '/members');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTeamMember($teamId, $memberId): ResponseInterface
    {
        $this->request('get', '/teams/' . $teamId . '/members/' . $memberId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteTeamMember($teamId, $memberId): ResponseInterface
    {
        $this->request('delete', '/teams/' . $teamId . '/members/' . $memberId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTeamCloudProviders($teamId): ResponseInterface
    {
        $this->request('get', '/teams/' . $teamId . '/cloud-providers');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTeamDomains($teamId): ResponseInterface
    {
        $this->request('get', '/teams/' . $teamId . '/domains');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTeamNetworks($teamId): ResponseInterface
    {
        $this->request('get', '/teams/' . $teamId . '/networks');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTeamProjects($teamId): ResponseInterface
    {
        $this->request('get', '/teams/' . $teamId . '/projects');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTeamCertificates($teamId): ResponseInterface
    {
        $this->request('get', '/teams/' . $teamId . '/certificates');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTeamDatabaseClusters($teamId): ResponseInterface
    {
        $this->request('get', '/teams/' . $teamId . '/database-clusters');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTeamCacheClusters($teamId): ResponseInterface
    {
        $this->request('get', '/teams/' . $teamId . '/cache-clusters');
    }

    /**
     ** Cloud providers
     */

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getCloudProvider($cloudProviderId): ResponseInterface
    {
        $this->request('get', '/cloud-providers/' . $cloudProviderId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateCloudProvider($cloudProviderId, $params): ResponseInterface
    {
        $this->request('put', '/cloud-providers/' . $cloudProviderId, $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteCloudProvider($cloudProviderId): ResponseInterface
    {
        $this->request('delete', '/cloud-providers/' . $cloudProviderId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createCloudProviderNetwork($cloudProviderId, $params): ResponseInterface
    {
        $this->request('post', '/cloud-providers/' . $cloudProviderId . 'networks', $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createCloudProviderDomain($cloudProviderId, $params): ResponseInterface
    {
        $this->request('post', '/cloud-providers/' . $cloudProviderId . 'domains', $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createCloudProviderCertificate($cloudProviderId, $params): ResponseInterface
    {
        $this->request('post', '/cloud-providers/' . $cloudProviderId . 'certificates', $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createCloudProviderProject($cloudProviderId, $params): ResponseInterface
    {
        $this->request('post', '/cloud-providers/' . $cloudProviderId . 'projects', $params);
    }

    /**
     ** Domains
     */

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getDomain($domainId): ResponseInterface
    {
        $this->request('get', '/domains/' . $domainId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteDomain($domainId): ResponseInterface
    {
        $this->request('delete', '/domains/' . $domainId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getDomainRecords($domainId): ResponseInterface
    {
        $this->request('get', '/domains/' . $domainId . '/records');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createDomainRecord($domainId, $params): ResponseInterface
    {
        $this->request('post', '/domains/' . $domainId . '/records', $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getDomainRecord($domainId, $recordId): ResponseInterface
    {
        $this->request('get', '/domains/' . $domainId . '/records/' . $recordId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateDomainRecord($domainId, $recordId, $params): ResponseInterface
    {
        $this->request('put', '/domains/' . $domainId . '/records/' . $recordId, $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteDomainRecord($domainId, $recordId): ResponseInterface
    {
        $this->request('delete', '/domains/' . $domainId . '/records/' . $recordId);
    }

    /**
     ** Networks
     */

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getNetwork($networkId): ResponseInterface
    {
        $this->request('get', '/networks/' . $networkId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function enableNetworkNatGateway($networkId): ResponseInterface
    {
        $this->request('post', '/networks/' . $networkId . '/nat-gateway');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function disableNetworkNatGateway($networkId): ResponseInterface
    {
        $this->request('delete', '/networks/' . $networkId . '/nat-gateway');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function disableNetwork($networkId): ResponseInterface
    {
        $this->request('delete', '/networks/' . $networkId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getNetworkJumboxes($networkId): ResponseInterface
    {
        $this->request('get', '/networks/' . $networkId . '/jumpboxes');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createNetworkJumbox($networkId, $params): ResponseInterface
    {
        $this->request('post', '/networks/' . $networkId . '/jumpboxes', $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getNetworkLoadBalancers($networkId): ResponseInterface
    {
        $this->request('get', '/networks/' . $networkId . '/load-balancers');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createNetworkLoadBalance($networkId, $params): ResponseInterface
    {
        $this->request('post', '/networks/' . $networkId . '/load-balancers', $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createNetworkCacheCluster($networkId, $params): ResponseInterface
    {
        $this->request('post', '/networks/' . $networkId . '/cache-clusters', $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createNetworkDatabaseClustes($networkId, $params): ResponseInterface
    {
        $this->request('post', '/networks/' . $networkId . '/database-clusters', $params);
    }

    /**
     ** Database clusters
     */

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getDatabaseCluster($databaseClustersId): ResponseInterface
    {
        $this->request('get', '/database-clusters/' . $databaseClustersId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteDatabaseCluster($databaseClustersId): ResponseInterface
    {
        $this->request('delete', '/database-clusters/' . $databaseClustersId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getDatabaseClusterUsers($databaseClustersId): ResponseInterface
    {
        $this->request('get', '/database-clusters/' . $databaseClustersId . '/users');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createDatabaseClusterUsers($databaseClustersId, $params): ResponseInterface
    {
        $this->request('post', '/database-clusters/' . $databaseClustersId . '/users', $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getDatabaseClusterUser($databaseClustersId, $databaseClusterUserId): ResponseInterface
    {
        $this->request('get', '/database-clusters/' . $databaseClustersId . '/users/' . $databaseClusterUserId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteDatabaseClusterUser($databaseClustersId, $databaseClusterUserId): ResponseInterface
    {
        $this->request('delete', '/database-clusters/' . $databaseClustersId . '/users/' . $databaseClusterUserId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function resetDatabaseClusterUserPassword($databaseClustersId, $databaseClusterUserId): ResponseInterface
    {
        $this->request('post', '/database-clusters/' . $databaseClustersId . '/users/'
            . $databaseClusterUserId . '/reset-password');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getDatabaseClusterDatabases($databaseClustersId): ResponseInterface
    {
        $this->request('get', '/database-clusters/' . $databaseClustersId . '/databases');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateDatabaseClusterDatabase($databaseClustersId, $params): ResponseInterface
    {
        $this->request('post', '/database-clusters/' . $databaseClustersId . '/databases', $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getDatabaseClusterDatabase($databaseClustersId, $databaseClusterDatabaseId): ResponseInterface
    {
        $this->request('get', '/database-clusters/' . $databaseClustersId . '/databases/' . $databaseClusterDatabaseId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteDatabaseClusterDatabase($databaseClustersId, $databaseClusterDatabaseId): ResponseInterface
    {
        $this->request('delete', '/database-clusters/' . $databaseClustersId .
            '/databases/' . $databaseClusterDatabaseId);
    }

    /**
     ** Cache clusters
     */

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getCacheCluster($cacheClustersId): ResponseInterface
    {
        $this->request('get', '/cache-clusters/' . $cacheClustersId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteCacheCluster($cacheClustersId): ResponseInterface
    {
        $this->request('delete', '/cache-clusters/' . $cacheClustersId);
    }

    /**
     ** Jumpboxes
     */

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getJumpbox($jumpboxId): ResponseInterface
    {
        $this->request('get', '/jumpboxes/' . $jumpboxId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteJumpbox($jumpboxId): ResponseInterface
    {
        $this->request('delete', '/jumpboxes/' . $jumpboxId);
    }

    /**
     ** Load balancers
     */

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getLoadBalance($loadBalancersId): ResponseInterface
    {
        $this->request('get', '/load-balancers/' . $loadBalancersId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteLoadBalance($loadBalancersId): ResponseInterface
    {
        $this->request('delete', '/load-balancers/' . $loadBalancersId);
    }

    /**
     ** Certificates
     */

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getCertificate($certificatesId): ResponseInterface
    {
        $this->request('get', '/certificates/' . $certificatesId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteCertificate($certificatesId): ResponseInterface
    {
        $this->request('delete', '/certificates/' . $certificatesId);
    }

    /**
     ** Projects
     */

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getProject($projectId): ResponseInterface
    {
        $this->request('get', '/projects/' . $projectId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteProject($projectId): ResponseInterface
    {
        $this->request('delete', '/projects/' . $projectId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function request($method, $uri, array $params = []): array
    {
        try {
            return $this->requestWithoutErrorHandling($method, $uri, $params);
        } catch (GuzzleException $e) {
            $response = $e->getResponse();
            $this->displayRequestErrors($response);
            throw $e;
        }
        // TODO: catch other exceptions
    }

    /**
     * Make a request to the API and return the resulting JSON array.
     *
     * @param string $method
     * @param string $uri
     * @param array $json
     *
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function requestWithoutErrorHandling(string $method, string $uri, array $json = []): array
    {
        return json_decode((string) $this->client()->request($method, $uri, [
            'json'    => $json,
            'headers' => [
                'Accept'        => 'application/json',
                'Content-Type'  => 'application/json',
                'Authorization' => 'Bearer ' . getenv('API_TOKEN'),
            ],
        ])->getBody(), true);
    }

    /**
     * Make an HTTP request and display any validation errors.
     *
     * @param string $method
     * @param string $uri
     * @param  array  $json
     *
     * @return array
     */
    protected function requestWithErrorHandling(string $method, string $uri, array $json = []): array
    {
        try {
            return $this->request($method, $uri, $json);
        } catch (\Exception $e) {
            $response = $e->getResponse();

            if (in_array($response->getStatusCode(), [400, 422])) {
                $this->displayValidationErrors($response);

                exit(1);
            }

            throw $e;
        } catch (GuzzleException $e) {
            throw $e;
        }
    }


    protected function displayRequestErrors($response): void
    {
        if ($response->getStatusCode() === 401) {
            throw new \Exception('Invalid API token provided.');
        }

        if ($response->getStatusCode() === 402) {
            throw new \Exception('Your account is not active.');
        }

        if ($response->getStatusCode() === 403) {
            throw new \Exception('You are not authorized to perform this action.');
        }

        if ($response->getStatusCode() === 404) {
            throw new \Exception('The requested resource was not found.');
        }

        if ($response->getStatusCode() === 409) {
            throw new \Exception('This operation is already in progress. Please try again later.');
        }

        if ($response->getStatusCode() === 429) {
            throw new \Exception('You are attempting this action too often. Please try again later.');
        }
    }

    protected function displayValidationErrors($response): void
    {
        $errors = json_decode(
            (string) $response->getBody(),
            true
        )['errors'];
        foreach ($errors as $error) {
            throw new Exception("Error - {$error}");
        }
    }

    protected function client(): Client
    {
        return new Client([
            'base_uri' => getenv('API_BASE'),
        ]);
    }
}
