<?php
class helloTestController extends ezcMvcController
{
    public function doDownload()
    {
        $ret = new ezcMvcResult;
        $ret->content = new ezcMvcResultContent;
        $ret->content->type = 'application/x-pdf';
        $ret->content->disposition = new ezcMvcResultContentDisposition;
        $ret->content->disposition->type = 'attachment';
        $ret->content->disposition->filename = "eZCLA-v1.1.pdf";
        $ret->content->disposition->creationDate = new DateTime( '1978-12-22' );
        $ret->variables['fileName'] = '/home/derick/dev/ezcomponents-web/files/eZCLA-v1.1.pdf';
        return $ret;
    }
}
?>
