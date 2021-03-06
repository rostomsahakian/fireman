<?php

error_reporting(E_ALL);

ini_set('display_errors', '1');

/**
 * Description of control
 *
 * @author rostom
 * Desc: Control will direct each command to it correct location
 * Header will be loaded
 * Body Will be loaded based on commands received
 * Footer Will be loaded
 */
/*
 * Do not remove this autoloader is called from here
 */

require_once './defines/config.php';
START_SESSION;

class control {
    /*
     * Public, private, and proteced methods go here
     */

    public $_header;
    public $_body;
    public $_footer;
    public $_pageTitle;
    public $_forms;

    /*
     * Control Constructor
     */

    public function __construct() {
        $this->_forms = new forms();
        $this->_header = new header();
        $this->_body = new body();
        $this->_footer = new footer();

        echo $this->Loadheader();

        if (!isset($_SESSION['logged_in']) && (defined('TEST_ENVIRONMENT') && TEST_ENVIRONMENT === false)) {
            $login = $this->_forms->BackEndLoginForm();
        } else {
            echo $this->LoadBody();
        }

        echo $this->LoadFooter();
    }

    /*
     * @auth: Rostom
     * Desc: Loads the header
     */

    public function Loadheader() {
        /*
         * Add page title, CSS links, JavaScript, meta tags links here for the backend
         */
        $this->_pageTitle = (isset($_POST['page_title']) ? $_POST['page_title'] : "Fireman-Home");
        $header_data = array(
            "page_title" => $this->_pageTitle,
            "meta_tags" => array(),
            "css_links" => array(
                "1" => '<link href="' . ABSOLUTH_PATH_CSS . 'bootstrap.min.css" rel="stylesheet">',
            ),
            "js_links" => array(
            ),
            "meta_links" => array(
            )
        );

        $head = $this->_header->SetHeader($header_data);
        $head = $this->_header->GetHeader();
    }

    /*
     * @auth: Rostom
     * Desc: Loads the Body
     */

    public function LoadBody() {

        /*
         * Static Content Of the CMS (i.e nav on top and side)
         */
        $this->_body->BodyStaticContent();
        /* !Important
         * Declare Navigations below 
         */
        $top_nav = array(
            "Home" => "home",
            "Account" => array(
                "Profile" => array(
                    "link" => "profile",
                    "class" => "glyphicon glyphicon-user",
                    "badge" => ""
                ),
                "Settings" => array(
                    "link" => "settings",
                    "class" => "glyphicon glyphicon-cog",
                    "badge" => ""
                ),
                "Messages" => array(
                    "link" => "messages",
                    "class" => "glyphicon glyphicon-envelope",
                    "badge" => "badge"
                ),
                "Log out" => array(
                    "link" => "logout",
                    "class" => "glyphicon glyphicon-minus-sign",
                    "badge" => ""
                )
            )
        );
        $side_nav = array(
        );
        $this->_body->TopNavBar($top_nav);
    }

    /*
     * @auth: Rsotom
     * Desc: Loads the footer
     */

    public function LoadFooter() {
        /*
         * Add links and other things for footer backend
         */
        $footer_data = array(
            "links" => "control.php#back",
            "rights" => "GrowARock.com All Rigths Reserved" . date("Y"),
            "js" => array(
                "1" => ' <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>',
                "2" => '<script src="' . ABSOLUTH_PATH_JS . 'bootstrap.min.js"></script>'
            ),
        );

        $footer = $this->_footer->GetFooter($footer_data);
        $footer = $this->_footer->SetFooter();
    }

}
