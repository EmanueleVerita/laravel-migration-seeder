<script>
export default{
    data(){
        return{
            title: 'FooterComponent'
        }
    }
}
</script>

<template>
    <footer>
        <h2>
            {{ title }}
        </h2>
    </footer>
</template>


<style scoped>
    h2{
        color: green;
    }

</style>