<template>
    <div class="flex flex-col w-full">
        <label :for="inputName" class="font-semibold text-lg">{{
            title
        }}</label>
        <textarea
            type="text"
            class="text-sm w-full"
            :name="inputName"
            @input="$emit('update:modelValue', $event.target.value)"
            rows="10"
        >
            {{ modelValue }}

    </textarea
        >
    </div>
</template>

<script setup>
const props = defineProps(["title", "modelValue", "inputName"]);

const emit = defineEmits(["update:ModelValue"]);
</script>

<style lang="scss" scoped></style>
