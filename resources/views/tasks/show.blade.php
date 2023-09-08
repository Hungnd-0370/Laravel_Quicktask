<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __("Task Detail") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-gray-900 dark:text-white" scope="col">{{ __("Task Name") }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-slate-900 dark:text-white text-center text-lg">{{ $task->name }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
