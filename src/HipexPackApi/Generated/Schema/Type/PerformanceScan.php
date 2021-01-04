<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-21
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Type;

use DateTimeImmutable;
use DateTimeInterface;
use JsonSerializable;

/**
 * Performance / benchmark scan result entity.
 * @codeCoverageIgnore
 */
class PerformanceScan extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * id
	 *
	 * @var int
	 */
	private $id;

	/**
	 * url
	 *
	 * @var string
	 */
	private $url;

	/**
	 * createdAt
	 *
	 * @var DateTimeInterface
	 */
	private $createdAt;

	/**
	 * name
	 *
	 * @var string|null
	 */
	private $name;

	/**
	 * domain
	 *
	 * @var Domain|null
	 */
	private $domain;

	/**
	 * finished
	 *
	 * @var DateTimeInterface|null
	 */
	private $finished;

	/**
	 * score
	 *
	 * @var float|null
	 */
	private $score;

	/**
	 * screenDesktop
	 *
	 * @var string|null
	 */
	private $screenDesktop;

	/**
	 * screenMobile
	 *
	 * @var string|null
	 */
	private $screenMobile;

	/**
	 * groups
	 *
	 * @var PerformanceScanGroup[]|null
	 */
	private $groups;


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
	 * url
	 *
	 * @return string
	 */
	public function getUrl(): string
	{
		return $this->url;
	}


	/**
	 * url
	 *
	 * @param string $url
	 * @return $this
	 */
	public function setUrl($url): self
	{
		$this->url = $url;
		return $this;
	}


	/**
	 * createdAt
	 *
	 * @return DateTimeInterface
	 */
	public function getCreatedAt(): DateTimeInterface
	{
		return $this->createdAt;
	}


	/**
	 * createdAt
	 *
	 * @param DateTimeInterface $createdAt
	 * @return $this
	 */
	public function setCreatedAt($createdAt): self
	{
		if ($createdAt !== null && !$createdAt instanceof DateTimeInterface) {
		    $createdAt = new \DateTimeImmutable($createdAt);
		}
		$this->createdAt = $createdAt;
		return $this;
	}


	/**
	 * name
	 *
	 * @return string|null
	 */
	public function getName()
	{
		return $this->name;
	}


	/**
	 * name
	 *
	 * @param string|null $name
	 * @return $this
	 */
	public function setName($name = null): self
	{
		$this->name = $name === null ? null : (string) $name;
		return $this;
	}


	/**
	 * domain
	 *
	 * @return Domain|null
	 */
	public function getDomain()
	{
		return $this->domain;
	}


	/**
	 * domain
	 *
	 * @param Domain|null $domain
	 * @return $this
	 */
	public function setDomain($domain = null): self
	{
		if ($domain !== null && !$domain instanceof \HipexPackApi\Generated\Schema\Type\Domain) {
		    $domain = new \HipexPackApi\Generated\Schema\Type\Domain($domain);
		}
		$this->domain = $domain;
		return $this;
	}


	/**
	 * finished
	 *
	 * @return DateTimeInterface|null
	 */
	public function getFinished()
	{
		return $this->finished;
	}


	/**
	 * finished
	 *
	 * @param DateTimeInterface|null $finished
	 * @return $this
	 */
	public function setFinished($finished = null): self
	{
		if ($finished !== null && !$finished instanceof DateTimeInterface) {
		    $finished = new \DateTimeImmutable($finished);
		}
		$this->finished = $finished;
		return $this;
	}


	/**
	 * score
	 *
	 * @return float|null
	 */
	public function getScore()
	{
		return $this->score;
	}


	/**
	 * score
	 *
	 * @param float|null $score
	 * @return $this
	 */
	public function setScore($score = null): self
	{
		$this->score = $score === null ? null : (float) $score;
		return $this;
	}


	/**
	 * screenDesktop
	 *
	 * @return string|null
	 */
	public function getScreenDesktop()
	{
		return $this->screenDesktop;
	}


	/**
	 * screenDesktop
	 *
	 * @param string|null $screenDesktop
	 * @return $this
	 */
	public function setScreenDesktop($screenDesktop = null): self
	{
		$this->screenDesktop = $screenDesktop === null ? null : (string) $screenDesktop;
		return $this;
	}


	/**
	 * screenMobile
	 *
	 * @return string|null
	 */
	public function getScreenMobile()
	{
		return $this->screenMobile;
	}


	/**
	 * screenMobile
	 *
	 * @param string|null $screenMobile
	 * @return $this
	 */
	public function setScreenMobile($screenMobile = null): self
	{
		$this->screenMobile = $screenMobile === null ? null : (string) $screenMobile;
		return $this;
	}


	/**
	 * groups
	 *
	 * @return PerformanceScanGroup[]|null
	 */
	public function getGroups()
	{
		return $this->groups;
	}


	/**
	 * groups
	 *
	 * @param PerformanceScanGroup[]|null $groups
	 * @return $this
	 */
	public function setGroups($groups = null): self
	{
		$this->groups = [];
		if ($groups === null) return $this;
		foreach ($groups as $item) {
		    $this->addGroupsValue($item);
		}
		return $this;
	}


	private function addGroupsValue($groups)
	{
		if ($groups !== null && !$groups instanceof \HipexPackApi\Generated\Schema\Type\PerformanceScanGroup) {
		    $groups = new \HipexPackApi\Generated\Schema\Type\PerformanceScanGroup($groups);
		}
		$this->groups[] = $groups;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->id !== null) $result['id'] = $this->id;
		if ($this->url !== null) $result['url'] = $this->url;
		if ($this->createdAt !== null) $result['createdAt'] = $this->createdAt;
		if ($this->name !== null) $result['name'] = $this->name;
		if ($this->domain !== null) $result['domain'] = $this->domain;
		if ($this->finished !== null) $result['finished'] = $this->finished;
		if ($this->score !== null) $result['score'] = $this->score;
		if ($this->screenDesktop !== null) $result['screenDesktop'] = $this->screenDesktop;
		if ($this->screenMobile !== null) $result['screenMobile'] = $this->screenMobile;
		if ($this->groups !== null) $result['groups'] = $this->groups;
		return $result;
	}
}
