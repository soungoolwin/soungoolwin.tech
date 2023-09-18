<template>
    <h1>Hello{{ name }}</h1>
    <a :href="route('ziggy')">Ziggy</a>
</template>

<script>
export default {
    props: {
        name: String,
    },
};
</script>

<style></style>
