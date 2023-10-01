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

        <nav>
                <ul>
                    <li>
                        HOme
                    </li>

                    <li>
                        Chi Siamo
                    </li>
                </ul>
            </nav>
    </header>
</template>


<style scoped>
    h2{
        color: blue;
    }

</style>