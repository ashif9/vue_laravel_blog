<template>
    <div class="container">
        <h2 class="text-center">This is Article Page</h2>
        <div v-for="article in articles" v-bind:key="article.id" class="mb-1">
            
                <div class="card card-header">
                    <h4>{{ article.title }}</h4>
                </div>
                <div class="card card-body">
                    <p>{{article.body}}</p>
                </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            msg: 'hello this just message',
            articles : [],
            article :{
                userId: '',
                id: '',
                title: '',
                body: ''
            }
        }
    },

    created(){
        this.getJsonData();
    },

    methods:{
        getJsonData(){
            axios.get('https://jsonplaceholder.typicode.com/posts')
            .then((response)=> {
                // console.log(response.data);
                this.articles = response.data;
                console.log(this.articles);
            })
            .catch(err => console.log(err))
        }
    }

}
</script>

