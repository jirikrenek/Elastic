<?php declare(strict_types = 1);

namespace Spameri\Elastic\Entity\Property;


class ElasticId implements \Spameri\Elastic\Entity\IValue, \Spameri\Elastic\Entity\Property\IElasticId
{

	/**
	 * @var string
	 */
	private $value;


	public function __construct(
		string $id
	)
	{
		if ($id === '') {
			throw new \InvalidArgumentException();
		}
		$this->value = $id;
	}


	public function value() : string
	{
		return $this->value;
	}

}
