const { createApp } = Vue;

createApp({
    data() {
        return {
                apiUrl : './server.php',
                discList : [],
        }
    },

    methods: {
        getDisc(){
            axios.get(this.apiUrl, {
                params: {}
            })
            .then((response)=> {
                console.log(response);
                this.discList = response.data;
            })
            .catch(function (error) {
                console.log(error);
            })
        }
    },

    created() {
        this.getDisc();
    },
}).mount('#app');