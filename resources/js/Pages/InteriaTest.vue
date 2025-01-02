<script setup>
// import { Link } from "@inertiajs/vue3";
import { Link } from '@inertiajs/inertia-vue3';
import {ref } from 'vue';

const newTitle = ref('');
const newContent = ref('');
</script>

<template>
InteriaTest <br>
<a href="/">a tag</a><br>
<Link href="/">link tag</Link><br>
<Link :href="route('inertia.index')">route with name</Link><br>
<Link :href="route('inertia.show', {id: 50})">route with parameter name</Link>

<div class="mb-8">
    <input type="text" name="newTitle" v-model="newTitle">{{ newTitle }}<br><br>
    <input type="text" name="newContent" v-model="newContent">{{ newContent }}<br><br>
    <Link as="button" method="post" :href="route('inertia.store')" :data="{
        title: newTitle,
        content: newContent
    }">DB Save Test</Link>
</div>
</template>