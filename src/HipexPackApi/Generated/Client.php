<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-20
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated;

use HipexPackApi\BaseClient;
use HipexPackApi\Exception\ExceptionInterface;
use HipexPackApi\Generated\Schema\Input\AccountSelfInput;
use HipexPackApi\Generated\Schema\Input\ChecklistStartInput;
use HipexPackApi\Generated\Schema\Input\DatabaseInput;
use HipexPackApi\Generated\Schema\Input\DatabaseUserInput;
use HipexPackApi\Generated\Schema\Input\DomainInput;
use HipexPackApi\Generated\Schema\Input\DomainPointerInput;
use HipexPackApi\Generated\Schema\Input\FilterInput;
use HipexPackApi\Generated\Schema\Input\FtpUserInput;
use HipexPackApi\Generated\Schema\Input\SortInput;
use HipexPackApi\Generated\Schema\Input\SshKeyInput;
use HipexPackApi\Generated\Schema\Input\SslCertificateInput;
use HipexPackApi\Generated\Schema\Input\UserInput;
use HipexPackApi\Generated\Schema\Type\AccountSelf;
use HipexPackApi\Generated\Schema\Type\Authentication;
use HipexPackApi\Generated\Schema\Type\Checklist;
use HipexPackApi\Generated\Schema\Type\Database;
use HipexPackApi\Generated\Schema\Type\DatabaseUser;
use HipexPackApi\Generated\Schema\Type\Domain;
use HipexPackApi\Generated\Schema\Type\DomainPointer;
use HipexPackApi\Generated\Schema\Type\ForgotPassword;
use HipexPackApi\Generated\Schema\Type\FtpUser;
use HipexPackApi\Generated\Schema\Type\IntegrationTest;
use HipexPackApi\Generated\Schema\Type\MonitorValidation;
use HipexPackApi\Generated\Schema\Type\PerformanceScan;
use HipexPackApi\Generated\Schema\Type\RegisterUser;
use HipexPackApi\Generated\Schema\Type\SSHKey;
use HipexPackApi\Generated\Schema\Type\SSLCertificate;
use HipexPackApi\Generated\Schema\Type\User;
use HipexPackApi\Generated\Schema\Type\Verification;

/**
 * @codeCoverageIgnore
 */
