<style scoped></style>
<template>
    <div class="page home-page">
        <app-bar title="Home"></app-bar>
        <div class="page-content">
            <h1>Home Page</h1>
            <btn text="My Button" :button="['primary']" :route="{ name: 'home' }" ></btn>
        </div>
    </div>
</template>
<script>
    export default {};
</script>
