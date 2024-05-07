const { createApp } = Vue;

createApp({
    data() {
        return {
            discs: [],
            singleDisc: null,
        };
    },
    methods: {
        getDiscsFromApi(){
            axios.get("server.php")
            .then((response) => {
                this.discs = response.data;
            })
        },
        getSingleDisc(index){
            param = {
                discIndex: index
            };

            axios.get("server.php", {
                params: param
            })
            .then((response) => {
                this.singleDisc = response.data;
            })
        },
        close(){
            this.singleDisc = null;
        }
    },
    mounted() {
        this.getDiscsFromApi()
    }
}).mount('#app');