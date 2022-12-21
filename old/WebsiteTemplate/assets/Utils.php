<?php
    class Backend {
        private function request($appendUrl) {
            $baseUrl = "http://127.0.0.1:8080";

            return json_decode(file_get_contents($baseUrl . $appendUrl), true);
        }

        public function customRequest($appendUrl) {
            return $this->request($appendUrl);
        }
    }
?>