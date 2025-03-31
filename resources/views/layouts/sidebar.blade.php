<aside class="w-64 bg-white dark:bg-gray-800 shadow-md h-screen p-4">
    <nav>
        <ul class="space-y-2">
            <li>
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>
            </li>
            <li>
                <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('companies.index')  }}" class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                    Companies
                </a>
            </li>
            <li>
                <a href="{{ route('employees.index') }}" class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                    Employees
                </a>
            </li>
        </ul>
    </nav>
</aside>
