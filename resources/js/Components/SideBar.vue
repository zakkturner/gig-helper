<template>
    <nav class="bg-white shadow h-screen py-6 px-6">
        <ul class="flex flex-col w-40">
            <li class="mb-6">
                <NavLink href="/dashboard">
                    <font-awesome-icon
                        icon="fa-solid fa-chart-line"
                        class="mr-4"
                    />
                    Dashboard</NavLink
                >
            </li>
            <li class="mb-6">
                <NavLink href="/jobs">
                    <font-awesome-icon
                        icon="fa-solid fa-briefcase"
                        class="mr-4"
                    />
                    Jobs</NavLink
                >
            </li>
            <li class="mb-6">
                <NavLink href="/clients">
                    <font-awesome-icon icon="fa-solid fa-users" class="mr-4" />
                    Clients</NavLink
                >
            </li>
            <li class="mb-6">
                <NavLink href="/motivation">
                    <font-awesome-icon
                        icon="fa-solid fa-lightbulb"
                        class="mr-4"
                    />
                    Motivation</NavLink
                >
            </li>
        </ul>
    </nav>
</template>

<script setup>
import NavLink from "@/Components/NavLink.vue";
</script>

<style></style>
