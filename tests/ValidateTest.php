<?php 

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    //Validar email
    public function test_email() //Métodos siempre empiezan con test.
    {
        $email = Validate::email('gaby@gmail.com');
        $this->assertTrue($email);

        $email = Validate::email('gaby@@gmail.com');
        $this->assertFalse($email);
    }   
    //Validar una URL
    public function test_url() //Métodos siempre empiezan con test.
    {
        $url = Validate::url('https://platzi.com');
        $this->assertTrue($url);

        $url = Validate::url('platzi.com');
        $this->assertFalse($url);
    }   
    //Validar una password
    public function test_password() //Métodos siempre empiezan con test.
    {
        $password = Validate::password('asdfasr');
        $this->assertTrue($password);

        $password = Validate::password('as2sdf2');
        $this->assertFalse($password);
    }   


}