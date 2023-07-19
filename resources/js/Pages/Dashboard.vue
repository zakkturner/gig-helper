<script setup>
import Card from "@/Components/Card.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import JobsAppliedChart from "@/Components/Charts/JobsAppliedChart.vue";
import ClientsChart from "@/Components/Charts/ClientsChart.vue";
import { countInterviews } from "@/Components/Charts/chartData";
import { computed } from "vue";
const props = defineProps({
    jobs: Object,
});

const interviewNum = computed(() => countInterviews(props.jobs));
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12 w-full">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-between">
                    <Card>
                        <header class="flex items-center justify-between">
                            <h3 class="text-sm font-semibold">
                                Job Applications
                            </h3>
                        </header>
                        <div>
                            <p class="text-3xl">{{ jobs.length }}</p>
                        </div>
                    </Card>
                    <Card>
                        <header class="flex items-center justify-between">
                            <h2 class="text-sm font-semibold">Interviews</h2>
                        </header>
                        <div>
                            <p class="text-3xl">{{ interviewNum }}</p>
                        </div>
                    </Card>
                    <Card>
                        <header class="flex items-center justify-between">
                            <h2 class="text-sm font-semibold">Current Gigs</h2>
                        </header>
                        <div>
                            <p class="text-3xl">12</p>
                        </div>
                    </Card>
                    <Card>
                        <header class="flex items-center justify-between">
                            <h2 class="text-sm font-semibold">
                                Finished Gig Work
                            </h2>
                        </header>
                        <div>
                            <p class="text-3xl">10</p>
                        </div>
                    </Card>
                </div>
                <div class="overflow-hidden">
                    <Card>
                        <header class="flex items-center justify-between">
                            <h2 class="text-xl font-semibold">
                                Job Application Data
                            </h2>
                            <a href="/jobs" class="text-sm hover:text-[#F28705]"
                                >Manage Jobs</a
                            >
                        </header>
                        <div class="mb-6 w-full">
                            <JobsAppliedChart :jobs="jobs" />
                        </div>
                    </Card>
                    <Card>
                        <header class="flex items-center justify-between">
                            <h2 class="text-xl font-semibold">Client Data</h2>
                            <a
                                href="/clients"
                                class="text-sm hover:text-[#F28705]"
                                >Manage Clients</a
                            >
                        </header>
                        <div class="mb-6 w-full">
                            <ClientsChart />
                        </div>
                    </Card>

                    <!-- <div class="p-6 text-gray-900">You're logged in!</div> -->
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
