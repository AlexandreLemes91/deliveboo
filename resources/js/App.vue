<template>
    <v-app class="app">
        <main>
            <router-view></router-view>
        </main>
    </v-app>
</template>

<script>
import Header from "./components/Header.vue";

export default {
    name: "App",
    components:{
        Header,
    }
};
</script>

<style>

</style>