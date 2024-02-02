<div>
    <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
        <div class="relative overflow-hidden rounded-lg bg-gray-600 px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
            <dt>
                <div class="absolute rounded-md bg-red-600 p-3">
                    <i class="ri-user-line px-1"></i>
                </div>
                <p class="ml-16 truncate text-sm font-medium text-gray-300">Total Users</p>
            </dt>
            <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                <p class="text-2xl font-semibold text-gray-100"><?= $totalUser ?></p>
                <p class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                    <svg class="h-5 w-5 flex-shrink-0 self-center text-green-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z" clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only"> Increased by </span>
                    <?= $totalUser ?>%
                </p>
                <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
                    <div class="text-sm">
                        <a href="?act=users" class="font-medium text-orange-400 hover:text-red-500">View all<span class="sr-only"> Total Subscribers stats</span></a>
                    </div>
                </div>
            </dd>
        </div>
        <div class="relative overflow-hidden rounded-lg bg-gray-600 px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
            <dt>
                <div class="absolute rounded-md bg-orange-500 p-3">
                    <i class="ri-store-2-line px-1"></i>
                </div>
                <p class="ml-16 truncate text-sm font-medium text-gray-300">Total Products</p>
            </dt>
            <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                <p class="text-2xl font-semibold text-gray-100"><?= $totalProduct ?></p>
                <p class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                    <svg class="h-5 w-5 flex-shrink-0 self-center text-green-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z" clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only"> Increased by </span>
                    <?= $totalProduct ?>%
                </p>
                <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
                    <div class="text-sm">
                        <a href="?act=products" class="font-medium text-yellow-600 hover:text-orange-500">View all<span class="sr-only"> Avg. Open Rate stats</span></a>
                    </div>
                </div>
            </dd>
        </div>
        <div class="relative overflow-hidden rounded-lg bg-gray-600 px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
            <dt>
                <div class="absolute rounded-md bg-blue-500 p-3">
                    <i class="ri-chat-1-line px-1"></i>
                </div>
                <p class="ml-16 truncate text-sm font-medium text-gray-300">Total Comments</p>
            </dt>
            <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                <p class="text-2xl font-semibold text-gray-100"><?= $totalComment ?></p>
                <p class="ml-2 flex items-baseline text-sm font-semibold text-red-600">
                    <svg class="h-5 w-5 flex-shrink-0 self-center text-red-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z" clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only"> Decreased by </span>
                    <?= $totalComment ?>%
                </p>
                <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
                    <div class="text-sm">
                        <a href="?act=comments" class="font-medium text-cyan-600 hover:text-green-500">View all<span class="sr-only"> Avg. Click Rate stats</span></a>
                    </div>
                </div>
            </dd>
        </div>

    </dl>
</div>