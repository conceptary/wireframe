<?php


namespace cklouman\wireframe;

class Application {
    private $sysPaths = [
        "boot"      => "",
        "root"      => "",
        "config"    => "",
        "shared"    => "",
        "dev"       => "",
        "public"    => ""
    ];

    function __construct( $sBootPath, $sRoot ) {
        $this->sysPaths = [
            "boot" =>  $sBootPath
        ];

    }

    public function setSysPath($sItem, $sItemVal) {
        $this->sysPaths[$sItem] = $sItemVal;

    }

    public function getSysPath($sItem) {

        return $this->sysPaths[$sItem];
    }

    public function test() {

    }

}