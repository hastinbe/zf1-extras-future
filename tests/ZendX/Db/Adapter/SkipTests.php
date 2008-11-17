<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   ZendX
 * @package    ZendX_Db
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2008 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

/**
 * PHPUnit test case
 */
require_once 'PHPUnit/Framework/TestCase.php';


/**
 * @package    Zend_Db
 * @subpackage UnitTests
 */
abstract class ZendX_Db_Adapter_Skip_CommonTest extends PHPUnit_Framework_TestCase
{
    abstract public function getDriver();

    public function setUp()
    {
        $driver = $this->getDriver();
        $this->markTestSkipped("Testing ZendX_Db_Adapter_$driver is not enabled in TestConfiguration.php");
    }

    public function testAdapter()
    {
        // this is here only so we have at least one test
    }
}

class ZendX_Db_Adapter_Skip_FirebirdTest extends Zend_Db_Adapter_Skip_CommonTest
{
    public function getDriver()
    {
        return 'Firebird';
    }
}