<?php

class TestClass {

    protected $data;

    function __construct($submittedData) {
        $this->data = $submittedData;
    }

    function attachString($attachString) {
        return $this->data . $attachString;
    }

    function addTo($addTo) {
        if (is_numeric($addTo) && is_numeric($this->data)) {
            return $this->data + $addTo;
        } else {
            return FALSE;
        }
    }

}

?>
