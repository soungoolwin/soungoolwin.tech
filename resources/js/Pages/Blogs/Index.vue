<script setup>
import formatRelativeTime from "../../../js/composables/formatRelativeTime";
import calculateReadingTime from "../../../js/composables/calculateReadingTime";
const { blogs } = defineProps({ blogs: Object });

// Function to truncate content for preview
const truncatedContent = (content) => {
    const words = content.split(" ");
    const truncatedWords = words.slice(0, 17);
    return truncatedWords.join(" ");
};
</script>

<template>
    <div class="container">
        <!-- Begin Site Title -->
        <div class="mainheading">
            <h1 class="sitetitle">Soung Oo Lwin</h1>
            <p class="lead">
                Crafting Ideas, Sharing Stories, Showcasing Creations
            </p>
        </div>
        <!-- End Site Title -->

        <!-- Begin Blogs -->
        <section class="featured-posts">
            <div class="section-title">
                <h2><span>Blogs</span></h2>
            </div>
            <div class="card-columns listfeaturedtag">
                <!-- begin post -->
                <div class="card" v-for="blog in blogs.data" :key="blog.id">
                    <div class="row">
                        <div class="col-md-5 wrapthumbnail">
                            <a :href="'blogs/' + blog.slug">
                                <div
                                    class="thumbnail"
                                    :style="
                                        'background-image: url(' +
                                        blog.thumbnail_url +
                                        ')'
                                    "
                                ></div>
                            </a>
                        </div>
                        <div class="col-md-7">
                            <div class="card-block">
                                <h2 class="card-title">
                                    <a href="post.html">{{ blog.title }}</a>
                                </h2>
                                <h4 class="card-text">
                                    {{ truncatedContent(blog.content) }}
                                </h4>
                                <div class="metafooter">
                                    <div class="wrapfooter">
                                        <span class="meta-footer-thumb">
                                            <a href="author.html"
                                                ><img
                                                    class="author-thumb"
                                                    src="../../../img/IMG_1821.jpg"
                                                    alt="Sal"
                                            /></a>
                                        </span>
                                        <span class="author-meta">
                                            <span class="post-name"
                                                ><a href="author.html"
                                                    >Soung Oo Lwin</a
                                                ></span
                                            ><br />
                                            <span class="post-date">{{
                                                formatRelativeTime(
                                                    blog.created_at
                                                )
                                            }}</span
                                            ><span class="dot"></span
                                            ><span class="post-read">{{
                                                calculateReadingTime(
                                                    blog.content
                                                )
                                            }}</span>
                                        </span>
                                        <!-- <span class="post-read-more"
                                            ><a
                                                href="post.html"
                                                title="Read Story"
                                                ><svg
                                                    class="svgIcon-use"
                                                    width="25"
                                                    height="25"
                                                    viewbox="0 0 25 25"
                                                >
                                                    <path
                                                        d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                        fill-rule="evenodd"
                                                    ></path></svg></a
                                        ></span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->
            </div>
            <Pagination :pagination="blogs.meta" />
        </section>
        <!-- End Blogs -->
    </div>
</template>

<script>
import Pagination from "../../components/Pagination.vue";

export default {
    components: { Pagination },
};
</script>

<style></style>
