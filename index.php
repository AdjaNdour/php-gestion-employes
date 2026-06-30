<?php

function initialiserEmployes(): array {
    return [
        0 => [
            'nom' => 'nom0',
            'prenom' => 'prenom0',
            'matricule' => '1234SN',
            'departement' => ['code' => '001', 'nom' => 'Informatique'],
            'subordonnes' => [1, 2]
        ],
        1 => [
            'nom' => 'nom1',
            'prenom' => 'prenom1',
            'matricule' => '1235SN',
            'departement' => ['code' => '001', 'nom' => 'Informatique'],
            'subordonnes' => [2]
        ],
        2 => [
            'nom' => 'nom2',
            'prenom' => 'prenom2',
            'matricule' => '1236SN',
            'departement' => ['code' => '002', 'nom' => 'Finance'],
            'subordonnes' => []
        ]
    ];
}
