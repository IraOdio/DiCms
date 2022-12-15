<template>
    Example Layout
    <div class="row">
        <div class="col-12">
            <input @input="this.onInput" id="id-resource" v-bind:placeholder="idResource" type="text">
            <label for="id-resource">Input Id Resource</label>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <button @click="this.onClickGetAllResources">onClickGetAllResources</button>
            <button @click="this.onClickGetResources">onClickGetResources</button>
            <button @click="this.onClickDeleteResources">onClickDeleteResources</button>
            <button @click="this.onClickPutResources">onClickPutResources</button>
            <button @click="this.onClickPostResources">onClickPostResources</button>
        </div>
    </div>


</template>

<script>
import {
    example_method,
    example_request_post,
    example_request_put,
    example_request_delete, example_request_get
} from "@/bussiness-layout/example-layout/logic/example-logic";
import {log, warn} from "@/service/logger";

export default {
    name: "ExampleLayout",
    setup(props) {
        let setupResult = {
            exampleSetupPropsKey: 'example - Setup - Props - Value'
        };
        return {setupResult: setupResult};
    },
    mounted() {
        // log(true)('example execute log',['example-data-for-log', {'example-obj-key': 'example-obj-value' }]);
        // log(false)('example execute log number 2',['example-data-for-log', {'example-obj-key': 'example-obj-value' }]);
    },
    methods:{
        onInput: function (event){
            this.idResource = event.target.value;
        },
        onClickGetAllResources: function (){
            example_request_get('/api/example/resources/').then((response) => {
                log()('GET response then',response)
            }).catch((error) => {
                warn()('GET  rejected',error.response)
            })
        },
        onClickGetResources: function (){
            example_request_get('/api/example/resources/'+this.idResource).then((response) => {
                log()('GET from id response then',response)
            }).catch((error) => {
                warn()('GET from id  rejected',error.response)
            })
        },
        onClickDeleteResources: function () {
            example_request_delete('/api/example/resources/'+this.idResource).then((response) => {
                log()('DELETE response then',response)
            }).catch((error) => {
                warn()('DELETE rejected',error.response)
            })
        },
        onClickPutResources: function (){
            example_request_put('/api/example/resources/'+this.idResource,{
                'data' : {
                    'new-data-example' : [4,4,4,4,4,2,2,2,-1,-5]
                }
            }).then((response) => {
                log()('PUT response then',response)
            }).catch((error) => {
                warn()('PUT rejected',error.response)
            })
        },
        onClickPostResources:function (){
            example_request_post('/api/example/resources/',{
                'data' : {
                    'new-data-example' : [4,4,4,4,4,2,2,2,-1,-5]
                }
            }).then((response) => {
                log()('POST response then',response)
            }).catch((error) => {
                warn()('POST rejected',error.response)
            })
        }
    },
    data(){
        return {
            idResource:200
        }
    }
}
</script>

<style scoped>

</style>
