<?php

namespace Felix\Scraper;

class Str
{

	/**
	 * Eliminar espacios en blanco de una cadena.
	 * 
	 * @param  string $str Cada de texto.
	 *
	 * @return string
	 */
	public static function remove_spaces($str)
	{
		$str = html_entity_decode($str);
		$str = str_replace("\xc2\xa0", '', $str);
		$str = trim($str);

		return $str;
	}

	/**
	 * Eliminar multiples espacios en blanco entre dos cadenas.
	 * 
	 * @param  string $str Cada de texto.
	 * 
	 * @return string
	 */
	public static function remove_multi_spaces($str)
	{
		$str = preg_replace('!\s+!', ' ', $str);
		
		return $str;
	}

	/**
	 * Limpiar una cadena de caracteres.
	 * 
	 * @param string $str Cadena de caracteres a limpiar. 
	 * 
	 * @return string
	 */
	public static function clean($str)
	{
		$str = self::remove_spaces($str);
		$str = self::remove_multi_spaces($str);

		return $str;
	}
}