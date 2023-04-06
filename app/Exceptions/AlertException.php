<?php

namespace App\Exceptions;

use Exception;
use Alert;

class AlertException extends Exception
{
    public function render($request)
    {
        Alert::warning('Gagal', $this->getMessage());
        return redirect()->back()->with('error', $this->getMessage())->withInput($request->all());
    }
}
