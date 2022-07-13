new Vue({
    el: "#app",
    data: {
        songList : [],
        genere: "",
    },
    methods: {
        filterData() {
            axios.
            get("api/songListFiltered.php?genre=" + this.genere)
            .then(resp => {
                this.songList = resp.data;

                console.log(this.songList);
        })
        }
    },
    mounted() {
        axios.
        get("api/songList.php")
        .then(resp => {
            this.songList = resp.data.response;

            console.log(this.songList);
        })
    }
})