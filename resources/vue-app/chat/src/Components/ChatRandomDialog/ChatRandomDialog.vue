<template>
    <div class="row">
        <div class="col-12">
            Случайный диалог
        </div>
        <div class="col-12">
            <ChatInputForm />
        </div>
    </div>
</template>

<script>
import ChatInputForm from "@/Components/ChatInputForm/ChatInputForm";
import ChatInitiatorDialog from "@/Composition/ChatInitiatorDialog";
export default {
    name: "ChatRandomDialog",
    components: {ChatInputForm},
    methods:{
        onSendMessage(){

        }
    },
    setup(props){
        return {};
    }
}
</script>

<style scoped>

</style>
