<?php

/**
 * Description of body
 *
 * @author rostom
 */
class body {

    public $_sContent;
    public $_dContent;
    private $_topNav = array();
    private $_sideNav = array();
    private $_navigation1;

    public function __construct() {
        
    }

    public function TopNavBar(array $topNavBar) {
        $this->_navigation1 = "";
        ?>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <?php
                $this->_topNav = $topNavBar;

                foreach ($this->_topNav as $key => $top_menu) {
                    if (is_array($top_menu)) {
                        ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $key ?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php
                                foreach ($top_menu as $k => $drop_items) {
                                    ?>
                                <li ><a href="<?= $drop_items['link'] ?>"><i class="<?= $drop_items['class'] ?>"></i>  <?= $k; ?>&nbsp;&nbsp;<span class="<?= $drop_items['badge'] ?>"><?php if($drop_items['badge'] !="") echo "0" ?></span></a></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li class="dropdown"><a href="<?= $top_menu ?>"><?= $key; ?></a></li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
        </div>
        </nav>
        <?php
    }

    public function ReturnNavigationTop() {
        return $this->_navigation1;
    }

    public function SideNavbar(array $sideNavBar) {
        $this->_sideNav = $sideNavBar;
        foreach ($this->_sideNav as $side_menu) {
            if (is_array($side_menu)) {
                
            } else {
                
            }
        }
    }

    public function BodyStaticContent() {
        ?>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">CMS</a>
                </div>
                <?php
                echo $this->ReturnNavigationTop();
            }

            public function BodyDynamicContent() {
                
            }

        }
        