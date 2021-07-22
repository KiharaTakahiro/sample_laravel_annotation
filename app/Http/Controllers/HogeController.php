<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HogeController extends Controller
{
  /**
   * @Get("/hoge")
   */
  public function index()
  {
    return 'hoge';
  }
}
