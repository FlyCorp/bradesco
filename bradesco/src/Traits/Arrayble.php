<?php
/**
 * Created by PhpStorm.
 * User: railam.ribeiro
 * Date: 08/08/20
 * Time: 17:50
 */

namespace FlyCorp\Bradesco\Traits;

trait Arrayble
{
	public function toArray()
	{
		$array = (array)get_object_vars($this);

		foreach ($array as $key => $value) {
			if (is_object($value)) {
				$array[$key] = $value->toArray();
			}
		}
		return array_filter($array);
	}
}