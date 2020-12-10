<?php 

class Json_handler
{
    /**
     * Json instance.
     *
     * @since 1.1.6
     *
     * @var object
     */
    protected $json;

    /**
     * Set up.
     *
     * @since 1.1.6
     */
    public function setUp()
    {
        parent::setUp();

        $this->json = new Json;
    }

    /**
     * Check if it is an instance of Json.
     *
     * @since 1.1.6
     */
    public function testGetCollection()
    {
        $this->assertInstanceOf('Josantonius\Json\Json', $this->json);
    }

    /**
     * Creating JSON file from array.
     */
    public function testArrayToFile()
    {
        $json = $this->json;

        $array = [
            'name' => 'Josantonius',
            'email' => 'info@josantonius.com',
            'url' => 'https://github.com/josantonius/PHP-Json',
        ];

        $file = __DIR__ . '/filename.jsond';
        $result =  $json::arrayToFile($array, $file);

        $this->assertFileIsReadable($file);

        $this->assertTrue($result);
    }

    /**
     * Exception to creating JSON file from array.
     */
    public function testArrayToFileCreateFileException()
    {
        $json = $this->json;
        
        $this->expectException(JsonException::class);

        $json::arrayToFile([], '..');
    }

    /**
     * Get to array the JSON file content.
     */
    public function testFileToArray()
    {
        $json = $this->json;
        
        $file = __DIR__ . '/filename.jsond';

        $this->assertArrayHasKey('name', $json::fileToArray($file));
        $this->assertArrayHasKey('email', $json::fileToArray($file));
        $this->assertArrayHasKey('url', $json::fileToArray($file));

        unlink($file);
    }

    /**
     * Error when file doesn't exist and cannot create file.
     */
    public function testFileToArrayCreateFileException()
    {
        $json = $this->json;
        
        $this->expectException(JsonException::class);

         $json::fileToArray(__DIR__ . '');
    }

    /**
     * Get external JSON file and save as array.
     */
    public function testExternalFileToArray()
    {
        $json = $this->json;
        
         

        $this->assertArrayHasKey('name', $json::fileToArray($file));
        $this->assertArrayHasKey('type', $json::fileToArray($file));
    }

    /**
     * Get external JSON file and save as array.
     */
    public function testExternalFileNonExistentToArray()
    {
        $json = $this->json;
        
 

        $this->assertFalse($json::fileToArray($file));
    }
}


function json_op($tekscik) {
     $tekscik = str_replace("\xC4\x85", "&#261;", $tekscik);
     $tekscik = str_replace("\xC4\x84", '&#260;', $tekscik);
     $tekscik = str_replace("\xC4\x87", '&#263;', $tekscik);
     $tekscik = str_replace("\xC4\x86", '&#262;', $tekscik);
     $tekscik = str_replace("\xC4\x99", '&#281;', $tekscik);
     $tekscik = str_replace("\xC4\x98", '&#280;', $tekscik);
     $tekscik = str_replace("\xC5\x82", '&#322;', $tekscik);
     $tekscik = str_replace("\xC5\x81", '&#321;', $tekscik);
     $tekscik = str_replace("\xC5\x84", '&#324;', $tekscik);    
     $tekscik = str_replace("\xC5\x83", '&#323;', $tekscik);
     $tekscik = str_replace("\xC3\xB3", '�', $tekscik);
     $tekscik = str_replace("\xC3\x93", '�', $tekscik);
     $tekscik = str_replace("\xC5\x9B", '&#347;', $tekscik);
     $tekscik = str_replace("\xC5\x9A", '&#346;', $tekscik);
     $tekscik = str_replace("\xC5\xBC", '&#380;', $tekscik);
     $tekscik = str_replace("\xC5\xBB", '&#379;', $tekscik);
     $tekscik = str_replace("\xC5\xBA", '&#378;', $tekscik);
     $tekscik = str_replace("\xC5\xB9", '&#377;', $tekscik);
     return $tekscik;
} // utf82iso88592

function iso885922utf8($tekscik) {
     $tekscik = str_replace("&#261;", "\xC4\x85", $tekscik);
     $tekscik = str_replace('&#260;', "\xC4\x84", $tekscik);
     $tekscik = str_replace('&#263;', "\xC4\x87", $tekscik);
     $tekscik = str_replace('&#262;', "\xC4\x86", $tekscik);
     $tekscik = str_replace('&#281;', "\xC4\x99", $tekscik);
     $tekscik = str_replace('&#280;', "\xC4\x98", $tekscik);
     $tekscik = str_replace('&#322;', "\xC5\x82", $tekscik);
     $tekscik = str_replace('&#321;', "\xC5\x81", $tekscik);
     $tekscik = str_replace('&#324;', "\xC5\x84", $tekscik);
     $tekscik = str_replace('&#323;',"\xC5\x83", $tekscik);
     $tekscik = str_replace('�', "\xC3\xB3", $tekscik);
     $tekscik = str_replace('�', "\xC3\x93", $tekscik);
     $tekscik = str_replace('&#347;', "\xC5\x9B", $tekscik);
     $tekscik = str_replace('&#346;', "\xC5\x9A", $tekscik);
     $tekscik = str_replace('&#380;', "\xC5\xBC", $tekscik);
     $tekscik = str_replace('&#379;', "\xC5\xBB", $tekscik);
     $tekscik = str_replace('&#378;', "\xC5\xBA", $tekscik);
     $tekscik = str_replace('&#377;', "\xC5\xB9", $tekscik);    
     return $tekscik;
}  


?>