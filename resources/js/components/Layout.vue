<template>
    <div>
        <!-- navigation -->
        <nav
            class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation"
        >
            <button
                class="navbar-toggler navbar-toggler-right"
                type="button"
                data-toggle="collapse"
                data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container">
                <!-- Begin Logo -->
                <a class="navbar-brand" href="/">
                    <i class="fa-solid fa-s"></i>
                </a>
                <!-- End Logo -->
                <div
                    class="collapse navbar-collapse"
                    id="navbarsExampleDefault"
                >
                    <!-- Begin Menu -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <Link
                                class="nav-link"
                                :class="{
                                    active: $page.url === '/',
                                }"
                                href="/"
                                >Blog</Link
                            >
                        </li>
                        <li class="nav-item">
                            <Link
                                class="nav-link"
                                :class="{ active: $page.url === '/CV' }"
                                href="/CV"
                                >CV</Link
                            >
                        </li>
                        <li class="nav-item">
                            <Link
                                class="nav-link"
                                :class="{
                                    active: $page.url.startsWith('/author'),
                                }"
                                href="/author"
                                >Author</Link
                            >
                        </li>
                    </ul>
                    <!-- End Menu -->
                    <!-- Begin Search -->
                    <form class="form-inline my-2 my-lg-0">
                        <input
                            class="form-control mr-sm-2"
                            type="text"
                            placeholder="Search"
                        />
                        <span class="search-icon">
                            <svg
                                class="svgIcon-use"
                                width="25"
                                height="25"
                                viewbox="0 0 25 25"
                            >
                                <path
                                    d="M20.067 18.933l-4.157-4.157a6 6 0 1 0-.884.884l4.157 4.157a.624.624 0 1 0 .884-.884zM6.5 11c0-2.62 2.13-4.75 4.75-4.75S16 8.38 16 11s-2.13 4.75-4.75 4.75S6.5 13.62 6.5 11z"
                                ></path>
                            </svg>
                        </span>
                    </form>
                    <!-- End Search -->
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main>
            <div class="container">
                <slot></slot>
            </div>
        </main>

        <!-- Footer -->
        <footer class="container">
            <div class="footer">
                <p class="pull-left">Copyright &copy; 2023 Soung Oo Lwin</p>
                <p class="pull-right">
                    Mediumish Theme by
                    <a target="_blank" href="https://www.wowthemes.net"
                        >WowThemes.net</a
                    >
                </p>
                <div class="clearfix"></div>
            </div>
        </footer>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<style>
.active {
    text-decoration: underline;
}
</style>
