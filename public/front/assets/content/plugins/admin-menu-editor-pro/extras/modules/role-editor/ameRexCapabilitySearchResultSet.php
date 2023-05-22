<?php


class ameRexCapabilitySearchResultSet implements Countable, ArrayAccess, IteratorAggregate {
	protected $results = array();

	public function addResult($capabilityName, $componentId, ameRexComponentCapabilityInfo $info = null) {
		if ( !isset($this->results[$capabilityName]) ) {
			$this->results[$capabilityName] = array();
		}
		//Only the first result per component is used.
		if ( isset($this->results[$capabilityName][$componentId]) ) {
			return;
		}
		$this->results[$capabilityName][$componentId] = $info;
	}

	/**
	 * @inheritDoc
	 */
	public function offsetExists($offset): bool {
		return array_key_exists($offset, $this->results);
	}

	/**
	 * @inheritDoc
	 */
	public function offsetGet($offset): mixed {
		return $this->results[$offset];
	}

	/**
	 * @inheritDoc
	 */
	public function offsetSet($offset, $value): void {
		$this->results[$offset] = $value;
	}

	/**
	 * @inheritDoc
	 */
	public function offsetUnset($offset): void {
		unset($this->results[$offset]);
	}

	/**
	 * @inheritDoc
	 */
	public function count(): int {
		return count($this->results);
	}

	/**
	 * @inheritDoc
	 */
	public function getIterator(): Traversable {
		return new ArrayIterator($this->results);
	}
}

class ameRexComponentCapabilityInfo implements ArrayAccess {
	/**
	 * @var string[]|null
	 */
	public $permissions = null;

	/**
	 * @var string|null
	 */
	public $notes = null;

	/**
	 * @var string|null
	 */
	public $documentationUrl = null;

	public static function fromArray($properties) {
		$instance = new self();
		if ( isset($properties['permissions']) ) {
			$instance->permissions = $properties['permissions'];
		}
		if ( isset($properties['notes']) ) {
			$instance->notes = $properties['notes'];
		}
		if ( isset($properties['documentationUrl']) ) {
			$instance->documentationUrl = $properties['documentationUrl'];
		}
		return $instance;
	}

	/**
	 * @inheritDoc
	 */
	public function offsetExists($offset): bool {
		return isset($this->$offset);
	}

	/**
	 * @inheritDoc
	 */
	public function offsetGet($offset): mixed {
		return $this->$offset;
	}

	/**
	 * @inheritDoc
	 */
	public function offsetSet($offset, $value): void {
		$this->$offset = $value;
	}

	/**
	 * @inheritDoc
	 */
	public function offsetUnset($offset): void {
		$this->$offset = null;
	}
}
