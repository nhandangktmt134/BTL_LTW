<?php 
    class Shop extends Controller
    {
        function default() {
            $this->view("shop");
        }
    }
    class Cart extends Controller
    {
        function default() {
            $this->view("cart");
        }
    }
    class Payment extends Controller
    {
        function default() {
            $this->view("payment");
        }
    }
    class Comment extends Controller
    {
        function default() {
            $this->view("comment");
        }
    }
    class Checkout extends Controller
    {
        function default() {
            $this->view("checkout");
        }
    }
?>