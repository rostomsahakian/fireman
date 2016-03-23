<?php

/**
 * Description of header
 * This the constructor for the back-end header
 *
 * @author rostom
 */
class header {
    /*
     * Public, private, and proteced methods go here
     */

    public $_header;

    /*
     * Control Constructor
     */

    public function __construct() {

        echo $this->GetHeader();
    }

    /*
     * @auth: Rostom
     * Desc: Builds the Back-end Header
     * @param: header_data[]
     * 1. page_title
     * 2. css_links
     * 3. js_links
     * 4.meta_links
     * Date: 03/21/2016
     */

    public function SetHeader(array $header_data) {
        $this->_header = "";
        ?>
        <html>
            <title><?= $header_data['page_title'] ?></title>
            <head>
                <?php
                foreach ($header_data['css_links'] as $header_css) {
                    echo $header_css;
                }
                foreach ($header_data['js_links'] as $header_js) {
                    echo $header_js;
                }
                foreach ($header_data['meta_links'] as $header_meta) {
                    echo $header_meta;
                }
                ?>
            </head>
            <body>
                <?php
            }

            /*
             * @auth: Rostom
             * Desc: Retuns the built header for back-end
             * Date: 03/21/2016
             */

            public function GetHeader() {
                return $this->_header;
            }

        }
        