<?php
    class HomeController
    {
        public function __construct()
        {

        }

        public function Index($page)
        {
            if ($page == 'shop.php')
            {
                require_once ('views/shop_cart.php');
            }
            else
            {
                require_once('views/' . $page);
            }

        }

        public function Error()
        {
            require_once('views/404.php');
        }
    }
?>