const app = new Vue({

    el: '#app',
    data: {
        arreyAlbum: [],
        // apiAlbum: "http://localhost/BOOLEAN/2022/14_MARZO/server.php",
    },

    methods: {
        getAlbum() {
            axios.get("http://localhost/BOOLEAN/2022/14_MARZO/server.php")
            .then((risultato) => {
                console.log(risultato);

                this.arreyAlbum = risultato.data;
                console.log(this.arreyAlbum);
            })
    
            .catch(function (error) {
                console.log(error);
            });
    
            console.log(this.arreyAlbum);
        }
    },

    created() {
        this.getAlbum();
        console.log(this.arreyAlbum);
    },
})