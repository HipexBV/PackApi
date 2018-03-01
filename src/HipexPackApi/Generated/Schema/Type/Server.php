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
 * Server entity. Represents a physical or virtual server. You can set one or more domains, databases and ssh users on a server
 * @codeCoverageIgnore
 */
class Server extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * id
	 *
	 * @var int
	 */
	private $id;

	/**
	 * name
	 *
	 * @var string
	 */
	private $name;

	/**
	 * customer
	 *
	 * @var Customer|null
	 */
	private $customer;

	/**
	 * domains
	 *
	 * @var Domain[]|null
	 */
	private $domains;

	/**
	 * users
	 *
	 * @var User[]|null
	 */
	private $users;

	/**
	 * sshKeys
	 *
	 * @var SSHKey[]|null
	 */
	private $sshKeys;


	/**
	 * id
	 *
	 * @return int
	 */
	public function getId(): int
	{
		return $this->id;
	}


	/**
	 * id
	 *
	 * @param int $id
	 * @return $this
	 */
	public function setId($id): self
	{
		$this->id = $id;
		return $this;
	}


	/**
	 * name
	 *
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}


	/**
	 * name
	 *
	 * @param string $name
	 * @return $this
	 */
	public function setName($name): self
	{
		$this->name = $name;
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
	 * domains
	 *
	 * @return Domain[]|null
	 */
	public function getDomains()
	{
		return $this->domains;
	}


	/**
	 * domains
	 *
	 * @param Domain[]|null $domains
	 * @return $this
	 */
	public function setDomains($domains = null): self
	{
		$this->domains = [];
		foreach ($domains as $item) {
		    $this->addDomainsValue($item);
		}
		return $this;
	}


	private function addDomainsValue($domains)
	{
		if ($domains !== null && !$domains instanceof \HipexPackApi\Generated\Schema\Type\Domain) {
		    $domains = new \HipexPackApi\Generated\Schema\Type\Domain($domains);
		}
		$this->domains[] = $domains;
	}


	/**
	 * users
	 *
	 * @return User[]|null
	 */
	public function getUsers()
	{
		return $this->users;
	}


	/**
	 * users
	 *
	 * @param User[]|null $users
	 * @return $this
	 */
	public function setUsers($users = null): self
	{
		$this->users = [];
		foreach ($users as $item) {
		    $this->addUsersValue($item);
		}
		return $this;
	}


	private function addUsersValue($users)
	{
		if ($users !== null && !$users instanceof \HipexPackApi\Generated\Schema\Type\User) {
		    $users = new \HipexPackApi\Generated\Schema\Type\User($users);
		}
		$this->users[] = $users;
	}


	/**
	 * sshKeys
	 *
	 * @return SSHKey[]|null
	 */
	public function getSshKeys()
	{
		return $this->sshKeys;
	}


	/**
	 * sshKeys
	 *
	 * @param SSHKey[]|null $sshKeys
	 * @return $this
	 */
	public function setSshKeys($sshKeys = null): self
	{
		$this->sshKeys = [];
		foreach ($sshKeys as $item) {
		    $this->addSshKeysValue($item);
		}
		return $this;
	}


	private function addSshKeysValue($sshKeys)
	{
		if ($sshKeys !== null && !$sshKeys instanceof \HipexPackApi\Generated\Schema\Type\SSHKey) {
		    $sshKeys = new \HipexPackApi\Generated\Schema\Type\SSHKey($sshKeys);
		}
		$this->sshKeys[] = $sshKeys;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		return [
		    'id' => $this->id,
		    'name' => $this->name,
		    'customer' => $this->customer,
		    'domains' => $this->domains,
		    'users' => $this->users,
		    'sshKeys' => $this->sshKeys,
		];
	}
}
