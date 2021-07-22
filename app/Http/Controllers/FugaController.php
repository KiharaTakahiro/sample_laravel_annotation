<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FugaController extends Controller
{
  /**
   * @Get("/fuga")
   */
  public function index()
  {
    return 'fuga';
  }
}
