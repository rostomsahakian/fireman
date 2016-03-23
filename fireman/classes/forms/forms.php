<?php
/*
 * @auth: Rostom Sahakian 
 * Email: rostom.sahakian@gmail.com
 * Date: 03/21/2016
 * Lang: PHP 5.4
 * FireMan developed for growarock.com
 * All Rights Reserved
 */

/**
 * Description of forms
 * All forms for the back-end of fireman will be made and processed here
 *
 * @author rostom
 */
class forms {
    /*
     * Public, Private, and Protected variables goes here before the constructor 
     */

    public $_loginForm;

    /*
     * Constructor
     */

    public function __construct() {

        echo $this->SetbackEndLoginForm();
    }

################################### FORMS ######################################
################################################################################
    /*
     * @auth: Rostom
     * Desc: Admin or user login form for the back-end of the site
     * 03/21/2016
     */

    public function BackEndLoginForm() {
        $this->_loginForm = "";
        ?>
<div class="container" style="margin-top: 200px !important;">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">&nbsp;</div>
                    <div class="col-md-4">
                        <form name="portal[login]" method="post" action="gate.php">
                            <div class="form-group">
                                <input type="text" name="portal[login][username]" id="username" placeholder="Enter your username" class="form-control" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="portal[login][username]" id="password" placeholder="Enter your password" class="form-control" />
                            </div>
                            <div class="form-group">
                                <input type="submit" name="poratl[login][do_login]" id="do_login" class="btn btn-default" value="login" />
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">&nbsp;</div>
                </div>
            </div>
        </div>
        <?php
    }

    public function SetbackEndLoginForm() {
        return $this->_loginForm;
    }

    /*
     * @auth: Rostom
     * Desc: Will handle the BackEndloginForm along with ajax process
     * 03/21/2016
     */

    public function BackEndLoginProcessor() {
        
    }

    /*
     * @auth: Rostom
     * Desc: Create a back-end user (none admin)
     * 03/21/2016
     */

    public function CreateBackEndUserForm() {
        
    }

    /*
     * @auth: Rostom
     * Desc: Handles CreateBackEndUserForm
     * 03/21/2016
     */

    public function CreateBackEndUserFormProcessor() {
        
    }

################################################################################    
}
