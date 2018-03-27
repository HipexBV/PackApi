<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated;

use HipexPackApi\BaseClient;
use HipexPackApi\Exception\ExceptionInterface;
use HipexPackApi\Generated\Schema\Input\DatabaseInput;
use HipexPackApi\Generated\Schema\Input\DatabaseUserInput;
use HipexPackApi\Generated\Schema\Input\DomainInput;
use HipexPackApi\Generated\Schema\Input\DomainPointerInput;
use HipexPackApi\Generated\Schema\Input\FilterInput;
use HipexPackApi\Generated\Schema\Input\FtpUserInput;
use HipexPackApi\Generated\Schema\Input\SortInput;
use HipexPackApi\Generated\Schema\Input\SslCertificateInput;
use HipexPackApi\Generated\Schema\Input\UserInput;
use HipexPackApi\Generated\Schema\Type\Authentication;
use HipexPackApi\Generated\Schema\Type\Checklist;
use HipexPackApi\Generated\Schema\Type\Database;
use HipexPackApi\Generated\Schema\Type\DatabaseUser;
use HipexPackApi\Generated\Schema\Type\Domain;
use HipexPackApi\Generated\Schema\Type\DomainPointer;
use HipexPackApi\Generated\Schema\Type\FileTypeEnum;
use HipexPackApi\Generated\Schema\Type\Filesystem;
use HipexPackApi\Generated\Schema\Type\FtpUser;
use HipexPackApi\Generated\Schema\Type\IntegrationTest;
use HipexPackApi\Generated\Schema\Type\PerformanceScan;
use HipexPackApi\Generated\Schema\Type\SSHKey;
use HipexPackApi\Generated\Schema\Type\SSLCertificate;
use HipexPackApi\Generated\Schema\Type\Server;
use HipexPackApi\Generated\Schema\Type\User;

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
	 * @param FileTypeEnum|null $type
	 * @param int $userId
	 * @return Filesystem[]|null
	 * @throws ExceptionInterface
	 */
	public function queryFilesystemUser(string $path = null, int $depth = null, FileTypeEnum $type = null, int $userId)
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
	 * @param FileTypeEnum|null $type
	 * @param int $applicationId
	 * @return Filesystem[]|null
	 * @throws ExceptionInterface
	 */
	public function queryFilesystemApplication(string $path = null, int $depth = null, FileTypeEnum $type = null, int $applicationId)
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
	 * @param int $id
	 * @return Checklist|null
	 * @throws ExceptionInterface
	 */
	public function mutateChecklistStart(int $id)
	{
		$arguments = [];
		$arguments['id'] = $id;

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
	 * @param SslCertificateInput|null $entity
	 * @param bool $delete
	 * @return SSLCertificate|null
	 * @throws ExceptionInterface
	 */
	public function mutateSslCertificate(SslCertificateInput $entity = null, bool $delete)
	{
		$arguments = [];
		$arguments['entity'] = $entity;
		$arguments['delete'] = $delete;

		/** @noinspection PhpUndefinedFieldInspection */
		return $this->query(new \HipexPackApi\Generated\Schema\Mutation\SslCertificate(), $arguments);
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
