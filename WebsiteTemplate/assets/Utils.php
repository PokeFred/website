<?php
    class Backend {
        private $baseUrl = "http://127.0.0.1:8080";
    
        private function request($appendUrl) {
            return json_decode(file_get_contents($this->baseUrl . $appendUrl), true);
        }

        public function createUser(array $userData) {
            $username = $userData['username'];
            $firstname = $userData['firstname'];
            $lastname = $userData['lastname'];
            $email = $userData['email'];
            $password = $userData['password'];
            $role = $userData['role'];
        
            $url = "/accounts/create?username=$username&firstname=$firstname&lastname=$lastname&role=$role";
            $userCreate = $this->request($url);

            $url = "/login/create?id=" . $userCreate['id'] . "&email=$email&password=$password";
            $this->request($url);
        }
    
        public function customRequest($appendUrl) {
            return $this->request($appendUrl);
        }
    }
    
?>