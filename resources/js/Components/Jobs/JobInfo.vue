<template>
    <div>
        <div class="flex justify-between border-b p-2 mb-6">
            <div>
                <h2 class="font-semibold text-lg">Job Title</h2>
                <p>
                    {{ job.job_title }}
                </p>
            </div>
            <div>
                <h2 class="font-semibold text-lg">Company</h2>
                <p>
                    {{ job.company }}
                </p>
            </div>
            <div>
                <h2 class="font-semibold text-lg">Status</h2>
                <p>{{ capitalizedStatus }}</p>
            </div>
        </div>
        <div class="flex justify-between border-b pb-4 mb-6">
            <div>
                <h2 class="font-semibold text-lg">Description</h2>
                <p>
                    {{ job.description }}
                </p>
            </div>
        </div>
        <div class="flex justify-between border-b pb-4 mb-6">
            <div>
                <h2 class="font-semibold text-lg">Contact Name</h2>
                <p>
                    {{ job.contact_name }}
                </p>
            </div>
            <div>
                <h2 class="font-semibold text-lg">Contact</h2>
                <p>{{ job.contact_phone_number }}</p>
            </div>
        </div>
        <div class="flex justify-between border-b pb-4 mb-6">
            <div>
                <h2 class="font-semibold text-lg">Date Applied</h2>
                <p>
                    {{ formattedDate(job.created_at) }}
                </p>
            </div>
            <div>
                <h2 class="font-semibold text-lg">Late Updated</h2>
                <p>
                    {{ formattedDate(job.updated_at) }}
                </p>
            </div>
        </div>
    </div>
</template>

<script setup>
import { computed } from "vue";
import { format } from "date-fns";
const props = defineProps({
    job: Object,
    capitalizedStatus: String,
});

const formattedDate = computed(() => (date) => {
    return format(new Date(date), "MM/dd/yyyy");
});
</script>

<style lang="scss" scoped></style>
