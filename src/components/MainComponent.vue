<script>
import axios from 'axios' ;

export default{
    name: 'MainComponent' ,
    data(){
        return{
            title: 'MainComponent' ,
            trains:[],
            currentPage: 1,
            lastPage: 1,
            loading: false
        }
    },
    created(){
        this.getTrains()
    },
    methods: {
        getTrains(){
            if(!this.loading){
                this.loading = true;
                axios
                .get('http://localhost:8000/api/trains' ,{
                    params:{
                        page: this.currentPage
                    }
            })
                .then(res => {
                    console.log(res);
                    this.trains = res.data.results.data;
                    this.currentPage = res.data.results.current_page;
                    this.lastPage = res.data.results.last_page;
                    this.loading = false;
                });
            }
           
        },


        changePage(mode){
            switch(mode){
                case '+':
                    if(this.currentPage < this.lastPage){

                        this.currentPage++;
                        this.getTrains();

                    }
                    break;

                case '-':
                    if(this.currentPage > 1){

                        this.currentPage--;
                        this.getTrains();
                        
                    }
                    break;    
            }

        }
    }
}
</script>

<template>
   <main>
        <router-view></router-view>
    </main>
</template>


<style scoped>
   
</style>