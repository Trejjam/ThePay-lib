<?php
declare(strict_types=1);

namespace Tp;

use stdClass;

class Utils
{
	/**
	 * Filters out all keys that are not in the $keys list.
	 *
	 * @param array    $array
	 * @param string[] $keys
	 *
	 * @return array
	 */
	public static function filterKeys(array $array, array $keys) : array
	{
		$keysKeys = array_flip($keys);
		$presentKeysKeys = array_intersect_key($keysKeys, $array);
		$presentKeys = array_flip($presentKeysKeys);

		$filtered = [];
		foreach ($presentKeys as $key) {
			$filtered[$key] = $array[$key];
		}

		return $filtered;
	}

	/**
	 * @param array $value
	 *
	 * @return array
	 */
	public static function toArrayRecursive(array $value) : array
	{
		$array = [];
		foreach ($value as $k => $v) {
			$item =& $array[$k];

			if (
				is_array($v)
				|| $v instanceof stdClass
			) {
				$item = static::toArrayRecursive((array)$v);
			}
			else {
				$item = $v;
			}
		}

		return $array;
	}

	/**
	 * Checks wherether given $array is a list – keys are only numeric,
	 * sequential from zero without gaps. Returns true for empty arrays.
	 *
	 * @param array $array
	 *
	 * @return bool
	 */
	public static function isList(array $array) : bool
	{
		$count = count($array);
		if ($count) {
			$range = range(0, $count - 1);
		}
		else {
			$range = [];
		}
		$keys = array_keys($array);

		return $keys === $range;
	}

	/**
	 * @param string[][] $paths
	 */
	public static function requirePaths(array $paths)
	{
		$basePath = [__DIR__];
		foreach ($paths as $path) {
			$fullPathArray = array_merge($basePath, $path);
			$fullPathString = implode(DIRECTORY_SEPARATOR, $fullPathArray);
			require_once $fullPathString;
		}
	}
}
