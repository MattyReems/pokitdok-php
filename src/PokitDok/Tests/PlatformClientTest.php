<?php
// Copyright (C) 2014, All Rights Reserved, PokitDok, Inc.
// http://www.pokitdok.com
//
// Please see the LICENSE.txt file for more information.
// All other rights reserved.
//
//	PokitDok Platform Client for PHP Tests
//		Consume the REST based PokitDok platform API
//		https://platform.pokitdok.com/login#/documentation


namespace PokitDok\Tests;

require_once 'vendor/autoload.php';
// If not using composer remove previous line and uncomment following two lines
//require_once 'src/PokitDok/Common/Oauth2ApplicationClient.php';
//require_once 'src/PokitDok/Platform/PlatformClient.php';

use PokitDok\Platform\PlatformClient;


/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-04-29 at 17:31:53.
 */
class PlatformClientTest extends \PHPUnit_Framework_TestCase
{
    private $eligibility_request = array(
            'payer_id' => "MOCKPAYER",
            'member_id' => "W34237875729",
            'provider_id' => "1467560003",
            'provider_name' => "AYA-AY",
            'provider_first_name' => "JEROME",
            'provider_type' => "Person",
            'member_name' => "JOHN DOE",
            'member_birth_date' => "05/21/1975",
            'service_types' => array("Health Benefit Plan Coverage")
        );

    const POKITDOK_PLATFORM_API_CLIENT_ID = 'LNrngr9X4zkwAPdwI8uf';
    const POKITDOK_PLATFORM_API_CLIENT_SECRET = 'htr5ckvvhc9g83qqlapGt5APJE95a3yEsBZhUezV';
    const POKITDOK_PLATFORM_API_SITE = 'http://me.pokitdok.com:5002';
//    const POKITDOK_PLATFORM_API_SITE = 'https://platform.pokitdok.com'; // production

    /**
     * @var PlatformClient
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new PlatformClient(
            self::POKITDOK_PLATFORM_API_CLIENT_ID,
            self::POKITDOK_PLATFORM_API_CLIENT_SECRET
        );

        $this->object->setApiBaseUrl(
            self::POKITDOK_PLATFORM_API_SITE .
            PlatformClient::POKITDOK_PLATFORM_API_VERSION_PATH);
        $this->object->setApiTokenUrl(
            self::POKITDOK_PLATFORM_API_SITE .
            PlatformClient::POKITDOK_PLATFORM_API_TOKEN_URL
        );
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        $this->object = null;
    }

    /**
     * @covers PokitDok\Platform\PlatformClient::setVersionPath
     * @todo   Implement testSetVersionPath().
     */
    public function testSetVersionPath()
    {
        $version_path = "/api/v4";

        $this->object->setVersionPath($version_path);
        $this->assertEquals($this->object->getVersionPath(), $version_path);
    }

    /**
     * @covers PokitDok\Platform\PlatformClient::getVersionPath
     * @todo   Implement testGetVersionPath().
     */
    public function testGetVersionPath()
    {
        $this->assertEquals($this->object->getVersionPath(), PlatformClient::POKITDOK_PLATFORM_API_VERSION_PATH);
    }

    /**
     * @covers PokitDok\Platform\PlatformClient::usage
     * @todo   Implement testUsage().
     */
    public function testUsage()
    {
        $usage = $this->object->usage();

        $this->assertObjectHasAttribute('rate_limit_amount', $usage);
        $this->assertObjectHasAttribute('rate_limit_reset', $usage);
        $this->assertObjectHasAttribute('test_mode', $usage);
        $this->assertObjectHasAttribute('processing_time', $usage);
        $this->assertObjectHasAttribute('rate_limit_cap', $usage);
        $this->assertObjectHasAttribute('credits_remaining', $usage);
        $this->assertObjectHasAttribute('credits_billed', $usage);
    }

    /**
     * @covers PokitDok\Platform\PlatformClient::providers
     * @todo   Implement testProviders().
     */
    public function testProviders()
    {
        $providers = $this->object->providers(array('state' => 'CA'))->body();

        $this->assertObjectHasAttribute('meta', $providers);
        $this->assertObjectHasAttribute('data', $providers);
    }

    /**
     * @covers PokitDok\Platform\PlatformClient::eligibility
     * @todo   Implement testEligibility().
     */
    public function testEligibility()
    {
        $eligibility = $this->object->eligibility($this->eligibility_request)->body();

        $this->assertObjectHasAttribute('meta', $eligibility);
        $this->assertObjectHasAttribute('data', $eligibility);
        $this->assertObjectHasAttribute('provider_id', $eligibility->data);
    }

    /**
     * @covers PokitDok\Platform\PlatformClient::claims
     * @todo   Implement testClaims().
     */
    public function testClaims()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers PokitDok\Platform\PlatformClient::claimsStatus
     * @todo   Implement testClaimsStatus().
     */
    public function testClaimsStatus()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers PokitDok\Platform\PlatformClient::enrollment
     * @todo   Implement testEnrollment().
     */
    public function testEnrollment()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers PokitDok\Platform\PlatformClient::payers
     * @todo   Implement testPayers().
     */
    public function testPayers()
    {
        $payers = $this->object->payers(array('state' => 'CA'))->body();

        $this->assertObjectHasAttribute('meta', $payers);
        $this->assertObjectHasAttribute('data', $payers);
        $this->assertObjectHasAttribute('supported_transactions', $payers->data[0]);
    }

    /**
     * @covers PokitDok\Platform\PlatformClient::priceInsurance
     * @todo   Implement testPriceInsurance().
     */
    public function testPriceInsurance()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers PokitDok\Platform\PlatformClient::priceCash
     * @todo   Implement testPriceCash().
     */
    public function testPriceCash()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers PokitDok\Platform\PlatformClient::activities
     * @todo   Implement testActivities().
     */
    public function testActivities()
    {
        $activities = $this->object->activities()->body();

        $this->assertObjectHasAttribute('meta', $activities);
        $this->assertObjectHasAttribute('data', $activities);
        $this->assertObjectHasAttribute('units_of_work', $activities->data[0]);
    }
}