class Client extends BaseClient
{
	/**
	 * @param FilterInput|null $filter
	 * @param int|null $limit
	 * @param int|null $skip
	 * @param SortInput|null $sort
	 * @return Checklist[]|null
	 * @throws ExceptionInterface
	 */
	public function queryChecklist(FilterInput $filter = null, int $limit = null, int $skip = null, SortInput $sort = null)
	{
		$arguments = [];
		$arguments['filter'] = $filter;
		$arguments['limit'] = $limit;
		$arguments['skip'] = $skip;
		$arguments['sort'] = $sort;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Query\Checklist(), $arguments);
	}


	/**
	 * @param string|null $path
	 * @param int|null $depth
	 * @param string|null $type
	 * @param int $userId
	 * @return Filesystem[]|null
	 * @throws ExceptionInterface
	 */
	public function queryFilesystemUser(string $path = null, int $depth = null, string $type = null, int $userId)
	{
		$arguments = [];
		$arguments['path'] = $path;
		$arguments['depth'] = $depth;
		$arguments['type'] = $type;
		$arguments['userId'] = $userId;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Query\FilesystemUser(), $arguments);
	}


	/**
	 * @param string|null $path
	 * @param int|null $depth
	 * @param string|null $type
	 * @param int $applicationId
	 * @return Filesystem[]|null
	 * @throws ExceptionInterface
	 */
	public function queryFilesystemApplication(string $path = null, int $depth = null, string $type = null, int $applicationId)
	{
		$arguments = [];
		$arguments['path'] = $path;
		$arguments['depth'] = $depth;
		$arguments['type'] = $type;
		$arguments['applicationId'] = $applicationId;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Query\FilesystemApplication(), $arguments);
	}


	/**
	 * @param FilterInput|null $filter
	 * @param int|null $limit
	 * @param int|null $skip
	 * @param SortInput|null $sort
	 * @return Domain[]|null
	 * @throws ExceptionInterface
	 */
	public function queryDomain(FilterInput $filter = null, int $limit = null, int $skip = null, SortInput $sort = null)
	{
		$arguments = [];
		$arguments['filter'] = $filter;
		$arguments['limit'] = $limit;
		$arguments['skip'] = $skip;
		$arguments['sort'] = $sort;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Query\Domain(), $arguments);
	}


	/**
	 * @param FilterInput|null $filter
	 * @param int|null $limit
	 * @param int|null $skip
	 * @param SortInput|null $sort
	 * @return DatabaseUser[]|null
	 * @throws ExceptionInterface
	 */
	public function queryDatabaseUser(FilterInput $filter = null, int $limit = null, int $skip = null, SortInput $sort = null)
	{
		$arguments = [];
		$arguments['filter'] = $filter;
		$arguments['limit'] = $limit;
		$arguments['skip'] = $skip;
		$arguments['sort'] = $sort;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Query\DatabaseUser(), $arguments);
	}


	/**
	 * @param FilterInput|null $filter
	 * @param int|null $limit
	 * @param int|null $skip
	 * @param SortInput|null $sort
	 * @return Invoice[]|null
	 * @throws ExceptionInterface
	 */
	public function queryInvoice(FilterInput $filter = null, int $limit = null, int $skip = null, SortInput $sort = null)
	{
		$arguments = [];
		$arguments['filter'] = $filter;
		$arguments['limit'] = $limit;
		$arguments['skip'] = $skip;
		$arguments['sort'] = $sort;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Query\Invoice(), $arguments);
	}


	/**
	 * @param FilterInput|null $filter
	 * @param int|null $limit
	 * @param int|null $skip
	 * @param SortInput|null $sort
	 * @return FtpUser[]|null
	 * @throws ExceptionInterface
	 */
	public function queryFtpUser(FilterInput $filter = null, int $limit = null, int $skip = null, SortInput $sort = null)
	{
		$arguments = [];
		$arguments['filter'] = $filter;
		$arguments['limit'] = $limit;
		$arguments['skip'] = $skip;
		$arguments['sort'] = $sort;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Query\FtpUser(), $arguments);
	}


	/**
	 * @param FilterInput|null $filter
	 * @param int|null $limit
	 * @param int|null $skip
	 * @param SortInput|null $sort
	 * @return User[]|null
	 * @throws ExceptionInterface
	 */
	public function queryUser(FilterInput $filter = null, int $limit = null, int $skip = null, SortInput $sort = null)
	{
		$arguments = [];
		$arguments['filter'] = $filter;
		$arguments['limit'] = $limit;
		$arguments['skip'] = $skip;
		$arguments['sort'] = $sort;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Query\User(), $arguments);
	}


	/**
	 * @param string|null $domainName
	 * @return MonitorValidation|null
	 * @throws ExceptionInterface
	 */
	public function queryMonitorValidate(string $domainName = null)
	{
		$arguments = [];
		$arguments['domainName'] = $domainName;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Query\MonitorValidate(), $arguments);
	}


	/**
	 * @param FilterInput|null $filter
	 * @param int|null $limit
	 * @param int|null $skip
	 * @param SortInput|null $sort
	 * @return Server[]|null
	 * @throws ExceptionInterface
	 */
	public function queryServer(FilterInput $filter = null, int $limit = null, int $skip = null, SortInput $sort = null)
	{
		$arguments = [];
		$arguments['filter'] = $filter;
		$arguments['limit'] = $limit;
		$arguments['skip'] = $skip;
		$arguments['sort'] = $sort;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Query\Server(), $arguments);
	}


	/**
	 * @param FilterInput|null $filter
	 * @param int|null $limit
	 * @param int|null $skip
	 * @param SortInput|null $sort
	 * @return DomainPointer[]|null
	 * @throws ExceptionInterface
	 */
	public function queryDomainPointer(FilterInput $filter = null, int $limit = null, int $skip = null, SortInput $sort = null)
	{
		$arguments = [];
		$arguments['filter'] = $filter;
		$arguments['limit'] = $limit;
		$arguments['skip'] = $skip;
		$arguments['sort'] = $sort;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Query\DomainPointer(), $arguments);
	}


	/**
	 * @param int|null $domain
	 * @param int|null $database
	 * @param string|null $id
	 * @return Backup[]|null
	 * @throws ExceptionInterface
	 */
	public function queryBackup(int $domain = null, int $database = null, string $id = null)
	{
		$arguments = [];
		$arguments['domain'] = $domain;
		$arguments['database'] = $database;
		$arguments['id'] = $id;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Query\Backup(), $arguments);
	}


	/**
	 * @param string|null $applicationId
	 * @param string|null $serverId
	 * @param string|null $startTime
	 * @param string|null $endTime
	 * @return MonitorQueryValue[]|null
	 * @throws ExceptionInterface
	 */
	public function queryMonitorDiskSpace(string $applicationId = null, string $serverId = null, string $startTime = null, string $endTime = null)
	{
		$arguments = [];
		$arguments['applicationId'] = $applicationId;
		$arguments['serverId'] = $serverId;
		$arguments['startTime'] = $startTime;
		$arguments['endTime'] = $endTime;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Query\MonitorDiskSpace(), $arguments);
	}


	/**
	 * @param string|null $applicationId
	 * @param string|null $serverId
	 * @param string|null $startTime
	 * @param string|null $endTime
	 * @return MonitorQueryValue[]|null
	 * @throws ExceptionInterface
	 */
	public function queryMonitorDiskIo(string $applicationId = null, string $serverId = null, string $startTime = null, string $endTime = null)
	{
		$arguments = [];
		$arguments['applicationId'] = $applicationId;
		$arguments['serverId'] = $serverId;
		$arguments['startTime'] = $startTime;
		$arguments['endTime'] = $endTime;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Query\MonitorDiskIo(), $arguments);
	}


	/**
	 * @param string|null $applicationId
	 * @param string|null $serverId
	 * @param string|null $startTime
	 * @param string|null $endTime
	 * @return MonitorQueryValue[]|null
	 * @throws ExceptionInterface
	 */
	public function queryMonitorNetworkTraffic(string $applicationId = null, string $serverId = null, string $startTime = null, string $endTime = null)
	{
		$arguments = [];
		$arguments['applicationId'] = $applicationId;
		$arguments['serverId'] = $serverId;
		$arguments['startTime'] = $startTime;
		$arguments['endTime'] = $endTime;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Query\MonitorNetworkTraffic(), $arguments);
	}


	/**
	 * @param string|null $applicationId
	 * @param string|null $serverId
	 * @param string|null $startTime
	 * @param string|null $endTime
	 * @return MonitorQueryValue[]|null
	 * @throws ExceptionInterface
	 */
	public function queryMonitorServerLoad(string $applicationId = null, string $serverId = null, string $startTime = null, string $endTime = null)
	{
		$arguments = [];
		$arguments['applicationId'] = $applicationId;
		$arguments['serverId'] = $serverId;
		$arguments['startTime'] = $startTime;
		$arguments['endTime'] = $endTime;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Query\MonitorServerLoad(), $arguments);
	}


	/**
	 * @param string|null $applicationId
	 * @param string|null $serverId
	 * @param string|null $startTime
	 * @param string|null $endTime
	 * @return MonitorQueryValue[]|null
	 * @throws ExceptionInterface
	 */
	public function queryMonitorMemoryUsage(string $applicationId = null, string $serverId = null, string $startTime = null, string $endTime = null)
	{
		$arguments = [];
		$arguments['applicationId'] = $applicationId;
		$arguments['serverId'] = $serverId;
		$arguments['startTime'] = $startTime;
		$arguments['endTime'] = $endTime;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Query\MonitorMemoryUsage(), $arguments);
	}


	/**
	 * @param FilterInput|null $filter
	 * @param int|null $limit
	 * @param int|null $skip
	 * @param SortInput|null $sort
	 * @return SSLCertificate[]|null
	 * @throws ExceptionInterface
	 */
	public function querySSLCertificate(FilterInput $filter = null, int $limit = null, int $skip = null, SortInput $sort = null)
	{
		$arguments = [];
		$arguments['filter'] = $filter;
		$arguments['limit'] = $limit;
		$arguments['skip'] = $skip;
		$arguments['sort'] = $sort;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Query\SSLCertificate(), $arguments);
	}


	/**
	 * @param FilterInput|null $filter
	 * @param int|null $limit
	 * @param int|null $skip
	 * @param SortInput|null $sort
	 * @return Database[]|null
	 * @throws ExceptionInterface
	 */
	public function queryDatabase(FilterInput $filter = null, int $limit = null, int $skip = null, SortInput $sort = null)
	{
		$arguments = [];
		$arguments['filter'] = $filter;
		$arguments['limit'] = $limit;
		$arguments['skip'] = $skip;
		$arguments['sort'] = $sort;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Query\Database(), $arguments);
	}


	/**
	 * @param FilterInput|null $filter
	 * @param int|null $limit
	 * @param int|null $skip
	 * @param SortInput|null $sort
	 * @return ServerChange[]|null
	 * @throws ExceptionInterface
	 */
	public function queryServerChange(FilterInput $filter = null, int $limit = null, int $skip = null, SortInput $sort = null)
	{
		$arguments = [];
		$arguments['filter'] = $filter;
		$arguments['limit'] = $limit;
		$arguments['skip'] = $skip;
		$arguments['sort'] = $sort;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Query\ServerChange(), $arguments);
	}


	/**
	 * @param FilterInput|null $filter
	 * @param int|null $limit
	 * @param int|null $skip
	 * @param SortInput|null $sort
	 * @return IntegrationTest[]|null
	 * @throws ExceptionInterface
	 */
	public function queryIntegrationTest(FilterInput $filter = null, int $limit = null, int $skip = null, SortInput $sort = null)
	{
		$arguments = [];
		$arguments['filter'] = $filter;
		$arguments['limit'] = $limit;
		$arguments['skip'] = $skip;
		$arguments['sort'] = $sort;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Query\IntegrationTest(), $arguments);
	}


	/**
	 * @param FilterInput|null $filter
	 * @param int|null $limit
	 * @param int|null $skip
	 * @param SortInput|null $sort
	 * @return PerformanceScan[]|null
	 * @throws ExceptionInterface
	 */
	public function queryPerformanceScan(FilterInput $filter = null, int $limit = null, int $skip = null, SortInput $sort = null)
	{
		$arguments = [];
		$arguments['filter'] = $filter;
		$arguments['limit'] = $limit;
		$arguments['skip'] = $skip;
		$arguments['sort'] = $sort;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Query\PerformanceScan(), $arguments);
	}


	/**
	 * @param FilterInput|null $filter
	 * @param int|null $limit
	 * @param int|null $skip
	 * @param SortInput|null $sort
	 * @return SSHKey[]|null
	 * @throws ExceptionInterface
	 */
	public function querySSHKey(FilterInput $filter = null, int $limit = null, int $skip = null, SortInput $sort = null)
	{
		$arguments = [];
		$arguments['filter'] = $filter;
		$arguments['limit'] = $limit;
		$arguments['skip'] = $skip;
		$arguments['sort'] = $sort;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Query\SSHKey(), $arguments);
	}


	/**
	 * @param SshKeyInput|null $entity
	 * @param bool $delete
	 * @return SSHKey|null
	 * @throws ExceptionInterface
	 */
	public function mutateSSHKey(SshKeyInput $entity = null, bool $delete)
	{
		$arguments = [];
		$arguments['entity'] = $entity;
		$arguments['delete'] = $delete;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Mutation\SSHKey(), $arguments);
	}


	/**
	 * @param string $website
	 * @return PerformanceScan|null
	 * @throws ExceptionInterface
	 */
	public function mutatePerformanceScanStart(string $website)
	{
		$arguments = [];
		$arguments['website'] = $website;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Mutation\PerformanceScanStart(), $arguments);
	}


	/**
	 * @param UserInput|null $entity
	 * @param bool $delete
	 * @return User|null
	 * @throws ExceptionInterface
	 */
	public function mutateUser(UserInput $entity = null, bool $delete)
	{
		$arguments = [];
		$arguments['entity'] = $entity;
		$arguments['delete'] = $delete;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Mutation\User(), $arguments);
	}


	/**
	 * @param ChecklistStartInput|null $checklist
	 * @return Checklist|null
	 * @throws ExceptionInterface
	 */
	public function mutateChecklistStart(ChecklistStartInput $checklist = null)
	{
		$arguments = [];
		$arguments['checklist'] = $checklist;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Mutation\ChecklistStart(), $arguments);
	}


	/**
	 * @param string $username
	 * @param string $password
	 * @return Authentication|null
	 * @throws ExceptionInterface
	 */
	public function mutateLogin(string $username, string $password)
	{
		$arguments = [];
		$arguments['username'] = $username;
		$arguments['password'] = $password;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Mutation\Login(), $arguments);
	}


	/**
	 * @param AccountSelfInput|null $entity
	 * @param bool $delete
	 * @return AccountSelf|null
	 * @throws ExceptionInterface
	 */
	public function mutateAccountSelf(AccountSelfInput $entity = null, bool $delete)
	{
		$arguments = [];
		$arguments['entity'] = $entity;
		$arguments['delete'] = $delete;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Mutation\AccountSelf(), $arguments);
	}


	/**
	 * @param DomainPointerInput|null $entity
	 * @param bool $delete
	 * @return DomainPointer|null
	 * @throws ExceptionInterface
	 */
	public function mutateDomainPointer(DomainPointerInput $entity = null, bool $delete)
	{
		$arguments = [];
		$arguments['entity'] = $entity;
		$arguments['delete'] = $delete;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Mutation\DomainPointer(), $arguments);
	}


	/**
	 * @param int $id
	 * @return IntegrationTest|null
	 * @throws ExceptionInterface
	 */
	public function mutateIntegrationTestStart(int $id)
	{
		$arguments = [];
		$arguments['id'] = $id;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Mutation\IntegrationTestStart(), $arguments);
	}


	/**
	 * @param FtpUserInput|null $entity
	 * @param bool $delete
	 * @return FtpUser|null
	 * @throws ExceptionInterface
	 */
	public function mutateFtpUser(FtpUserInput $entity = null, bool $delete)
	{
		$arguments = [];
		$arguments['entity'] = $entity;
		$arguments['delete'] = $delete;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Mutation\FtpUser(), $arguments);
	}


	/**
	 * @param DomainInput|null $entity
	 * @param bool $delete
	 * @return Domain|null
	 * @throws ExceptionInterface
	 */
	public function mutateDomain(DomainInput $entity = null, bool $delete)
	{
		$arguments = [];
		$arguments['entity'] = $entity;
		$arguments['delete'] = $delete;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Mutation\Domain(), $arguments);
	}


	/**
	 * @param string $email
	 * @param string $name
	 * @param string $password
	 * @return RegisterUser|null
	 * @throws ExceptionInterface
	 */
	public function mutateRegisterUser(string $email, string $name, string $password)
	{
		$arguments = [];
		$arguments['email'] = $email;
		$arguments['name'] = $name;
		$arguments['password'] = $password;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Mutation\RegisterUser(), $arguments);
	}


	/**
	 * @param string $email
	 * @param string $verificationToken
	 * @param string $newPassword
	 * @param string $confirmNewPassword
	 * @return Verification|null
	 * @throws ExceptionInterface
	 */
	public function mutateVerifyForgotPassword(string $email, string $verificationToken, string $newPassword, string $confirmNewPassword)
	{
		$arguments = [];
		$arguments['email'] = $email;
		$arguments['verificationToken'] = $verificationToken;
		$arguments['newPassword'] = $newPassword;
		$arguments['confirmNewPassword'] = $confirmNewPassword;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Mutation\VerifyForgotPassword(), $arguments);
	}


	/**
	 * @param string $email
	 * @param string $verificationToken
	 * @return Verification|null
	 * @throws ExceptionInterface
	 */
	public function mutateVerifyRegisteredUser(string $email, string $verificationToken)
	{
		$arguments = [];
		$arguments['email'] = $email;
		$arguments['verificationToken'] = $verificationToken;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Mutation\VerifyRegisteredUser(), $arguments);
	}


	/**
	 * @param string $email
	 * @return ForgotPassword|null
	 * @throws ExceptionInterface
	 */
	public function mutateForgotPassword(string $email)
	{
		$arguments = [];
		$arguments['email'] = $email;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Mutation\ForgotPassword(), $arguments);
	}


	/**
	 * @param SslCertificateInput|null $entity
	 * @param bool $delete
	 * @return SSLCertificate|null
	 * @throws ExceptionInterface
	 */
	public function mutateSSLCertificate(SslCertificateInput $entity = null, bool $delete)
	{
		$arguments = [];
		$arguments['entity'] = $entity;
		$arguments['delete'] = $delete;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Mutation\SSLCertificate(), $arguments);
	}


	/**
	 * @param DatabaseInput|null $entity
	 * @param bool $delete
	 * @return Database|null
	 * @throws ExceptionInterface
	 */
	public function mutateDatabase(DatabaseInput $entity = null, bool $delete)
	{
		$arguments = [];
		$arguments['entity'] = $entity;
		$arguments['delete'] = $delete;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Mutation\Database(), $arguments);
	}


	/**
	 * @param DatabaseUserInput|null $entity
	 * @param bool $delete
	 * @return DatabaseUser|null
	 * @throws ExceptionInterface
	 */
	public function mutateDatabaseUser(DatabaseUserInput $entity = null, bool $delete)
	{
		$arguments = [];
		$arguments['entity'] = $entity;
		$arguments['delete'] = $delete;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Mutation\DatabaseUser(), $arguments);
	}
}
