<template>
    <div class="container">
        <div class="row">
            <test2 v-for="x in 10" :key="x">oke</test2>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
