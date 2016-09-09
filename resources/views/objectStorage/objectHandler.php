<?php

if ($http == 'ViewAllTeam') {
    foreach ($data as $key => $users) {
        $user[] = $users;
    }
    echo json_encode($user);
}
if ($http == 'ViewSuperUser') {
    foreach ($SU as $key => $superUsers) {
        $superUser[] = $superUsers;
    }
    echo json_encode($superUser);
}

