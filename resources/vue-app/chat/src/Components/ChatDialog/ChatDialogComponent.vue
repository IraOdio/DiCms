<template>
   <div class="row">
       <div class="col-12">
           Диалог
       </div>
       <div class="col-12">
           <ChatInputForm></ChatInputForm>
       </div>
   </div>
</template>

<script>
import ChatInputForm from "@/Components/ChatInputForm/ChatInputForm";
export default {
    name: "ChatDialogComponent",
    components: {ChatInputForm},
    setup(props){

    }
}
</script>

<style scoped>

</style>
