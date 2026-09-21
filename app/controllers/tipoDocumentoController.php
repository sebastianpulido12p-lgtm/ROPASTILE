<?php

require_once __DIR__ . "/../models/tipoDocumento.php";

class TipoDocumentoController
{
    public function index()
    {
        $tipoDocumentoModel = new TipoDocumento();

        $tipoDocumentos = $tipoDocumentoModel->getAll();

        $tipoDocumento = $tipoDocumentoModel->getById(1);
    }
}