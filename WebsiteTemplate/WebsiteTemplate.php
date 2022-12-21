<?php
    require "assets/Utils.php";
    $backend = new Backend();

    // Basic Setup der Daten
    //require "assets/TempStuff.php";

    class WebsiteTemplate {
        private $subtitle;

        public function __construct() {
            $this->subtitle = "[ERROR]";
        }

        public function setSubtitle($subtitle) {
            $this->subtitle = $subtitle;
        }

        public function renderStart() {
            ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>CoinX</title>
                    <script src="https://cdn.tailwindcss.com"></script>
                    <script src="https://kit.fontawesome.com/e3f93b5279.js" crossorigin="anonymous"></script>
                </head>
                <body class="text-white bg-slate-900 p-8">
                    <div class="border border-white p-8">
                        <?php
                            require "assets/Header.php";
                        ?>
                    </div>
                    <br>
                    <div class="border border-white p-8">
            <?php
        }

        public function renderEnd() {
            ?>
                    </div>
                </body>
                </html>
            <?php
        }
    }
?>