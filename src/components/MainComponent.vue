<script>
import axios from 'axios' ;

export default{
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
        <div>
            <h2>
                {{ title }}
            </h2>
        </div>

        <section>
            <div>
                <div class="trains-container">
                    <div v-for="train in trains" :key="train.id">
                        <h3>
                            {{ train.title }}
                        </h3>
                    </div>
                </div>
                <div class="pagination-container">
                    <div>
                        <button @click="changePage('-')">
                            &laquo; Prev
                        </button>
                    </div>
                    <div>
                        <button @click="changePage('+')">
                            Next &raquo; 
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
</template>


<style scoped>
    h2{
        color: red;
    }

    .trains-container{
        display: flex;
        flex-wrap: wrap;
    }

    .trains-container > *{
        width: calc(100% / 3);
        border: 1px solid black;
        padding: 10px;
    }

    .pagination-container{
        display: flex;
        justify-content: center;
    }

    .pagination-container button{
        padding: 15px 25px;
        background-color: aqua;
        color: blue;
        display: inline-block;
        font-size: 20px;
        transition: .2s ease-in-out;
    }

    .pagination-container button:hover{
        cursor: pointer;
        opacity: 0.6;
    }

</style>