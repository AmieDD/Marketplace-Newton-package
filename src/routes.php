<?php
$routes = [
    'metadata',
    'simplifyExpression',
    'factoringExpression',
    'findDerivative',
    'integrateExpression',
    'findZeros',
    'findTangent',
    'getAreaUnderCurve',
    'getCosine',
    'getSine',
    'getTangent',
    'getInverseCosine',
    'getInverseSine',
    'getInverseTangent',
    'getAbsoluteValue',
    'getLogarithm'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

