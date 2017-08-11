<template>
    <div class="message-composer">
        <input class="message-input" type="text" placeholder="Type message..." v-model="formMessage.message" v-on:keyup.enter="createMessage">
        <button type="submit" class="message-submit" @click="createMessage">Send</button>
    </div>
</template>
<script>
    export default {
        props: ['sinMessage'],
        data() {
            return {
                formMessage: {
                    message: '',
                }
            }
        },
        methods: {
            createMessage() {
                this.$emit('messagecreate',{
                    message: this.formMessage.message
                });
                this.formMessage.message = '';
            }
        }
    }
</script>
<style></style>