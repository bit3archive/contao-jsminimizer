<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  InfinitySoft 2011
 * @author     Tristan Lins <tristan.lins@infinitysoft.de>
 * @package    Compression API
 * @license    LGPL
 * @filesource
 */

/**
 * Class JsMinimizer
 *
 * wrapper class for the jsmin lib (https://github.com/rgrove/jsmin-php)
 * @copyright  InfinitySoft 2011
 * @author     Tristan Lins <tristan.lins@infinitysoft.de>
 * @package    Compression API
 */
class JsMinimizer extends AbstractMinimizer
{
	/**
	 * load the jsmin class
	 */
	public function  __construct()
	{
		parent::__construct();
		include_once TL_ROOT . '/plugins/jsmin/jsmin.php';
	}

	
	/**
	 * (non-PHPdoc)
	 * @see JsMinimizer::minimizeCode($strCode)
	 */
	public function minimizeCode($strCode)
	{
		return JsMin::minify($strCode);
	}

}
?>