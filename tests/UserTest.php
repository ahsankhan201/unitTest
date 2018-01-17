<?php

//namespace unitTestSample\Test;

use PHPUnit\Framework\TestCase;
require_once 'src/User.php';

class UserTest extends TestCase {

    public function testPasswordReturnTrueWhenPasswordSuccessfullySet() {
        $detail = array();
        $user = new User($detail);

        $password = "fub";
        $this->assertFalse($user->setPassword($password));
    }
    
    /**
 * Call protected/private method of a class.
 *
 * @param object &$object    Instantiated object that we will run method on.
 * @param string $methodName Method name to call
 * @param array  $parameters Array of parameters to pass into method.
 *
 * @return mixed Method return.
 */
public function invokeMethod(&$object, $methodName, array $parameters = array())
{
    $reflection = new \ReflectionClass(get_class($object));
    $method = $reflection->getMethod($methodName);
    $method->setAccessible(true);

    return $method->invokeArgs($object, $parameters);
}

    public function testGetUserReturnsUserWithExpectedValues() {
        
        $detail = array();
        $user = new User($detail);
        $password = "foobar";
        $user->setPassword($password);
        // Make Password for testing
        $expextedPassword = md5($password); //'5185e8b8fd8a71fc80545e144f91faf2';
        $currentUser = $user->getUser();
        $result = $this->invokeMethod($user, 'cryptPassword', array('foobar'));
        $this->assertEquals($expextedPassword, $result);

    }

}
