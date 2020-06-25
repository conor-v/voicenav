<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ShopDAO.php';

class PagesController extends Controller {

  function __construct() {
    $this->ShopDAO = new ShopDAO();
  }

  /******************
         INDEX
   *****************/
  public function index() {
    $items = $this->ShopDAO->selectAllItems();

    $this->set('items', $items);
    $this->set('title', 'home');
    $this->set('currentPage', 'home');
  }

  /******************
         ABOUT
   *****************/
  public function about() {
    $this->set('title', 'about');
    $this->set('currentPage', 'about');
  }

  /******************
         DETAILS
   *****************/
  public function details() {
    if (!empty($_GET['id'])) {
      $item = $this->ShopDAO->selectById($_GET['id']);
      $rands = $this->ShopDAO->selectRand($_GET['id']);
    }

    //geen geldig id dan reroute naar home
    if (empty($item)){
      $_SESSION['error'] = 'This item is not found please try again!';
      header('location: index.php?page=shop');
      exit();
    }

    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'shopItem') {
        $_SESSION['info'] = 'Your item is ordered have fun!';
        header("Location: index.php");
        exit();
      }
    }

    $this->set('rands', $rands);
    $this->set('item', $item);
    $this->set('title', 'item details');
    $this->set('currentPage', 'details');
  }

  /******************
           SHOP
   *****************/
  public function shop() {
    $items = $this->ShopDAO->selectAllItems();

    $this->set('items', $items);
    $this->set('title', 'shop');
    $this->set('currentPage', 'shop');
  }

  /******************
         CONTACT
   *****************/
  public function contact() {
    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'formSub') {
        $_SESSION['info'] = 'Your message is send. good job!';
        header("Location: index.php");
        exit();
      }
    }

    $this->set('title', 'contact');
    $this->set('currentPage', 'contact');
  }
}
