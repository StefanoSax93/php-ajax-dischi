new Vue({
    el: "#app",
    data: {
        songList : [],
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