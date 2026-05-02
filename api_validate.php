<?php
// Endpoint de prueba para validación

require_once __DIR__ . '/SISTEMA_DE_VALIDACIÓN_DE_NORMALIZACIÓN/dataquest/app/Domain/Entities/DependenciaFuncional.php';
require_once __DIR__ . '/SISTEMA_DE_VALIDACIÓN_DE_NORMALIZACIÓN/dataquest/app/Domain/Entities/Esquema.php';
require_once __DIR__ . '/SISTEMA_DE_VALIDACIÓN_DE_NORMALIZACIÓN/dataquest/app/Domain/Entities/ResultadoValidacion.php';
require_once __DIR__ . '/SISTEMA_DE_VALIDACIÓN_DE_NORMALIZACIÓN/dataquest/app/Domain/Ports/NormalizacionServiceInterface.php';
require_once __DIR__ . '/SISTEMA_DE_VALIDACIÓN_DE_NORMALIZACIÓN/dataquest/app/Domain/Services/NormalizacionService.php';

use App\Domain\Entities\Esquema;
use App\Domain\Entities\DependenciaFuncional;
use App\Domain\Services\NormalizacionService;

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $atributos = $input['atributos'] ?? ['A', 'B', 'C'];
    $dependenciasData = $input['dependencias'] ?? [['determinante' => 'A', 'dependiente' => 'B'], ['determinante' => 'A', 'dependiente' => 'C']];
    
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

echo json_encode(['error' => 'POST required']);