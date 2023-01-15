<template>
    <div class="row">
        <div class="col-12">
            <form @submit.prevent="onSubmitChatMessage">
                <textarea v-model="message" class="form-control"></textarea>
                <button class="form-control" type="submit">Отправить</button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: "ChatInputForm",
    data() {
        return {
            message : 'Введите сообщение!'
        }
    },
    methods:{
        onSubmitChatMessage(){
            console.log('onSubmitChatMessage!!!',this.message)
        }
    }
}
</script>

<style scoped>

</style>
