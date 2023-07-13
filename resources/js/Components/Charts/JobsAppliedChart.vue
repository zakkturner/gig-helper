<template>
    <Line id="my-chart-id" :options="chartOptions" :data="chartData" />
    {{}}
</template>

<script setup>
import { countJobsPerMonth } from "./chartData";
import { Line } from "vue-chartjs";
import {
    Chart as ChartJS,
    Title,
    Tooltip,
    Legend,
    LineElement,
    PointElement,
    CategoryScale,
    LinearScale,
} from "chart.js";
import { onMounted } from "vue";

ChartJS.register(
    Title,
    Tooltip,
    Legend,
    LineElement,
    PointElement,
    CategoryScale,
    LinearScale
);

components: {
    Line;
}

const props = defineProps({
    jobs: Object,
});

const monthNames = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
];

const chartData = {
    labels: [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ],
    datasets: [
        {
            data: countJobsPerMonth(props.jobs).counts,
            backgroundColor: "#F28705",
            label: "Applied Jobs by Month",
        },
        {
            data: countJobsPerMonth(props.jobs).responseCounts,
            backgroundColor: "#03A696",
            label: "Interviews per Month",
        },
    ],
};
const chartOptions = {
    responsive: true,
    maintainAspectRatio: false,
};
</script>
