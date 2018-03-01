<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Type;

use DateTime;
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
	 * @var DateTime
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
	 * @var DateTime|null
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
	 * @return DateTime
	 */
	public function getCreatedAt(): DateTime
	{
		return $this->createdAt;
	}


	/**
	 * createdAt
	 *
	 * @param DateTime $createdAt
	 * @return $this
	 */
	public function setCreatedAt($createdAt): self
	{
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
		$this->name = $name;
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
	 * @return DateTime|null
	 */
	public function getFinished()
	{
		return $this->finished;
	}


	/**
	 * finished
	 *
	 * @param DateTime|null $finished
	 * @return $this
	 */
	public function setFinished($finished = null): self
	{
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
		$this->score = $score;
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
		$this->screenDesktop = $screenDesktop;
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
		$this->screenMobile = $screenMobile;
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
		return [
		    'id' => $this->id,
		    'url' => $this->url,
		    'createdAt' => $this->createdAt,
		    'name' => $this->name,
		    'domain' => $this->domain,
		    'finished' => $this->finished,
		    'score' => $this->score,
		    'screenDesktop' => $this->screenDesktop,
		    'screenMobile' => $this->screenMobile,
		    'groups' => $this->groups,
		];
	}
}
