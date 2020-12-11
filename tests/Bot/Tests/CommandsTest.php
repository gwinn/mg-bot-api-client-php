<?php

/**
 * PHP version 7.0
 *
 * Commands Test
 *
 * @package  RetailCrm\Mg\Bot\Tests
 */

namespace RetailCrm\Mg\Bot\Tests;

use RetailCrm\Common\Exception\InvalidJsonException;
use RetailCrm\Mg\Bot\Model\Request\CommandEditRequest;
use RetailCrm\Mg\Bot\Model\Response\ErrorOnlyResponse;
use RetailCrm\Mg\Bot\Test\TestCase;

/**
 * PHP version 7.0
 *
 * Class CommandsTest
 *
 * @package RetailCrm\Mg\Bot\Tests
 */
class CommandsTest extends TestCase
{
    /**
     * @group("commands")
     * @throws \Exception
     */
    public function testCommandEditException()
    {
        self::expectException(InvalidJsonException::class);

        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getResponse('EOF', 400)
        );

        $request = new CommandEditRequest();
        $request->setDescription("qwerty");

        $client->commandEdit($request);
    }

    /**
     * @group("commands")
     * @throws \Exception
     */
    public function testCommandDeleteException()
    {
        self::expectException(\Exception::class);

        $client = self::getApiClient();

        $request = "qwerty";

        $client->commandDelete($request);
    }

    /**
     * @group("commands")
     * @throws \Exception
     */
    public function testCommandEdit()
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getJsonResponse('commandEdit')
        );

        $request = new CommandEditRequest();
        $request->setBotId(1);
        $request->setName("show_payment_types");
        $request->setDescription("Get available payment types");

        $response = $client->commandEdit($request);

        self::assertInstanceOf(ErrorOnlyResponse::class, $response);
        self::assertTrue($response->isSuccessful());
    }

    /**
     * @group("commands")
     * @depends testCommandEdit
     * @throws \Exception
     */
    public function testCommandDelete()
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getJsonResponse('commandEdit')
        );

        $response = $client->commandDelete("show_payment_types");

        self::assertTrue($response->isSuccessful());
    }
}
