<template>
    <form @submit.prevent="formData.post(route('jobs.store'))">
        <div class="flex justify-between border-b p-2 mb-6">
            <Input
                title="Job Title"
                inputName="job_title"
                v-model="formData.job_title"
                required
            />
            <Input
                title="Company"
                inputName="company"
                v-model="formData.company"
                required
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
                title="Notes"
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
import Input from "../../Components/form/Input.vue";
import TextArea from "../../Components/form/TextArea.vue";
import { useForm, Link } from "@inertiajs/vue3";
const formData = useForm({
    job_title: "",
    company: "",
    description: "",
    status: "",
    contact_name: "",
    contact_phone_number: "",
    user_id: "",
});
</script>

<style lang="scss" scoped></style>
