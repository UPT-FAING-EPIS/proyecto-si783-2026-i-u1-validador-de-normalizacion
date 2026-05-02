<?php
// API para el validador de normalización - versión directa

require_once dirname(__DIR__, 2) . '/app/Domain/Entities/DependenciaFuncional.php';
require_once dirname(__DIR__, 2) . '/app/Domain/Entities/Esquema.php';
require_once dirname(__DIR__, 2) . '/app/Domain/Entities/ResultadoValidacion.php';
require_once dirname(__DIR__, 2) . '/app/Domain/Ports/NormalizacionServiceInterface.php';
require_once dirname(__DIR__, 2) . '/app/Domain/Services/NormalizacionService.php';

use App\Domain\Entities\Esquema;
use App\Domain\Entities\DependenciaFuncional;
use App\Domain\Services\NormalizacionService;

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit;
}

$input = json_decode(file_get_contents('php://input'), true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $atributos = $input['atributos'] ?? [];
    $dependenciasData = $input['dependencias'] ?? [];
    
    $dependencias = array_map(function ($d) {
        return new DependenciaFuncional($d['determinante'], $d['dependiente']);
    }, $dependenciasData);

    $esquema = new Esquema($atributos, $dependencias);
    $service = new NormalizacionService();
    $resultado = $service->validar($esquema);

    echo json_encode([
        'nivel' => $resultado->getNivel(),
        'violaciones' => $resultado->getViolaciones(),
        'atributos' => $atributos
    ]);
    exit;
}

echo json_encode(['nivel' => 'BCNF', 'violaciones' => [], 'atributos' => ['A', 'B', 'C']]);