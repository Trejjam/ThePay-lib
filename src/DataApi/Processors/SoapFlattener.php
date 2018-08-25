<?php declare(strict_types = 1);

namespace Tp\DataApi\Processors;

class SoapFlattener extends ProcessorWithPaths
{

	protected function processHash(array $value, array $currentPath): array
	{
		// If the hash contains only one item and its key appended to the path
		// is on the list of list paths, this one item is skipped and the list
		// is processed directly.
		$count = count($value);
		if ($count === 1) {
			[$key] = array_keys($value);
			$itemPath = array_merge($currentPath, [$key]);
			$onPath = $this->onPath($itemPath);
			if ($onPath) {
				[$item] = array_values($value);
				$processed = $this->processItem($item, $currentPath);
			} else {
				$processed = parent::processHash($value, $currentPath);
			}
		} else {
			$processed = parent::processHash($value, $currentPath);
		}

		return $processed;
	}

	protected function convertValue($value, array $itemPath)
	{
		return $value;
	}

}
