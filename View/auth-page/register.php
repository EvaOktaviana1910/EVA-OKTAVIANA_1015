<div
            class="h-screen w-screen flex justify-center items-center bg-gray-200">
            <!-- Left -->
            <div
                class="w-1/2 h-screen bg-teal-400 flex flex-col justify-center items-center gap-4">
                <p class="text-4xl font-bold">READER-PLAY</p>
            </div>
            <!-- Right -->
            <div class="w-1/2 p-8 flex flex-col gap-3">
                <!-- Register -->
                <p class="font-semibold text-3xl">Registration</p>
                <!-- Input Nama -->
                <form action="<?= urlpath('register'); ?>" method="POST" enctype="multipart/form-data" class="flex flex-col gap-3">
                    <label for="email">email</label>
                    <input type="text" id="nama"
                        class="w-full border border-gray-300 rounded-sm py-2">
                    <label for="password">password</label>
                    <input type="email" name id="email"
                        class="w-full border border-gray-300 rounded-sm py-2">
                    <label for="password">Confirm-password</label>
                    <input type="submit"
                        class="h-12 w-full bg-teal-800 text-white"
                        value="Daftar">
                </form>
                <div>
                    <p class="w-full text-center p-8">
                        Already have an account? <a href="<?= urlpath('login'); ?>">Login</a>
                    </p>
                </div>
            </div>
        </div>
