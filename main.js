const { createApp } = Vue;

createApp({
    data() {
        return {
            task: "ciao",
            APIurl: "API.php",
            lista: []
        }
    },
    methods: {
        callApi(){
          axios.get(this.APIurl).then((risposta) => {
            this.lista = risposta.data;
            console.log(risposta.data)
        })
        }
    },
    mounted() {
      console.log(this.task)
      
    }
}).mount('#app')
