<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from '@inertiajs/vue3';
import BreezeButton from "@/Components/PrimaryButton.vue";
import Pagination from "@/Components/Pagination.vue";
import { Link } from '@inertiajs/vue3';
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
    blogs: {
        type: Object,
        default: () => ({}),
    },
});

const form = useForm;

function destroy(id) {
    if (confirm("Are you sure you want to Delete")) {
        form.delete(route('blogs.destroy', id));
    }
}
</script>

<template>
    <Head title="Blogs" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-white">
                Blogs Index
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div v-if="$page.props.flash.message" class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                    <span class="font-medium">
                        {{ $page.props.flash.message }}
                    </span>
                </div>
                <div class="overflow-hidden bg-gray-900 shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-gray-900 border-b border-gray-600">
                        <div class="mb-2">
                            <Link :href="route('blogs.create')">
                            <BreezeButton>Add Blog</BreezeButton>
                            </Link>
                        </div>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">#</th>
                                        <th scope="col" class="px-6 py-3">
                                            Title
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Slug
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Edit
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Delete
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="blog in blogs.data" :key="blog.id"
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            {{ blog.id }}
                                        </th>
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            {{ blog.title }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ blog.slug }}
                                        </td>


                                        <td class="px-6 py-4">
                                            <Link :href="route(
                                                'blogs.edit',
                                                blog.id
                                            )
                                                " class="px-4 py-2 text-black bg-blue-600 rounded-lg">Edit</Link>
                                        </td>
                                        <td class="px-6 py-4">
                                            <BreezeButton class="bg-red-700" @click="destroy(blog.id)">
                                                Delete
                                            </BreezeButton>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <Pagination :data="blogs"/>
                    </div>
                </div>
            </div>
        </div>


    </BreezeAuthenticatedLayout>
</template>