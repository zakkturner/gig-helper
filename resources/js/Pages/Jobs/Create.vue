<template>
    <Head title="Create new job" />

    <AuthenticatedLayout>
        <div class="py-12 w-full">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <Card>
                        <div class="flex justify-end">
                            <div class="mt-6">
                                <Link
                                    href="/jobs"
                                    class="bg-gray-500 py-2 px-6 rounded-md text-white"
                                >
                                    Cancel
                                </Link>
                            </div>
                        </div>
                        <CreateJobForm />
                    </Card>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import { Head, Link } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Card from "@/Components/Card.vue";
import CreateJobForm from "@/Components/Jobs/CreateJobForm.vue";
</script>

<style lang="scss" scoped></style>
