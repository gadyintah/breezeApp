<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from '@inertiajs/vue3';
import Pagination from "@/Components/Pagination.vue";

const props = defineProps({
    users: {
        type: Object,
        default: () => ({}),
    },

    categories: {
        type: Object,
        default: () => ({}),
    },
});

</script>

<template>
    <Head title="Users" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-white">
                Users Index
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-gray-900 shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-gray-900 border-b border-gray-200">
                        <div class="relative overflow-hidden shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">ID</th>
                                        <th scope="col" class="px-6 py-3">
                                            Name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Email
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="user in users" :key="user.id"
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            {{ user.id }}
                                        </th>
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            {{ user.name }}
                                        </th>
                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            {{ user.email }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <Pagination :data="categories"/>
                    </div>
                </div>
            </div>
        </div>


    </BreezeAuthenticatedLayout>
</template>