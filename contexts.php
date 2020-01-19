<?php

require_once('./lib/INTER-Mediator/INTER-Mediator.php');

IM_Entry(
    [
        [
            'name' => 'bid_info_list',
        ],
    ],
    [
        'authentication' => [
            'authexpired' => '7200',
            'storing' => 'session-storage',
            'realm' => 'Design_Sample',
        ],
    ],
    ['db-class' => 'PDO',],
    false
);
