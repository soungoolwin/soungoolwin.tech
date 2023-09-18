<template>
    <div>
        <header>
            <h1>This is Header</h1>
        </header>

        <!-- Main Content -->
        <main>
            <slot></slot>
            <!-- This is where the specific page/component content will be inserted -->
        </main>

        <!-- Footer -->
        <footer>
            <!-- Include your footer content here -->
        </footer>
    </div>
</template>

<script>
export default {
    // Layout component logic here
};
</script>
