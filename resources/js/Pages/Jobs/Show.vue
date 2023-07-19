<script setup>
import Card from "@/Components/Card.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import { computed, ref } from "vue";
import JobInfo from "@/Components/Jobs/JobInfo.vue";
import JobForm from "@/Components/Jobs/JobForm.vue";
import { capitalize } from "vue";
const props = defineProps({ job: Object });
let editMode = ref(false);
</script>

<template>
    <Head title="Jobs" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ job.job_title }}
                </h2>
            </div>
        </template>

        <div class="py-12 w-full">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <Card>
                        <div class="flex justify-end">
                            <button
                                v-if="editMode == false"
                                @click="editMode = true"
                            >
                                <font-awesome-icon icon="fa-solid fa-pencil" />
                            </button>
                            <button @click="editMode = false" v-else>X</button>
                        </div>

                        <JobInfo :job="job" v-if="editMode == false" />

                        <JobForm :job="job" v-else />
                    </Card>

                    <!-- <div class="p-6 text-gray-900">You're logged in!</div> -->
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
