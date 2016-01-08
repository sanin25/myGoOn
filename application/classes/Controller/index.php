<?php

class Controller_Index extends Controller_Main
{
    function before()
    {
         parent::before();
        $this->template->styles = array("media/css/style.css",'media/css/jquery.fancybox.css','media/css/bootstrap.css','media/css/animate.css');
         $this->template->scripts = array('/media/js/jquery.js','/media/js/jquery.fancybox.pack.js','/media/js/demo.js','/media/js/bootstrap.js');
          $mod_search =  module::load('search');
         $menu_top =  module::load('menutop');
         $corusel =  module::load('corusel');
            $this->template->menu_top = array($menu_top );
            $this->template->search = array($mod_search );
            $this->template->corusel = array($corusel );   
    }
}
