<template>
    <div class="flex flex-col">
        <label :for="inputName" class="font-semibold text-lg">{{
            title
        }}</label>
        <input
            type="text"
            class="text-sm"
            :name="inputName"
            :value="modelValue"
            @input="$emit('update:modelValue', $event.target.value)"
        />
    </div>
</template>

<script setup>
import { onMounted } from "vue";

const props = defineProps(["title", "modelValue", "inputName"]);

const emit = defineEmits(["update:modelValue"]);
</script>

<style lang="scss" scoped></style>
