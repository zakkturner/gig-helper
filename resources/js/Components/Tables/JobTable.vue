<template>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table
            class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
        >
            <thead
                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
            >
                <tr>
                    <th scope="col" class="px-6 py-3">Job Title</th>
                    <th scope="col" class="px-6 py-3">Company</th>
                    <th scope="col" class="px-6 py-3">Phone Number</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr
                    class="bg-white border-b dark:bg-gray-900 dark:border-gray-700"
                    v-for="job in jobs"
                    :key="job.id"
                >
                    <th
                        scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                    >
                        {{ job.job_title }}
                    </th>
                    <td class="px-6 py-4">{{ job.company }}</td>
                    <td class="px-6 py-4">{{ job.contact_phone_number }}</td>
                    <td class="px-6 py-4">{{ job.status }}</td>
                    <td class="px-6 py-4 flex flex-col">
                        <a
                            :href="`/jobs/${job.id}`"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2"
                            >See More</a
                        >

                        <button
                            class="bg-none text-red-500 w-2"
                            @click="openModal(job)"
                        >
                            Delete
                        </button>
                    </td>
                </tr>
            </tbody>

            <Modal :show="modalOpen">
                <h3>
                    Are you sure you want to delete {{ selectedJob.job_title }}?
                </h3>
                <div class="flex flex-col w-1/4 mx-auto mt-6">
                    <Link
                        class="bg-red-500 text-white rounded-md mb-2 py-2"
                        :href="route('jobs.destroy', selectedJob.id)"
                        as="button"
                        method="DELETE"
                        @click="modalOpen = false"
                    >
                        DELETE
                    </Link>
                    <button
                        class="bg-gray-400 text-white py-2 rounded-md"
                        @click.prevent="modalOpen = false"
                    >
                        Cancel
                    </button>
                </div>
            </Modal>

            <div
                v-if="$page.props.flash.message"
                class="alert fixed right-10 bottom-20 bg-green-500 text-white py-2 px-2 rounded"
            >
                {{ $page.props.flash.message }}
            </div>
        </table>
    </div>
</template>

<script setup>
import Modal from "@/Components/Modal.vue";
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
let modalOpen = ref(false);

let selectedJob = ref(null);

let openModal = (job) => {
    modalOpen.value = true;
    selectedJob.value = job;
};

let closeModal = () => {
    modalOpen.value = false;
};

// };
defineProps({
    jobs: Object,
});
</script>

<style lang="scss" scoped></style>
