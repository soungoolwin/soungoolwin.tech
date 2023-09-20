<script setup>
const { blogs } = defineProps({ blogs: Array }); //props pass from Home.vue that is home page that have two parts(Blogs and Projects)
</script>
<template>
    <Index :blogs="blogs" />
</template>

<script>
import Index from "./Blogs/Index.vue";
export default {
    components: { Index },
};
</script>

<style></style>
