<?php

return (new PhpCsFixer\Config())
    ->setRules([
            '@Symfony'               => true,
            'binary_operator_spaces' => [
                'operators' => [
                    '='  => 'align_single_space_minimal',
                    '=>' => 'align_single_space_minimal',
                ],
            ],
    ]);
