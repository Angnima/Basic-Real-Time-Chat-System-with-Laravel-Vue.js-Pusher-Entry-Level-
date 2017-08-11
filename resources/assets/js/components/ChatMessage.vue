<template>
    <div class="chat-message">
        <div class="myMessage">
            <span>{{ sinMessage.message }}</span>
            <!--<span class="timestamp">{{ sinMessage.user.name }}</span>-->
        </div>

    </div>
</template>
<script>
    export default {
        props: ['sinMessage']
    }
</script>
<style lang="css">
    .timestamp{
        margin-left:-20px;
    }
    .chat-message:nth-child(even){
        width:100%;
        background-color: rgba(0, 0, 0, 0.2);
        padding:1em;
        text-align:left;
        color:#eee;
        border:1px solid #20790e;
        border-radius:10px;
        margin:5px 10px;
    }
    .chat-message:nth-child(odd){
        width:100%;
        background-color:#044f48;
        text-align:right;
        padding:1em;
        color:#eee;
        border:1px solid #20790e;
        border-radius:10px;
        margin-top:5px;
        margin-left:-3px;
    }
</style>