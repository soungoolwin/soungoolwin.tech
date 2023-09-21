<script setup>
const { blogs } = defineProps({ blogs: Object }); //props pass from Home.vue that is home page that have two parts(Blogs and Projects)
</script>
<template>
    <Blogs :blogs="blogs" />
</template>

<script>
import Blogs from "./Blogs/Index.vue";

export default {
    components: { Blogs },
};
</script>

<style></style>
