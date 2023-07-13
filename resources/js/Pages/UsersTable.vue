<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps({
    users: Object,
})

</script>

<template>
    <Head title="Users" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Users Data</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="container my-5">
                        <div class="row justify-content-center">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center ml-auto mr-auto">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody v-if="users && users.length > 0">
                                        <tr v-for="(users,index) in users" :key="index">
                                            <td>{{ users.id }}</td>
                                            <td>{{ users.name }}</td>
                                            <td>{{ users.email }}</td>
                                        </tr>
                                    </tbody>
                                    <tbody v-else>
                                        <tr>
                                            <td text-align="center" colspan="3">No record found.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <pagination text-align="center" :data="users" @pagination-change-page="list"></pagination>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </AuthenticatedLayout>
</template>