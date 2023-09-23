<template>
    <nav>
        <ul class="pagination justify-content-center">
            <template v-for="link in pagination.links" :key="link.label">
                <li class="page-item" :class="{ active: link.active }">
                    <Link
                        :href="link.url ?? ''"
                        class="page-link"
                        v-raw-html="link.label"
                    >
                        {{ link.label }}
                    </Link>
                </li>
            </template>
        </ul>
    </nav>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
defineProps({
    pagination: Object,
});
</script>

<style></style>
