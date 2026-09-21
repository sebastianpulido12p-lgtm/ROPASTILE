<?php

require_once __DIR__ . "/../models/tipoPago.php";

class TipoPagoController
{
    public function index()
    {
        $tipoPagoModel = new TipoPago();

        $tipoPagos = $tipoPagoModel->getAll();

        $tipoPago = $tipoPagoModel->getById(1);
    }
}