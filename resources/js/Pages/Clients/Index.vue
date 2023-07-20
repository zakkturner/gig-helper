<template>
    <Head title="Clients" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Clients
                </h2>
            </div>
        </template>

        <div class="py-12 w-full">
            <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <div class="mb-6 w-full flex justify-end">
                        <Link
                            as="button"
                            href="/jobs/create"
                            class="bg-green-500 text-white text-sm rounded-lg px-6 py-2"
                        >
                            Add New Client
                        </Link>
                    </div>

                    Clients
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup></script>

<style lang="scss" scoped></style>
