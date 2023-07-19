<template>
    <form @submit.prevent="formData.put(route('jobs.update', job.id))">
        <div class="flex justify-between border-b p-2 mb-6">
            <Input
                title="Job Title"
                inputName="job_title"
                v-model="formData.job_title"
            />
            <Input
                title="Company"
                inputName="company"
                v-model="formData.company"
            />

            <div class="flex flex-col">
                <label class="font-semibold text-lg">Status</label>

                <select name="status" id="status" v-model="formData.status">
                    <option value="applied">Applied</option>
                    <option value="interviewed">Interviewed</option>
                    <option value="rejected">Rejected</option>
                    <option value="offer">Offer</option>
                </select>
            </div>
        </div>
        <div class="flex justify-between border-b pb-4 mb-6">
            <TextArea
                inputName="description"
                title="Description"
                v-model="formData.description"
            />
        </div>
        <div class="flex justify-between border-b pb-4 mb-6">
            <Input
                title="Contact Name"
                inputName="contact_name"
                v-model="formData.contact_name"
            />
            <Input
                title="Contact Number"
                inputName="contact_phone_number"
                v-model="formData.contact_phone_number"
            />
        </div>
        <button class="bg-green-500 py-2 px-6 rounded-md text-white">
            Save Job
        </button>
    </form>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";
import { useRoute } from "vue-router";
import Input from "../form/Input.vue";
import TextArea from "../form/TextArea.vue";

const props = defineProps({
    job: Object,
});

const formData = useForm({
    job_title: props.job.job_title,
    company: props.job.company,
    description: props.job.description,
    status: props.job.status,
    contact_name: props.job.contact_name,
    contact_phone_number: props.job.contact_phone_number,
    created_at: props.job.created_at,
    updated_at: props.job.updated_at,
    user_id: props.job.user_id,
});
</script>
