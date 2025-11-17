<div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4">
        <p class="text-sm text-gray-500">Posts</p>
        <div class="mt-2 text-2xl font-semibold text-gray-900 dark:text-gray-100">{{ $posts }}</div>
    </div>

    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4">
        <p class="text-sm text-gray-500">Pages</p>
        <div class="mt-2 text-2xl font-semibold text-gray-900 dark:text-gray-100">{{ $pages }}</div>
    </div>

    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4">
        <p class="text-sm text-gray-500">Users</p>
        <div class="mt-2 text-2xl font-semibold text-gray-900 dark:text-gray-100">{{ $users }}</div>
    </div>
</div>
