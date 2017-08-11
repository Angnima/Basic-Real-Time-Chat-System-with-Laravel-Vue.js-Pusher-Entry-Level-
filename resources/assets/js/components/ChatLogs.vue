<template>
    <div class="chat-logs">
        <chat-message v-for="sinMessage in messages" v-bind:sinMessage="sinMessage"></chat-message>
    </div>
</template>
<script>
    export default {
        props: ['messages']
    }
</script>
<style></style>