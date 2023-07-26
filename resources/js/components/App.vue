<template>
    <h2>{{greetings}} Carlos from Vue JS</h2>
    <br>
    <input type="text" v-model="greetings">
</template>

<script>
    export default{
        data() {
            return {
                greetings: ''
            }
        }
    }
</script>
