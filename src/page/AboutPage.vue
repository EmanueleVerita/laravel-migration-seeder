<script>

export default{
    
    data(){
        return{
            title: 'HomePage' ,
            trains:[],
            currentPage: 1,
            lastPage: 1,
            loading: false
        }
    },
    
}
</script>

<template>
    <div>
            <h2>
                {{ title }}
            </h2>
    </div>
        
           
        

       
    
</template>


<style scoped>
    h2{
        color: blue;
    }

</style>