<div class="w-full h-screen flex justify-center items-center">
    <div class="w-full max-w-sm p-6 m-auto mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="flex justify-center mx-auto">
            <h1 class="w-2/4 font-medium text-center text-gray-500 capitalize dark:border-gray-400 dark:text-gray-300">Forgot Password</h1>
        </div>

        <form class="mt-6" action="?act=forgot" method="post">
            <div>
                <label for="email" class="block text-sm text-gray-800 dark:text-gray-200">Email</label>
                <input type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" name="email" />
                <span class="label-text-alt text-error"><?= $_SESSION['errors']['email'] ?? null; ?></span>
            </div>

            <div class="mt-6">
                <button class="w-full px-6 py-2.5 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-800 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-50" type="submit" name="submit">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>