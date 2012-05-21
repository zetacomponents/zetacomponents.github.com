<?php
class helloController extends ezcMvcController
{
    private function selectGreeting()
    {
        $greetings = array( 'Hello', 'Hei', 'こんにちわ', 'доброе утро' );
        return $greetings[mt_rand( 0, count( $greetings ) - 1 )];
    }

    public function doGreet()
    {
        $ret = new ezcMvcResult;
        $ret->variables['greeting'] = $this->selectGreeting();
        return $ret;
    }

    public function doGreetPersonally()
    {
        $ret = new ezcMvcResult;
        $ret->variables['greeting'] = $this->selectGreeting();
        $ret->variables['person'] = $this->name;
        return $ret;
    }
}
?>
