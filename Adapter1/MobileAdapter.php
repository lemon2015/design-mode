<?php
require_once 'IFormat.php';
require_once 'Mobile.php';
class MobileAdapter  implements IFormat
{
    private $mobile;

    public function __construct(IMobileFormat $mobileNow)
    {
        $this->mobile = $mobileNow;
    }

    public function formatCSS()
    {
        // TODO: Implement formatCSS() method.
        $this->mobile->formatCSS();
    }

    public function formatGraphics()
    {
        // TODO: Implement formatGraphics() method.
        $this->mobile->formatGraphics();
    }

    public function horizontalLayout()
    {
        // TODO: Implement formatLayout() method.
        $this->mobile->verticalLayout();
    }
}