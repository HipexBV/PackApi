<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Type;

use JsonSerializable;

/**
 * Domain entity with code base, directory etc. Can have domain pointers pointing to it and be secured with LetsEncrypt.
 * @codeCoverageIgnore
 */
class Domain extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * id
	 *
	 * @var int|null
	 */
	private $id;

	/**
	 * server
	 *
	 * @var Server|null
	 */
	private $server;

	/**
	 * sslCertificate
	 *
	 * @var SSLCertificate|null
	 */
	private $sslCertificate;

	/**
	 * letsEncryptSsl
	 *
	 * @var bool|null
	 */
	private $letsEncryptSsl;

	/**
	 * certificate
	 *
	 * @var SSLCertificate|null
	 */
	private $certificate;

	/**
	 * domain
	 *
	 * @var string
	 */
	private $domain;

	/**
	 * backup
	 *
	 * @var bool
	 */
	private $backup;

	/**
	 * user
	 *
	 * @var User
	 */
	private $user;

	/**
	 * customer
	 *
	 * @var Customer|null
	 */
	private $customer;

	/**
	 * lastPerformanceScan
	 *
	 * @var PerformanceScan|null
	 */
	private $lastPerformanceScan;

	/**
	 * lastChecklist
	 *
	 * @var Checklist|null
	 */
	private $lastChecklist;

	/**
	 * lastIntegrationTest
	 *
	 * @var IntegrationTest|null
	 */
	private $lastIntegrationTest;

	/**
	 * mainPhp
	 *
	 * @var PhpVersionEnum
	 */
	private $mainPhp;

	/**
	 * accessLogs
	 *
	 * @var AccessLogEnum
	 */
	private $accessLogs;

	/**
	 * alternativePhp
	 *
	 * @var PhpVersionEnum
	 */
	private $alternativePhp;

	/**
	 * pointers
	 *
	 * @var DomainPointer[]|null
	 */
	private $pointers;

	/**
	 * databases
	 *
	 * @var Database[]|null
	 */
	private $databases;

	/**
	 * databaseUsers
	 *
	 * @var DatabaseUser[]|null
	 */
	private $databaseUsers;

	/**
	 * integrationTests
	 *
	 * @var IntegrationTest[]|null
	 */
	private $integrationTests;

	/**
	 * ftpUsers
	 *
	 * @var FtpUser[]|null
	 */
	private $ftpUsers;

	/**
	 * newRelicKey
	 *
	 * @var string|null
	 */
	private $newRelicKey;

	/**
	 * phpMyAdmin
	 *
	 * @var bool|null
	 */
	private $phpMyAdmin;

	/**
	 * monitor
	 *
	 * @var bool|null
	 */
	private $monitor;


	/**
	 * id
	 *
	 * @return int|null
	 */
	public function getId()
	{
		return $this->id;
	}


	/**
	 * id
	 *
	 * @param int|null $id
	 * @return $this
	 */
	public function setId($id = null): self
	{
		$this->id = $id;
		return $this;
	}


	/**
	 * server
	 *
	 * @return Server|null
	 */
	public function getServer()
	{
		return $this->server;
	}


	/**
	 * server
	 *
	 * @param Server|null $server
	 * @return $this
	 */
	public function setServer($server = null): self
	{
		if ($server !== null && !$server instanceof \HipexPackApi\Generated\Schema\Type\Server) {
		    $server = new \HipexPackApi\Generated\Schema\Type\Server($server);
		}
		$this->server = $server;
		return $this;
	}


	/**
	 * sslCertificate
	 *
	 * @return SSLCertificate|null
	 */
	public function getSslCertificate()
	{
		return $this->sslCertificate;
	}


	/**
	 * sslCertificate
	 *
	 * @param SSLCertificate|null $sslCertificate
	 * @return $this
	 */
	public function setSslCertificate($sslCertificate = null): self
	{
		if ($sslCertificate !== null && !$sslCertificate instanceof \HipexPackApi\Generated\Schema\Type\SSLCertificate) {
		    $sslCertificate = new \HipexPackApi\Generated\Schema\Type\SSLCertificate($sslCertificate);
		}
		$this->sslCertificate = $sslCertificate;
		return $this;
	}


	/**
	 * letsEncryptSsl
	 *
	 * @return bool|null
	 */
	public function getLetsEncryptSsl()
	{
		return $this->letsEncryptSsl;
	}


	/**
	 * letsEncryptSsl
	 *
	 * @param bool|null $letsEncryptSsl
	 * @return $this
	 */
	public function setLetsEncryptSsl($letsEncryptSsl = null): self
	{
		$this->letsEncryptSsl = $letsEncryptSsl;
		return $this;
	}


	/**
	 * certificate
	 *
	 * @return SSLCertificate|null
	 */
	public function getCertificate()
	{
		return $this->certificate;
	}


	/**
	 * certificate
	 *
	 * @param SSLCertificate|null $certificate
	 * @return $this
	 */
	public function setCertificate($certificate = null): self
	{
		if ($certificate !== null && !$certificate instanceof \HipexPackApi\Generated\Schema\Type\SSLCertificate) {
		    $certificate = new \HipexPackApi\Generated\Schema\Type\SSLCertificate($certificate);
		}
		$this->certificate = $certificate;
		return $this;
	}


	/**
	 * domain
	 *
	 * @return string
	 */
	public function getDomain(): string
	{
		return $this->domain;
	}


	/**
	 * domain
	 *
	 * @param string $domain
	 * @return $this
	 */
	public function setDomain($domain): self
	{
		$this->domain = $domain;
		return $this;
	}


	/**
	 * backup
	 *
	 * @return bool
	 */
	public function getBackup(): bool
	{
		return $this->backup;
	}


	/**
	 * backup
	 *
	 * @param bool $backup
	 * @return $this
	 */
	public function setBackup($backup): self
	{
		$this->backup = $backup;
		return $this;
	}


	/**
	 * user
	 *
	 * @return User
	 */
	public function getUser(): User
	{
		return $this->user;
	}


	/**
	 * user
	 *
	 * @param User $user
	 * @return $this
	 */
	public function setUser($user): self
	{
		if ($user !== null && !$user instanceof \HipexPackApi\Generated\Schema\Type\User) {
		    $user = new \HipexPackApi\Generated\Schema\Type\User($user);
		}
		$this->user = $user;
		return $this;
	}


	/**
	 * customer
	 *
	 * @return Customer|null
	 */
	public function getCustomer()
	{
		return $this->customer;
	}


	/**
	 * customer
	 *
	 * @param Customer|null $customer
	 * @return $this
	 */
	public function setCustomer($customer = null): self
	{
		if ($customer !== null && !$customer instanceof \HipexPackApi\Generated\Schema\Type\Customer) {
		    $customer = new \HipexPackApi\Generated\Schema\Type\Customer($customer);
		}
		$this->customer = $customer;
		return $this;
	}


	/**
	 * lastPerformanceScan
	 *
	 * @return PerformanceScan|null
	 */
	public function getLastPerformanceScan()
	{
		return $this->lastPerformanceScan;
	}


	/**
	 * lastPerformanceScan
	 *
	 * @param PerformanceScan|null $lastPerformanceScan
	 * @return $this
	 */
	public function setLastPerformanceScan($lastPerformanceScan = null): self
	{
		if ($lastPerformanceScan !== null && !$lastPerformanceScan instanceof \HipexPackApi\Generated\Schema\Type\PerformanceScan) {
		    $lastPerformanceScan = new \HipexPackApi\Generated\Schema\Type\PerformanceScan($lastPerformanceScan);
		}
		$this->lastPerformanceScan = $lastPerformanceScan;
		return $this;
	}


	/**
	 * lastChecklist
	 *
	 * @return Checklist|null
	 */
	public function getLastChecklist()
	{
		return $this->lastChecklist;
	}


	/**
	 * lastChecklist
	 *
	 * @param Checklist|null $lastChecklist
	 * @return $this
	 */
	public function setLastChecklist($lastChecklist = null): self
	{
		if ($lastChecklist !== null && !$lastChecklist instanceof \HipexPackApi\Generated\Schema\Type\Checklist) {
		    $lastChecklist = new \HipexPackApi\Generated\Schema\Type\Checklist($lastChecklist);
		}
		$this->lastChecklist = $lastChecklist;
		return $this;
	}


	/**
	 * lastIntegrationTest
	 *
	 * @return IntegrationTest|null
	 */
	public function getLastIntegrationTest()
	{
		return $this->lastIntegrationTest;
	}


	/**
	 * lastIntegrationTest
	 *
	 * @param IntegrationTest|null $lastIntegrationTest
	 * @return $this
	 */
	public function setLastIntegrationTest($lastIntegrationTest = null): self
	{
		if ($lastIntegrationTest !== null && !$lastIntegrationTest instanceof \HipexPackApi\Generated\Schema\Type\IntegrationTest) {
		    $lastIntegrationTest = new \HipexPackApi\Generated\Schema\Type\IntegrationTest($lastIntegrationTest);
		}
		$this->lastIntegrationTest = $lastIntegrationTest;
		return $this;
	}


	/**
	 * mainPhp
	 *
	 * @return PhpVersionEnum
	 */
	public function getMainPhp(): PhpVersionEnum
	{
		return $this->mainPhp;
	}


	/**
	 * mainPhp
	 *
	 * @param PhpVersionEnum $mainPhp
	 * @return $this
	 */
	public function setMainPhp($mainPhp): self
	{
		$this->mainPhp = $mainPhp;
		return $this;
	}


	/**
	 * accessLogs
	 *
	 * @return AccessLogEnum
	 */
	public function getAccessLogs(): AccessLogEnum
	{
		return $this->accessLogs;
	}


	/**
	 * accessLogs
	 *
	 * @param AccessLogEnum $accessLogs
	 * @return $this
	 */
	public function setAccessLogs($accessLogs): self
	{
		$this->accessLogs = $accessLogs;
		return $this;
	}


	/**
	 * alternativePhp
	 *
	 * @return PhpVersionEnum
	 */
	public function getAlternativePhp(): PhpVersionEnum
	{
		return $this->alternativePhp;
	}


	/**
	 * alternativePhp
	 *
	 * @param PhpVersionEnum $alternativePhp
	 * @return $this
	 */
	public function setAlternativePhp($alternativePhp): self
	{
		$this->alternativePhp = $alternativePhp;
		return $this;
	}


	/**
	 * pointers
	 *
	 * @return DomainPointer[]|null
	 */
	public function getPointers()
	{
		return $this->pointers;
	}


	/**
	 * pointers
	 *
	 * @param DomainPointer[]|null $pointers
	 * @return $this
	 */
	public function setPointers($pointers = null): self
	{
		$this->pointers = [];
		foreach ($pointers as $item) {
		    $this->addPointersValue($item);
		}
		return $this;
	}


	private function addPointersValue($pointers)
	{
		if ($pointers !== null && !$pointers instanceof \HipexPackApi\Generated\Schema\Type\DomainPointer) {
		    $pointers = new \HipexPackApi\Generated\Schema\Type\DomainPointer($pointers);
		}
		$this->pointers[] = $pointers;
	}


	/**
	 * databases
	 *
	 * @return Database[]|null
	 */
	public function getDatabases()
	{
		return $this->databases;
	}


	/**
	 * databases
	 *
	 * @param Database[]|null $databases
	 * @return $this
	 */
	public function setDatabases($databases = null): self
	{
		$this->databases = [];
		foreach ($databases as $item) {
		    $this->addDatabasesValue($item);
		}
		return $this;
	}


	private function addDatabasesValue($databases)
	{
		if ($databases !== null && !$databases instanceof \HipexPackApi\Generated\Schema\Type\Database) {
		    $databases = new \HipexPackApi\Generated\Schema\Type\Database($databases);
		}
		$this->databases[] = $databases;
	}


	/**
	 * databaseUsers
	 *
	 * @return DatabaseUser[]|null
	 */
	public function getDatabaseUsers()
	{
		return $this->databaseUsers;
	}


	/**
	 * databaseUsers
	 *
	 * @param DatabaseUser[]|null $databaseUsers
	 * @return $this
	 */
	public function setDatabaseUsers($databaseUsers = null): self
	{
		$this->databaseUsers = [];
		foreach ($databaseUsers as $item) {
		    $this->addDatabaseUsersValue($item);
		}
		return $this;
	}


	private function addDatabaseUsersValue($databaseUsers)
	{
		if ($databaseUsers !== null && !$databaseUsers instanceof \HipexPackApi\Generated\Schema\Type\DatabaseUser) {
		    $databaseUsers = new \HipexPackApi\Generated\Schema\Type\DatabaseUser($databaseUsers);
		}
		$this->databaseUsers[] = $databaseUsers;
	}


	/**
	 * integrationTests
	 *
	 * @return IntegrationTest[]|null
	 */
	public function getIntegrationTests()
	{
		return $this->integrationTests;
	}


	/**
	 * integrationTests
	 *
	 * @param IntegrationTest[]|null $integrationTests
	 * @return $this
	 */
	public function setIntegrationTests($integrationTests = null): self
	{
		$this->integrationTests = [];
		foreach ($integrationTests as $item) {
		    $this->addIntegrationTestsValue($item);
		}
		return $this;
	}


	private function addIntegrationTestsValue($integrationTests)
	{
		if ($integrationTests !== null && !$integrationTests instanceof \HipexPackApi\Generated\Schema\Type\IntegrationTest) {
		    $integrationTests = new \HipexPackApi\Generated\Schema\Type\IntegrationTest($integrationTests);
		}
		$this->integrationTests[] = $integrationTests;
	}


	/**
	 * ftpUsers
	 *
	 * @return FtpUser[]|null
	 */
	public function getFtpUsers()
	{
		return $this->ftpUsers;
	}


	/**
	 * ftpUsers
	 *
	 * @param FtpUser[]|null $ftpUsers
	 * @return $this
	 */
	public function setFtpUsers($ftpUsers = null): self
	{
		$this->ftpUsers = [];
		foreach ($ftpUsers as $item) {
		    $this->addFtpUsersValue($item);
		}
		return $this;
	}


	private function addFtpUsersValue($ftpUsers)
	{
		if ($ftpUsers !== null && !$ftpUsers instanceof \HipexPackApi\Generated\Schema\Type\FtpUser) {
		    $ftpUsers = new \HipexPackApi\Generated\Schema\Type\FtpUser($ftpUsers);
		}
		$this->ftpUsers[] = $ftpUsers;
	}


	/**
	 * newRelicKey
	 *
	 * @return string|null
	 */
	public function getNewRelicKey()
	{
		return $this->newRelicKey;
	}


	/**
	 * newRelicKey
	 *
	 * @param string|null $newRelicKey
	 * @return $this
	 */
	public function setNewRelicKey($newRelicKey = null): self
	{
		$this->newRelicKey = $newRelicKey;
		return $this;
	}


	/**
	 * phpMyAdmin
	 *
	 * @return bool|null
	 */
	public function getPhpMyAdmin()
	{
		return $this->phpMyAdmin;
	}


	/**
	 * phpMyAdmin
	 *
	 * @param bool|null $phpMyAdmin
	 * @return $this
	 */
	public function setPhpMyAdmin($phpMyAdmin = null): self
	{
		$this->phpMyAdmin = $phpMyAdmin;
		return $this;
	}


	/**
	 * monitor
	 *
	 * @return bool|null
	 */
	public function getMonitor()
	{
		return $this->monitor;
	}


	/**
	 * monitor
	 *
	 * @param bool|null $monitor
	 * @return $this
	 */
	public function setMonitor($monitor = null): self
	{
		$this->monitor = $monitor;
		return $this;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		return [
		    'id' => $this->id,
		    'server' => $this->server,
		    'sslCertificate' => $this->sslCertificate,
		    'letsEncryptSsl' => $this->letsEncryptSsl,
		    'certificate' => $this->certificate,
		    'domain' => $this->domain,
		    'backup' => $this->backup,
		    'user' => $this->user,
		    'customer' => $this->customer,
		    'lastPerformanceScan' => $this->lastPerformanceScan,
		    'lastChecklist' => $this->lastChecklist,
		    'lastIntegrationTest' => $this->lastIntegrationTest,
		    'mainPhp' => $this->mainPhp,
		    'accessLogs' => $this->accessLogs,
		    'alternativePhp' => $this->alternativePhp,
		    'pointers' => $this->pointers,
		    'databases' => $this->databases,
		    'databaseUsers' => $this->databaseUsers,
		    'integrationTests' => $this->integrationTests,
		    'ftpUsers' => $this->ftpUsers,
		    'newRelicKey' => $this->newRelicKey,
		    'phpMyAdmin' => $this->phpMyAdmin,
		    'monitor' => $this->monitor,
		];
	}
}
