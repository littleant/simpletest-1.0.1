<?php
require_once(dirname(__FILE__) . '/../autorun.php');
require_once(dirname(__FILE__) . '/support/test1.php');

class LoadIfIncludedTestCase extends UnitTestCase
{
    public function test_load_if_included()
    {
        $tests = new GroupTest();
        $tests->addFile(dirname(__FILE__) . '/support/test1.php');
        $this->assertEqual($tests->getSize(), 1);
    }
}
