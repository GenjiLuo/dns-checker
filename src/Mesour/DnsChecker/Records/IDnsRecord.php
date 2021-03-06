<?php

namespace Mesour\DnsChecker;

/**
 * @author Matouš Němec <mesour.com>
 */
interface IDnsRecord
{

	public function getType(): string;

	public function getName(): string;

	public function getContent(): string;

	public function getTtl(): int;

	public function toArray(): array;

}
