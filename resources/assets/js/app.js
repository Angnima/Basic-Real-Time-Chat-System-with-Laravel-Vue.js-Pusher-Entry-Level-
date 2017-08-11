
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));
Vue.component('chat-logs', require('./components/ChatLogs.vue'));
Vue.component('chat-message', require('./components/ChatMessage.vue'));
Vue.component('message-composer', require('./components/MessageComposer.vue'));

const app = new Vue({
    el: '#app',
    data: {
        messages: [],
    },
    created() {
        axios.get('display/messages').then(response => {
            this.messages = response.data;
        });
        Echo.private('TestChatChannel')
            .listen('ChatEvent', (e) => {
                this.messages.push(e.message);
            });
    },
    methods: {
        createMessage(message) {
            axios.post('/store',message).then(response => {

            });
            this.messages.push(message);
        }
    }
});
