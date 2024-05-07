const { createApp } = Vue;

createApp({
    data() {
        return {
            discs: [],
            singleDisc: {},
            isVisible: false
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

            axios.get("server.php", { params: param })
            .then((response) => {
                this.singleDisc = response.data;
            })

            this.isVisible = true;
        },
        close(){
            this.isVisible = false;
            this.singleDisc = {};
        }
    },
    mounted() {
        this.getDiscsFromApi()
    }
}).mount('#app');