<?php

namespace Wpfortress\Sdk;

use GuzzleHttp\Client;
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
        $this->client()->get('/account');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateAccount($params): ResponseInterface
    {
        $this->client()->put('/account', $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createAccountTeam($params): ResponseInterface
    {
        $this->client()->post('/account/teams', $params);
    }

    /**
     ** Teams routes
     */

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTeams(): ResponseInterface
    {
        $this->client()->get('/teams');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTeam($teamId, $params): ResponseInterface
    {
        $this->client()->get('/teams/' . $teamId, $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateTeam($teamId, $params): ResponseInterface
    {
        $this->client()->put('/teams/' . $teamId, $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTeamRoles($teamId): ResponseInterface
    {
        $this->client()->get('/teams/' . $teamId . '/roles');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTeamInvitations($teamId): ResponseInterface
    {
        $this->client()->get('/teams/' . $teamId . '/invitations');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createTeamInvitation($teamId, $params): ResponseInterface
    {
        $this->client()->post('/teams/' . $teamId . '/invitations', $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteTeamInvitation($teamId, $invitationId): ResponseInterface
    {
        $this->client()->delete('/teams/' . $teamId . '/invitations/' . $invitationId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTeamMembers($teamId): ResponseInterface
    {
        $this->client()->get('/teams/' . $teamId . '/members');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTeamMember($teamId, $memberId): ResponseInterface
    {
        $this->client()->get('/teams/' . $teamId . '/members/' . $memberId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteTeamMember($teamId, $memberId): ResponseInterface
    {
        $this->client()->delete('/teams/' . $teamId . '/members/' . $memberId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTeamCloudProviders($teamId): ResponseInterface
    {
        $this->client()->get('/teams/' . $teamId . '/cloud-providers');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTeamDomains($teamId): ResponseInterface
    {
        $this->client()->get('/teams/' . $teamId . '/domains');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTeamNetworks($teamId): ResponseInterface
    {
        $this->client()->get('/teams/' . $teamId . '/networks');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTeamProjects($teamId): ResponseInterface
    {
        $this->client()->get('/teams/' . $teamId . '/projects');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTeamCertificates($teamId): ResponseInterface
    {
        $this->client()->get('/teams/' . $teamId . '/certificates');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTeamDatabaseClusters($teamId): ResponseInterface
    {
        $this->client()->get('/teams/' . $teamId . '/database-clusters');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTeamCacheClusters($teamId): ResponseInterface
    {
        $this->client()->get('/teams/' . $teamId . '/cache-clusters');
    }

    /**
     ** Cloud providers
     */

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getCloudProvider($cloudProviderId): ResponseInterface
    {
        $this->client()->get('/cloud-providers/' . $cloudProviderId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateCloudProvider($cloudProviderId, $params): ResponseInterface
    {
        $this->client()->put('/cloud-providers/' . $cloudProviderId, $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteCloudProvider($cloudProviderId): ResponseInterface
    {
        $this->client()->delete('/cloud-providers/' . $cloudProviderId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createCloudProviderNetwork($cloudProviderId, $params): ResponseInterface
    {
        $this->client()->post('/cloud-providers/' . $cloudProviderId . 'networks', $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createCloudProviderDomain($cloudProviderId, $params): ResponseInterface
    {
        $this->client()->post('/cloud-providers/' . $cloudProviderId . 'domains', $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createCloudProviderCertificate($cloudProviderId, $params): ResponseInterface
    {
        $this->client()->post('/cloud-providers/' . $cloudProviderId . 'certificates', $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createCloudProviderProject($cloudProviderId, $params): ResponseInterface
    {
        $this->client()->post('/cloud-providers/' . $cloudProviderId . 'projects', $params);
    }

    /**
     ** Domains
     */

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getDomain($domainId): ResponseInterface
    {
        $this->client()->get('/domains/' . $domainId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteDomain($domainId): ResponseInterface
    {
        $this->client()->delete('/domains/' . $domainId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getDomainRecords($domainId): ResponseInterface
    {
        $this->client()->get('/domains/' . $domainId . '/records');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createDomainRecord($domainId, $params): ResponseInterface
    {
        $this->client()->post('/domains/' . $domainId . '/records', $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getDomainRecord($domainId, $recordId): ResponseInterface
    {
        $this->client()->get('/domains/' . $domainId . '/records/' . $recordId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateDomainRecord($domainId, $recordId, $params): ResponseInterface
    {
        $this->client()->put('/domains/' . $domainId . '/records/' . $recordId, $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteDomainRecord($domainId, $recordId): ResponseInterface
    {
        $this->client()->delete('/domains/' . $domainId . '/records/' . $recordId);
    }

    /**
     ** Networks
     */

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getNetwork($networkId): ResponseInterface
    {
        $this->client()->get('/networks/' . $networkId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function enableNetworkNatGateway($networkId): ResponseInterface
    {
        $this->client()->post('/networks/' . $networkId . '/nat-gateway');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function disableNetworkNatGateway($networkId): ResponseInterface
    {
        $this->client()->delete('/networks/' . $networkId . '/nat-gateway');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function disableNetwork($networkId): ResponseInterface
    {
        $this->client()->delete('/networks/' . $networkId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getNetworkJumboxes($networkId): ResponseInterface
    {
        $this->client()->get('/networks/' . $networkId . '/jumpboxes');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createNetworkJumbox($networkId, $params): ResponseInterface
    {
        $this->client()->post('/networks/' . $networkId . '/jumpboxes', $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getNetworkLoadBalancers($networkId): ResponseInterface
    {
        $this->client()->get('/networks/' . $networkId . '/load-balancers');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createNetworkLoadBalance($networkId, $params): ResponseInterface
    {
        $this->client()->post('/networks/' . $networkId . '/load-balancers', $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createNetworkCacheCluster($networkId, $params): ResponseInterface
    {
        $this->client()->post('/networks/' . $networkId . '/cache-clusters', $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createNetworkDatabaseClustes($networkId, $params): ResponseInterface
    {
        $this->client()->post('/networks/' . $networkId . '/database-clusters', $params);
    }

    /**
     ** Database clusters
     */

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getDatabaseCluster($databaseClustersId): ResponseInterface
    {
        $this->client()->get('/database-clusters/' . $databaseClustersId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteDatabaseCluster($databaseClustersId): ResponseInterface
    {
        $this->client()->delete('/database-clusters/' . $databaseClustersId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getDatabaseClusterUsers($databaseClustersId): ResponseInterface
    {
        $this->client()->get('/database-clusters/' . $databaseClustersId . '/users');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createDatabaseClusterUsers($databaseClustersId, $params): ResponseInterface
    {
        $this->client()->post('/database-clusters/' . $databaseClustersId . '/users', $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getDatabaseClusterUser($databaseClustersId, $databaseClusterUserId): ResponseInterface
    {
        $this->client()->get('/database-clusters/' . $databaseClustersId . '/users/' . $databaseClusterUserId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteDatabaseClusterUser($databaseClustersId, $databaseClusterUserId): ResponseInterface
    {
        $this->client()->delete('/database-clusters/' . $databaseClustersId . '/users/' . $databaseClusterUserId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function resetDatabaseClusterUserPassword($databaseClustersId, $databaseClusterUserId): ResponseInterface
    {
        $this->client()->post('/database-clusters/' . $databaseClustersId . '/users/'
            . $databaseClusterUserId . '/reset-password');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getDatabaseClusterDatabases($databaseClustersId): ResponseInterface
    {
        $this->client()->get('/database-clusters/' . $databaseClustersId . '/databases');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateDatabaseClusterDatabase($databaseClustersId, $params): ResponseInterface
    {
        $this->client()->post('/database-clusters/' . $databaseClustersId . '/databases', $params);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getDatabaseClusterDatabase($databaseClustersId, $databaseClusterDatabaseId): ResponseInterface
    {
        $this->client()->get('/database-clusters/' . $databaseClustersId . '/databases/' . $databaseClusterDatabaseId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteDatabaseClusterDatabase($databaseClustersId, $databaseClusterDatabaseId): ResponseInterface
    {
        $this->client()->delete('/database-clusters/' . $databaseClustersId .
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
        $this->client()->get('/cache-clusters/' . $cacheClustersId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteCacheCluster($cacheClustersId): ResponseInterface
    {
        $this->client()->delete('/cache-clusters/' . $cacheClustersId);
    }

    /**
     ** Jumpboxes
     */

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getJumpbox($jumpboxId): ResponseInterface
    {
        $this->client()->get('/jumpboxes/' . $jumpboxId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteJumpbox($jumpboxId): ResponseInterface
    {
        $this->client()->delete('/jumpboxes/' . $jumpboxId);
    }

    /**
     ** Load balancers
     */

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getLoadBalance($loadBalancersId): ResponseInterface
    {
        $this->client()->get('/load-balancers/' . $loadBalancersId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteLoadBalance($loadBalancersId): ResponseInterface
    {
        $this->client()->delete('/load-balancers/' . $loadBalancersId);
    }

    /**
     ** Certificates
     */

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getCertificate($certificatesId): ResponseInterface
    {
        $this->client()->get('/certificates/' . $certificatesId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteCertificate($certificatesId): ResponseInterface
    {
        $this->client()->delete('/certificates/' . $certificatesId);
    }

    /**
     ** Projects
     */

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getProject($projectId): ResponseInterface
    {
        $this->client()->get('/projects/' . $projectId);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteProject($projectId): ResponseInterface
    {
        $this->client()->delete('/projects/' . $projectId);
    }

    protected function client(): Client
    {
        return new Client([
            'base_uri' => getenv('API_BASE'),
        ]);
    }
}
