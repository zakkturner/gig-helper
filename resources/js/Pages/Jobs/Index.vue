<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";

import JobTable from "@/Components/Tables/JobTable.vue";

defineProps({ jobs: Object });
</script>

<template>
    <Head title="Jobs" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Jobs
                </h2>
            </div>
        </template>

        <div class="py-12 w-full">
            <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <div class="mb-6 w-full flex justify-end">
                        <button
                            class="bg-green-500 text-white text-sm rounded-lg px-6 py-2"
                        >
                            Add New Job
                        </button>
                    </div>

                    <!-- Job Table -->
                    <JobTable :jobs="jobs" />

                    <!-- <div class="p-6 text-gray-900">You're logged in!</div> -->
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
