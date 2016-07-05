<?php declare(strict_types = 1);


namespace Shopware\Psh\Test\Unit\Integration;

use Shopware\Psh\Listing\Script;
use Shopware\Psh\Listing\ScriptFinder;

class ScriptFinderTest extends \PHPUnit_Framework_TestCase
{
    public function test_script_finder_holds_contract_if_no_paths_present()
    {
        $finder = new ScriptFinder([]);
        $this->assertInstanceOf(ScriptFinder::class, $finder);
        $this->assertInternalType('array', $finder->getAllScripts());
    }

    public function test_script_finder_finds_scripts_if_one_directory_is_passed()
    {
        $finder = new ScriptFinder([__DIR__ . '/_scripts']);
        $this->assertInstanceOf(ScriptFinder::class, $finder);
        $this->assertCount(3, $finder->getAllScripts());
    }

    public function test_script_finder_finds_scripts_if_two_directories_are_passed_and_filters_noise()
    {
        $finder = new ScriptFinder([__DIR__ . '/_scripts', __DIR__ . '/_scripts_with_misc_stuff']);
        $this->assertInstanceOf(ScriptFinder::class, $finder);
        $this->assertCount(5, $finder->getAllScripts());
        $this->assertContainsOnlyInstancesOf(Script::class, $finder->getAllScripts());
    }



}