<div class="mx-auto w-auto h-auto block sm:hidden">
    <div class="h-16 flex justify-between items-center">
        <div class="ml-4 w-8 h-8 text-5xl text-purple-900">
            <i class="fa-solid fa-hippo"></i>
        </div>
        <button onclick="toggleHeader()" class="mt-4 mr-4 w-14 h-14 text-4xl border-2 border-white rounded-full flex justify-center items-center">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
    <div id="header" class="h-0 overflow-hidden">
        <div class="h-10 flex justify-start items-center">
            <a class="ml-4 cursor-pointer hover:underline">Text</a>
        </div>
        <div class="h-10 flex justify-start items-center">
            <a class="ml-4 cursor-pointer hover:underline">Text</a>
        </div>
        <?php
            if ($_SESSION['login'] == true) {
                ?>
                    <div class="h-10 flex justify-start items-center">
                        <button onclick="userButton()" class="ml-4 cursor-pointer hover:underline">
                            <i class="fa-solid fa-user"></i>
                        </button>
                    </div>
                <?php
            } else {
                ?>
                    <button onclick="userButton()" class="h-10 flex justify-start items-center">
                        <a class="ml-4 cursor-pointer hover:underline">Login</a>
                    </button>
                <?php
            }
        ?>
    </div>
</div>

<div class="mx-auto w-auto h-auto hidden sm:block">
    <div class="h-16 flex justify-between items-center">
        <div class="ml-4 w-8 h-8 text-5xl text-purple-900 flex items-center">
            <i class="fa-solid fa-hippo"></i>
        </div>
        <div class="mr-4 w-fit h-8 text-2xl flex justify-center items-center">
            <a class="mx-4 cursor-pointer hover:underline">Text</a>
            <a class="mx-4 cursor-pointer hover:underline">Text</a>
            <a class="mx-4 cursor-pointer hover:underline">Text</a>
            <?php
                if ($_SESSION['login'] == true) {
                    ?>
                        <div class="mx-2">
                            <button onclick="userButton()" class="w-8 h-8 border-2 border-white rounded-full flex justify-center items-center cursor-pointer hover:underline">
                                <i class="fa-solid fa-user"></i>
                            </button>
                        </div>
                    <?php
                } else {
                    ?>
                        <button onclick="userButton()" class="w-fit h-auto border border-white rounded-xl px-4 py-py">Login</button>
                    <?php
                }
            ?>
        </div>
    </div>
</div>

<script>
    function userButton() {
        window.location.href='<?php echo $_SESSION['base_url'] ?>?page=login';
    }

    function toggleHeader() {
        const header = document.getElementById("header");
        const cl = header.classList;

        if (cl.contains("h-0")) {
            cl.remove("h-0");
            cl.add("h-auto");
        } else {
            cl.remove("h-auto");
            cl.add("h-0");
        }
    }
</script>