<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-white leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bbg-dots-darker overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-white">You're logged in!</div>
                </div>
                <img src="images/valogo.png" style="max-width: 180px;" />
            </div>
        </div>
        
    </AuthenticatedLayout>
</template>