<?php
    declare(strict_types = 1);
    function getPermissionsByRole(string $role) : array {
        $permissions = [
            'admin' => [
                'Puede crear usuarios',
                'Puede actualizar usuarios',
                'Puede eliminar usuarios',
                'Puede listar usuarios'
            ],
            'mod' => [
                'Puede crear usuarios',
                'Puede actualizar usuarios',
                'Puede eliminar usuarios',
                'Puede listar usuarios'
            ]
        ];
        return $permissions[$role] ?? [
            'No tiene permisos'
        ];
    }

    var_dump(getPermissionsByRole('admin'));
    var_dump(getPermissionsByRole('guest'));