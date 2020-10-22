<?php
declare(strict_types = 1);

namespace Tests\Entity;

use Jalismrs\ExceptionBundle\Entity\NotFoundException;
use PHPUnit\Framework\TestCase;

/**
 * Class NotFoundExceptionTest
 *
 * @package Tests\Entity
 *
 * @covers  \Jalismrs\ExceptionBundle\Entity\NotFoundException
 */
final class NotFoundExceptionTest extends
    TestCase
{
    /**
     * testNotFoundException
     *
     * @return void
     * @return void
     *
     * @throws \PHPUnit\Framework\ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function testNotFoundException() : void
    {
        // act
        $output = new NotFoundException(
            'test'
        );

        // assert
        self::assertSame(
            404,
            $output->getCode()
        );
    }

    /**
     * testCreate
     *
     * @return void
     *
     * @throws \PHPUnit\Framework\ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function testCreate() : void
    {
        // arrange
        $class      = 'class';
        $identifier = 'identifier';

        // act
        $output = NotFoundException::create(
            $class,
            $identifier
        );

        // assert
        self::assertSame(
            "Entity 'class'(identifier) not found",
            $output->getMessage()
        );
    }
}