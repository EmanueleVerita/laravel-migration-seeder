<script>
export default{
    data(){
        return{
            title: 'HeaderComponent'
        }
    }
}
</script>

<template>
    <header>
        <h2>
            {{ title }}
        </h2>
    </header>
</template>


<style scoped>
    h2{
        color: blue;
    }

</style>