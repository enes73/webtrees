<?php
namespace WT;

use PHPUnit_Framework_TestCase;

/**
 * Test harness for the class WT_Module_Menu
 *
 * @package   webtrees
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2014 webtrees development team
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2
 */

class ModuleMenuTest extends PHPUnit_Framework_TestCase {
	/**
	 * Prepare the environment for these tests
	 *
	 * @return void
	 */
	public function setUp() {
	}

	/**
	 * Test that the class exists
	 *
	 * @return void
	 */
	public function testClassExists() {
		$this->assertTrue(interface_exists('\WT_Module_Menu'));
	}
}
