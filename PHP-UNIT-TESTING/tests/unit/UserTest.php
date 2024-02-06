<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    public function testThatWeCanGetTheFirstName()
    {

        // Creating a new instance of the User class
        $user = new \App\Models\User;

        // Setting the first name of the user to 'Raghav'
        $user->setFirstName('Raghav');

        // Asserting that the first name retrieved from the user is 'Raghav'
        $this->assertEquals($user->getFirstName(), 'Raghav');
    }

    public function testThatWeCanGetTheLastName()
    {

        // Creating a new instance of the User class
        $user = new \App\Models\User;

        // Setting the last name of the user to 'Singh'
        $user->setLastName('Singh');

        // Asserting that the last name retrieved from the user is 'Singh'
        $this->assertEquals($user->getLastName(), 'Singh');
    }

    public function testFullNameIsReturned()
    {
        // Creating a new instance of the User class
        $user = new \App\Models\User;
        // Setting the first name of the user to 'Raghav'
        $user->setFirstName('Raghav');
        // Setting the Last name of the user to 'Singh'
        $user->setLastName('Singh');

        $this->assertEquals($user->getfullName(), 'Raghav Singh');
    }

    public function testFirstAndLastNameAreTrimmed()
    {
        // Creating a new instance of the User class
        $user = new \App\Models\User;
        // Setting the first name of the user to 'Raghav'
        $user->setFirstName('Raghav     ');
        // Setting the Last name of the user to 'Singh'
        $user->setLastName(' Singh ');
        // Asserting that the First name retrieved from the user is 'Raghav'
        $this->assertEquals($user->getFirstName(), 'Raghav');
        // Asserting that the last name retrieved from the user is 'Singh'
        $this->assertEquals($user->getLastName(), 'Singh');
    }

    public function testEmailAddressCanBeSet()
    {
        $user = new \App\Models\User;

        $user->setEmail('Raghav@codecourse.com');
        $this->assertEquals($user->getEmail(), 'Raghav@codecourse.com');
    }

    public function testEmailVariablesContainCorrectValues()
    {
        // Creating a new instance of the User class
        $user = new \App\Models\User;
        // Setting the first name of the user to 'Raghav'
        $user->setFirstName('Raghav');
        // Setting the Last name of the user to 'Singh'
        $user->setLastName(' Singh ');
        $user->setEmail('Raghav@codecourse.com');

        $emailVariables = $user->getEmailVariables();

        $this->assertArrayHasKey('full_name', $emailVariables);
        $this->assertArrayHasKey('email', $emailVariables);

        $this->assertEquals($emailVariables['full_name'], 'Raghav Singh');
        $this->assertEquals($emailVariables['email'], 'Raghav@codecourse.com');
    }
}
