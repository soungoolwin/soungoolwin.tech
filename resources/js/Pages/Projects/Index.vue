<template>
    <div class="mt-5 col-md-8">
        <h1>
            Here is my list of completed projects, <br />
            Check it out ...
        </h1>
        <p class="mt-4">
            I've already completed some projects using my previous learning
            frameworks, and now I'm eager to take on more complex and
            substantial projects using my current language and frameworks, and
            even exploring new tech stacks.
        </p>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div
                class="col-lg-5 col-md-12 mx-auto"
                v-for="project in projects"
                :key="project.id"
            >
                <a :href="project.project_url" class="link">
                    <div class="project-card">
                        <div class="d-flex align-items-center">
                            <img
                                :src="project.logo_url"
                                alt="Project Logo"
                                class="project-logo"
                            />
                            <h3>{{ project.name }}</h3>
                        </div>

                        <p>{{ project.description }}</p>
                        <p class="project_url">{{ project.project_url }}</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</template>

<script setup>
defineProps({ projects: Object });
</script>

<style>
.project-card {
    border-radius: 5px;

    padding: 20px;
    margin-bottom: 20px;
    transition: transform 0.2s;
}

.project-card:hover {
    transform: scale(1.05);
    background-color: #f0f0f0;
}
.project-card:hover .project_url {
    color: green;
}
.link {
    color: black;
}
.link:hover {
    text-decoration: none;
    color: black;
}
.project-logo {
    max-width: 50px;
    height: 50px;
    margin-right: 10px;
    vertical-align: middle;
    border-radius: 50%;
    margin-right: 10px;
    margin-bottom: 15px;
}
</style>
