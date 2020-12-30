<?php
// mediTest.php
include_once("medi.php");

class mediTest extends \PHPUnit_Framework_TestCase {
    public function testgetNumber() {
        $mediMock=$this->getMock('\medi',array('getNumberFromUserInput '));
        $mediMock->expects($this->once())
            ->method('getNumberFromUserInput')
            ->will($this->returnValue(10));
        
    }


    public function login() {
        $mediMock=$this->getMock('\medi',array('login'));
        $midiMock->expects($this->never())
            ->method('login')
            ->will($this->returnString());
       
    }

    public function mressage(){

        $this->actingAs(factory(User::class)->create());
         $response = $this->get('/medi')->assertOk();
     }
     public function logout ()
     {
        $this->actingAs(factory(User::class)->create());
         $response = $this->get('/medi')->assertOk();

    public function register() {
        $mediMock=$this->getMock('\medi',array('getStringFromUserInput', 'register'));
        $mediMock->expects($this->once())
            ->method('getStringUserInput')
            ->will($this->returnString());
        $mediMock->expects($this->once())
            ->method('register')
            ->with($this->equalTo('string'));
        
    }
}