<template>
    <div class="row mt-5">
        <!-- Left Column (About Me) -->
        <div class="col-md-6">
            <h1>Hello, I'm Soung Oo Lwin</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                euismod arcu ac nunc fringilla, id sodales purus suscipit.
                Vivamus rhoncus, nisl nec cursus facilisis, odio nunc bibendum
                turpis, in malesuada libero odio eu turpis.
            </p>
        </div>
        <!-- Right Column (Photo and Social Media Links) -->
        <div class="col-md-6">
            <div class="text-center">
                <img
                    src="../../../img/IMG_1821.jpg"
                    alt="Your Photo"
                    class="img-fluid rounded-circle"
                    style="max-width: 200px"
                />
            </div>
            <div class="mt-4 text-center">
                <!-- Social Media Links -->

                <p>
                    <a
                        href="https://github.com/soungoolwin"
                        target="_blank"
                        class="link-dark"
                        ><i class="fa-brands fa-github mr-2"></i>Follow me on
                        Github</a
                    >
                </p>
                <p>
                    <a
                        href="https://medium.com/@soungoolwin"
                        target="_blank"
                        class="link-dark"
                        ><i class="fa-brands fa-medium mr-2"></i> Follow me on
                        Medium</a
                    >
                </p>
                <p>
                    <a
                        href="https://www.facebook.com/soung.lwin.75"
                        target="_blank"
                        class="link-dark"
                        ><i class="fa-brands fa-facebook mr-2"></i>Follow me on
                        Facebook</a
                    >
                </p>
            </div>
            <div class="sep"></div>
            <p class="text-center">
                <a
                    href="mailto:soungoolwin275@gmail.com"
                    target="_blank"
                    class="link-dark"
                    ><i class="fa-solid fa-envelope mr-2"></i>Follow me on
                    Instagram</a
                >
            </p>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style>
.link-dark:hover {
    color: green;
}
</style>
