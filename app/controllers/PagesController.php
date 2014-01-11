<?php

class PagesController extends BaseController {

  public function home(){
    $name = "Avaya";

    return View::make('home')->with('name', $name);
  }

  public function aboutUs(){
    return View::make('about');
  }

  public function getContactUs(){
    return View::make('contact');
  }

  public function postContactUs(){

  }
}