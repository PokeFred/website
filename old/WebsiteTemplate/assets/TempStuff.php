<?php
    function firstStep($backend) {
        $userArr = array(
            array(
                "username" => "PokeFred",
                "firstname" => "Cedric",
                "lastname" => "Paelmke",
                "email" => "c.paelmke@gmail.com",
                "password" => "1234",
                "role" => "admin"
            ),
            array(
                "username" => "Trypezz",
                "firstname" => "Max",
                "lastname" => "Depke",
                "email" => "m.depke@gmail.com",
                "password" => "1234",
                "role" => "admin"
            ),
            array(
                "username" => "normi",
                "firstname" => "Norman",
                "lastname" => "Mueller",
                "email" => "n.mueller@gmail.com",
                "password" => "1234",
                "role" => "user"
            ),
            array(
                "username" => "trivium",
                "firstname" => "Tristan",
                "lastname" => "Schmidt",
                "email" => "t.schmidt@gmail.com",
                "password" => "1234",
                "role" => "user"
            ),
            array(
                "username" => "lazo",
                "firstname" => "Lars",
                "lastname" => "Odegard",
                "email" => "l.odegard@gmail.com",
                "password" => "1234",
                "role" => "user"
            )
        );

        for ($i=0; $i < count($userArr); $i++) { 
            $element = $userArr[$i];

            $role;
            switch ($element['role']) {
                case 'admin':
                    $role = 0;
                    break;
                case 'user':
                    $role = 1;
                    break;
            }
    
            $userCreate = $backend->customRequest("/accounts/create?username=" . $element['username'] . "&firstname=" . $element['firstname'] . "&lastname=" . $element['lastname'] . "&role=" . $role);
            $element['id'] = $userCreate['id'];            
            $loginCreate = $backend->customRequest("/login/create?id=" . $element['id'] . "&email=" . $element['email'] . "&password=" . $element['password']);

            $userArr[$i] = $element;
        }

        return $userArr;
    }

    $backend->customRequest("/clearAll");
    $userArr = firstStep($backend);
?>