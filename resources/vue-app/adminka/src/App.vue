<template>
  <img alt="Vue logo" src="./assets/logo.png">
    <ExampleLayout></ExampleLayout>
</template>

<script>
import ExampleLayout from "@/bussiness-layout/example-layout/components/ExampleLayout";

export default {
  name: 'App',
  components: {
      ExampleLayout
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
