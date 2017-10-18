<?php

/**
 * Cliente para servicios web de CryptoMKT
 * Copyright (C) SASCO SpA (https://sasco.cl)
 *
 * Este programa es software libre: usted puede redistribuirlo y/o modificarlo
 * bajo los términos de la GNU Lesser General Public License (LGPL) publicada
 * por la Fundación para el Software Libre, ya sea la versión 3 de la Licencia,
 * o (a su elección) cualquier versión posterior de la misma.
 *
 * Este programa se distribuye con la esperanza de que sea útil, pero SIN
 * GARANTÍA ALGUNA; ni siquiera la garantía implícita MERCANTIL o de APTITUD
 * PARA UN PROPÓSITO DETERMINADO. Consulte los detalles de la GNU Lesser General
 * Public License (LGPL) para obtener una información más detallada.
 *
 * Debería haber recibido una copia de la GNU Lesser General Public License
 * (LGPL) junto a este programa. En caso contrario, consulte
 * <http://www.gnu.org/licenses/lgpl.html>.
 */

namespace sasco\CryptoMKT\Client;

/**
 * Clase con la respuesta del servicio web
 * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]sasco.cl)
 * @version 2017-10-12
 */
class Response extends \sasco\CryptoMKT\Object
{

    protected $status; ///< Estado de la respuesta (con su código)
    protected $header; ///< Cabecera de la respuesta
    protected $body; ///< Cuerpo de la respuesta

    /**
     * Constructor que asigna la respuesta del servicio web si se pasó
     * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]sasco.cl)
     * @version 2017-10-12
     */
    public function __construct(array $datos = [])
    {
        if ($datos) {
            $this->setStatus((object)$datos['status']);
            $this->setHeader((object)$datos['header']);
            $this->setBody($datos['body']);
        }
    }

}